<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;


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
}
