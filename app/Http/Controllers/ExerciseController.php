<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    // Show all Exercises
    public function index(){
        return view('exercises.index', [
            'exercises' => Exercise::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    
    // Show single Exercises
    public function show(Exercise $exercise){
        return view('exercises.show', [
            'exercise' => $exercise
        ]);
    }

    // Show Selectable Exercises
    public function select(Workout $workout){
        return view('workouts.select', [
            'exercises' => Exercise::latest()->filter(request(['tag', 'search']))->paginate(6)
        ], ['workout' => $workout]);
    }
}
