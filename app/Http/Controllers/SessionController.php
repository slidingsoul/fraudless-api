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
}
