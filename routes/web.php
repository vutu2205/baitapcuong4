<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentSubjectController;

// TRANG CHỦ
Route::get('/', function () {
    return redirect('/login');
});

// AUTH
Route::get('/login',[AuthController::class,'loginForm']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'registerForm']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/dashboard',[AuthController::class,'dashboard']);
Route::get('/logout',[AuthController::class,'logout']);

// CLASS

Route::get('/classes/create',[ClassRoomController::class,'create'])->name('classes.create');
Route::post('/classes/store',[ClassRoomController::class,'store'])->name('classes.store');
Route::get('/classes', [ClassRoomController::class, 'index'])->name('classes.index');

Route::get('/classes/edit/{id}',[ClassRoomController::class,'edit'])->name('classes.edit');
Route::post('/classes/update/{id}',[ClassRoomController::class,'update'])->name('classes.update');
Route::get('/classes/delete/{id}',[ClassRoomController::class,'delete'])->name('classes.delete');


Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/delete/{id}', [StudentController::class, 'delete'])->name('students.delete');
Route::get('/classes/{class_id}/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::resource('subjects', SubjectController::class)->except(['show', 'edit', 'update', 'destroy']);

Route::get('/student-subject/create', [StudentSubjectController::class, 'create'])->name('student-subject.create');
Route::post('/student-subject/store', [StudentSubjectController::class, 'store'])->name('student-subject.store');

