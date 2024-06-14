<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(StudentController::class)->group(function () {
    Route::get("/", "index")->name("home");
    Route::get("/student", "index")->name("student.index");
    Route::post("/student", "store")->name("student.store");
    Route::get("/student/data", "show")->name("student.show");
    Route::get("/student/show/analytics", "analytics")->name("student.show.analytics");
});
