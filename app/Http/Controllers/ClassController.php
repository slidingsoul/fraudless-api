<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Enrollment;
use App\Models\ClassModel;

class ClassController extends Controller
{
    public function getEnrolledClasses(Request $request)
    {
        $studentId = Auth::guard('api')->user()->StudentId;
        $year = $request->query('year');
        $semester = $request->query('semester'); // "even" or "odd"

        $classIds = Enrollment::where('StudentId', $studentId)->pluck('ClassId');
        $query = ClassModel::whereIn('ClassId', $classIds);

        if ($year) {
            $query->where('ClassYear', $year);
        }
        if ($semester) {
            if ($semester === 'even') {
                $query->whereRaw('Semester % 2 = 0');
            } elseif ($semester === 'odd') {
                $query->whereRaw('Semester % 2 = 1');
            }
        }

        // Join dengan tabel lecturers untuk ambil nama dosen
        $classes = $query
            ->leftJoin('lecturers', 'classes.LecturerId', '=', 'lecturers.LecturerId')
            ->leftJoin('courses', function ($join) {
                $join->on('classes.CourseId', '=', 'courses.CourseId')
                     ->on('classes.CourseCategory', '=', 'courses.CourseCategory');
            })
            ->select('classes.*', 'lecturers.LecturerFullName', 'courses.CourseName', 'courses.Credit')
            ->get();

        return response()->json(['classes' => $classes]);
    }
}
