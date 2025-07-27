<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;

class PresenceController extends Controller
{
    public function updateLocation(Request $request, $id)
    {
        $presence = Presence::findOrFail($id);
        $presence->IsInCorrectLocation = $request->input('IsInCorrectLocation');
        $presence->save();

        return response()->json([
            'message' => 'Verified updated',
            'presence' => [
                'PresenceId' => $presence->PresenceId,
                'SessionId' => $presence->SessionId,
                'StudentId' => $presence->StudentId,
                'IsInCorrectLocation' => (int)$presence->IsInCorrectLocation,
                'IsCorrectFace' => (int)$presence->IsCorrectFace,
                'IsVerified' => (int)$presence->IsVerified,
                'created_at' => $presence->created_at,
                'updated_at' => $presence->updated_at,
            ]
        ]);
    }

    public function updateFace(Request $request, $id)
    {
        $presence = Presence::findOrFail($id);
        $presence->IsCorrectFace = $request->input('IsCorrectFace');
        $presence->save();

        return response()->json([
            'message' => 'Verified updated',
            'presence' => [
                'PresenceId' => $presence->PresenceId,
                'SessionId' => $presence->SessionId,
                'StudentId' => $presence->StudentId,
                'IsInCorrectLocation' => (int)$presence->IsInCorrectLocation,
                'IsCorrectFace' => (int)$presence->IsCorrectFace,
                'IsVerified' => (int)$presence->IsVerified,
                'created_at' => $presence->created_at,
                'updated_at' => $presence->updated_at,
            ]
        ]);
    }

    public function updateVerified(Request $request, $id)
    {
        $presence = Presence::findOrFail($id);
        $presence->IsVerified = $request->input('IsVerified');
        $presence->save();

        return response()->json([
            'message' => 'Verified updated',
            'presence' => [
                'PresenceId' => $presence->PresenceId,
                'SessionId' => $presence->SessionId,
                'StudentId' => $presence->StudentId,
                'IsInCorrectLocation' => (int)$presence->IsInCorrectLocation,
                'IsCorrectFace' => (int)$presence->IsCorrectFace,
                'IsVerified' => (int)$presence->IsVerified,
                'created_at' => $presence->created_at,
                'updated_at' => $presence->updated_at,
            ]
        ]);
    }
}
