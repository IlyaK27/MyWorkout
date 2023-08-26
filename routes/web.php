<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ExerciseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

// All Exercises
Route::get('/', [ExerciseController::class, 'index']);

// Single Exercise
Route::get('/exercises/{exercise}', [ExerciseController::class, 'show']);

// All Workouts
Route::get('/workouts', [WorkoutController::class, 'index']);

// Create Workout Form
Route::get('/workouts/create', [WorkoutController::class, 'create'])->middleware('auth');

// Store Workout Data
Route::post('/workouts', [WorkoutController::class, 'store'])->middleware('auth');

// Edit Workout Form
Route::get('/workouts/{workout}/edit', [WorkoutController::class, 'edit']);

// Customize Workout Form
Route::get('/workouts/{workout}/customize', [WorkoutController::class, 'customize']);

// Update Workout
Route::put('/workouts/{workout}', [WorkoutController::class, 'update'])->middleware('auth');

// Delete Workout
Route::delete('/workouts/{workout}', [WorkoutController::class, 'destroy'])->middleware('auth');

// Manage Workouts
Route::get('/workouts/manage', [WorkoutController::class, 'manage'])->middleware('auth');

// Single Workout
Route::get('/workouts/{workout}', [WorkoutController::class, 'show']);

// Show Register/Create Form
Route::get('register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);