<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RoomController extends Controller
{
    public function getRoomCode(Request $request)
    {
        $roomId = $request->query('roomid');

        if ($roomId) {
            $room = DB::table('rooms')
                ->where('RoomId', $roomId)
                ->first();

            if ($room) {
                return response()->json([
                    'RoomId' => $room->RoomId,
                    'RoomCode' => $room->RoomCode,
                ]);
            } else {
                return response()->json(['error' => 'Room not found'], 404);
            }
        } else {
            $rooms = DB::table('rooms')->select('RoomId', 'RoomCode')->get();
            return response()->json($rooms);
        }
    }
}
