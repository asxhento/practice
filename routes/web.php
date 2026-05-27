<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('student', [\App\Http\Controllers\studentmngtController::class, 'index'])->name('studentsomething.index');
    route::get('student/create', [\App\Http\Controllers\studentmngtController::class, 'create'])->name('studentsomething.create');
    route::post('student', [\App\Http\Controllers\studentmngtController::class, 'store'])->name('studentsomething.store');
    route::get('student/{id}/edit', [\App\Http\Controllers\studentmngtController::class, 'edit'])->name('studentsomething.edit');
    route::put('student/{id}', [\App\Http\Controllers\studentmngtController::class, 'update'])->name('studentsomething.update');
    route::delete('studenT/{id}', [\App\Http\Controllers\studentmngtController::class, 'destroy'])->name('studentsomething.destroy');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
