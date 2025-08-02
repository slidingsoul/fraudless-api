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

        $classIds = Enrollment::where('StudentId', $studentId)->pluck('ClassId');
        $classes = ClassModel::whereIn('ClassId', $classIds)->get();

        return response()->json(['classes' => $classes]);
    }
}
