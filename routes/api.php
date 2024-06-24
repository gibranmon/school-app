<?php

use App\Http\Controllers\EnrrollController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json(true);
});

Route::prefix('v1')->group(function () {
    // Enroll
    Route::resource('/enrroll', EnrrollController::class);
    // Teachers
    Route::get('/teachers/get_classes/{id}', [TeacherController::class, 'showClassesTeacher']);
    Route::resource('/teachers', TeacherController::class);
});
