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

        $classes = $query->get();

        return response()->json(['classes' => $classes]);
    }
}
