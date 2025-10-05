<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\ClassModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class SessionController extends Controller
{
    public function getByClass($classId)
    {
        $studentId = auth()->guard('api')->user()->StudentId;

        // Ambil info kelas beserta dosen dan course
        $class = ClassModel::leftJoin('lecturers', 'classes.LecturerId', '=', 'lecturers.LecturerId')
            ->leftJoin('courses', function ($join) {
                $join->on('classes.CourseId', '=', 'courses.CourseId')
                    ->on('classes.CourseCategory', '=', 'courses.CourseCategory');
            })
            ->select('classes.*', 'lecturers.LecturerFullName', 'courses.CourseName', 'courses.Credit')
            ->where('classes.ClassId', $classId)
            ->first();

        if (!$class) {
            return response()->json(['error' => 'Class not found'], 404);
        }

        $sessions = Session::where('ClassId', $classId)
            ->with(['presences' => function ($query) use ($studentId) {
                $query->where('StudentId', $studentId);
            }])
            ->get();

        foreach ($sessions as $session) {
            $shift = DB::table('shifts')->where('Shift', $session->Shift)->first();
            $session->shift_start = $shift ? $shift->TimeStart : null;
            $session->shift_end = $shift ? $shift->TimeEnd : null;
        }

        return response()->json([
            'class' => $class,
            'sessions' => $sessions
        ]);
    }

    public function getSessionsByDate(Request $request)
    {
        $date = $request->query('date', now()->toDateString());
        $studentId = auth()->guard('api')->user()->StudentId;
        $classIds = DB::table('enrollments')->where('StudentId', $studentId)->pluck('ClassId');

        // Ambil semua sesi di tanggal tersebut
        $sessions = Session::whereIn('ClassId', $classIds)
        ->whereDate('SessionDate', $date)
        ->get();

        $result = [];
        foreach ($sessions as $session) {
            // Ambil info kelas beserta dosen dan course
            $class = ClassModel::leftJoin('lecturers', 'classes.LecturerId', '=', 'lecturers.LecturerId')
                ->leftJoin('courses', function ($join) {
                    $join->on('classes.CourseId', '=', 'courses.CourseId')
                        ->on('classes.CourseCategory', '=', 'courses.CourseCategory');
                })
                ->select('classes.*', 'lecturers.LecturerFullName', 'courses.CourseName', 'courses.Credit')
                ->where('classes.ClassId', $session->ClassId)
                ->first();

            // Ambil presences untuk student yang login
            $presences = $session->presences()->where('StudentId', $studentId)->get();

            // Ambil info shift
            $shift = DB::table('shifts')->where('Shift', $session->Shift)->first();
            $session->shift_start = $shift ? $shift->TimeStart : null;
            $session->shift_end = $shift ? $shift->TimeEnd : null;

            $result[] = [
                'class' => $class,
                'session' => $session,
                'presences' => $presences
            ];
        }

        return response()->json([
            'data' => $result
        ]);
    }

    public function getSessionsByYearSemester(Request $request)
    {
        $year = $request->query('year');
        $semester = $request->query('semester'); // "even" or "odd"
        $studentId = auth()->guard('api')->user()->StudentId;
        $enrolledClassIds = DB::table('enrollments')->where('StudentId', $studentId)->pluck('ClassId');

        $enrolledClassIds = DB::table('enrollments')->where('StudentId', $studentId)->pluck('ClassId');


        $classQuery = ClassModel::query();

        if ($year) {
            $classQuery->where('ClassYear', $year);
        }
        if ($semester) {
            if ($semester === 'even') {
                $classQuery->whereRaw('Semester % 2 = 0');
            } elseif ($semester === 'odd') {
                $classQuery->whereRaw('Semester % 2 = 1');
            }
        }

        // Join dengan lecturers dan courses
        $classes = $classQuery
        ->leftJoin('lecturers', 'classes.LecturerId', '=', 'lecturers.LecturerId')
        ->leftJoin('courses', function ($join) {
            $join->on('classes.CourseId', '=', 'courses.CourseId')
                ->on('classes.CourseCategory', '=', 'courses.CourseCategory');
        })
        ->select('classes.*', 'lecturers.LecturerFullName', 'courses.CourseName', 'courses.Credit')
        ->get();

        $result = [];
        foreach ($classes as $class) {
            $sessions = Session::where('ClassId', $class->ClassId)
            ->with(['presences' => function ($query) use ($studentId) {
                $query->where('StudentId', $studentId);
            }])
            ->get();

            foreach ($sessions as $session) {
                $shift = DB::table('shifts')->where('Shift', $session->Shift)->first();
                $session->shift_start = $shift ? $shift->TimeStart : null;
                $session->shift_end = $shift ? $shift->TimeEnd : null;
            }

            $result[] = [
                'class' => $class,
                'sessions' => $sessions
            ];
        }

        return response()->json([
            'data' => $result
        ]);
    }
}
