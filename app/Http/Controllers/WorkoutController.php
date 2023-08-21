<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    // Show all Workouts
    public function index(){
        return view('workouts.workouts', [
            'workouts' => Workout::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    // Show single Workout
    public function show(Workout $workout){
        return view('workouts.workout', [
            'workout' => $workout
        ]);
    }

    // Create Workout
    public function create(){
        return view('workouts.create');
    }
}
