
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\ClassController;

Route::get('/ping', fn () => response()->json(['pong' => true]));
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth.jwt')->post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth.jwt')->get('/me', function () {
    return response()->json(auth()->guard('api')->user());
});
Route::middleware('auth.jwt')->put('/sessions/{id}', [SessionController::class, 'update']);
Route::middleware('auth.jwt')->put('/presence/{id}/location', [PresenceController::class, 'updateLocation']);
Route::middleware('auth.jwt')->put('/presence/{id}/face', [PresenceController::class, 'updateFace']);
Route::middleware('auth.jwt')->put('/presence/{id}/verified', [PresenceController::class, 'updateVerified']);
Route::middleware('auth.jwt')->get('/sessions/class/{classId}', [SessionController::class, 'getByClass']);
Route::middleware('auth.jwt')->get('/my-classes', [ClassController::class, 'getEnrolledClasses']);