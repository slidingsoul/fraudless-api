<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\ClassModel;


class SessionController extends Controller
{
    public function update(Request $request, $id)
    {
        $session = Session::findOrFail($id);

        $session->SessionDate = $request->input('SessionDate', $session->SessionDate);
        $session->Shift = $request->input('Shift', $session->Shift);
        $session->RoomId = $request->input('RoomId', $session->RoomId);

        $session->save();

        return response()->json(['message' => 'Session updated successfully', 'session' => $session]);
    }

    public function getByClass($classId)
    {
        $studentId = auth()->guard('api')->user()->StudentId;

        $sessions = \App\Models\Session::where('ClassId', $classId)
            ->with(['presences' => function ($query) use ($studentId) {
                $query->where('StudentId', $studentId);
            }])
            ->get();

        return response()->json([
            'sessions' => $sessions
        ]);
    }

    public function getByDate(Request $request)
    {
        $date = $request->query('date', now()->toDateString());

        $sessions = Session::whereDate('SessionDate', $date)->get();

        return response()->json([
            'sessions' => $sessions
        ]);
    }

    public function getSessionsByYearSemester(Request $request)
    {
        $year = $request->query('year');
        $semester = $request->query('semester'); // "even" or "odd"

        if (!$year || !$semester) {
            return response()->json(['error' => 'year and semester are required'], 400);
        }

        // Filter kelas berdasarkan tahun dan semester
        $classQuery = ClassModel::where('ClassYear', $year);

        if ($semester === 'even') {
            $classQuery->whereRaw('Semester % 2 = 0');
        } elseif ($semester === 'odd') {
            $classQuery->whereRaw('Semester % 2 = 1');
        }

        $classes = $classQuery->get();

        // Ambil semua sesi dari kelas yang sesuai, nested dengan info kelas
        $result = [];
        foreach ($classes as $class) {
            $sessions = Session::where('ClassId', $class->ClassId)->get();
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
