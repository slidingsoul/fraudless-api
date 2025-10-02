
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\LookupController;
use App\Http\Controllers\RoomController;

Route::get('/ping', fn () => response()->json(['pong' => true]));
Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return response()->json([
            'message' => 'Database connection successful',
            'database' => DB::connection()->getDatabaseName()
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Database connection failed',
            'error' => $e->getMessage()
        ], 500);
    }
});
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
Route::middleware('auth.jwt')->get('/sessions/by-date', [SessionController::class, 'getByDate']);
Route::middleware('auth.jwt')->get('/my-classes', [ClassController::class, 'getEnrolledClasses']);
Route::middleware('auth.jwt')->put('/lookups', [LookupController::class, 'updateValue']);
Route::middleware('auth.jwt')->get('/room', [RoomController::class, 'getRoomCode']);
Route::middleware('auth.jwt')->get('/lookups/by-category', [LookupController::class, 'getByCategoryName']);
Route::middleware('auth.jwt')->get('/auth/check-token', function () {
    return response()->json(['valid' => true]);
});
Route::middleware('auth.jwt')->get('/sessions/by-year-semester', [SessionController::class, 'getSessionsByYearSemester']);