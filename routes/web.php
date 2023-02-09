<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('admissions', App\Http\Controllers\admissionController::class);


Route::resource('teachers', App\Http\Controllers\teacherController::class);


Route::resource('faculities', App\Http\Controllers\faculitiesController::class);


Route::resource('academics', App\Http\Controllers\academicsController::class);


Route::resource('classAssignings', App\Http\Controllers\class_assigningsController::class);


Route::resource('classrooms', App\Http\Controllers\classroomsController::class);


Route::resource('users', App\Http\Controllers\usersController::class);


Route::resource('roles', App\Http\Controllers\rolesController::class);


Route::resource('timeTables', App\Http\Controllers\time_tableController::class);


Route::resource('attendances', App\Http\Controllers\attendancesController::class);


Route::resource('semesters', App\Http\Controllers\semesterController::class);
