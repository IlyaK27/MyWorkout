<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    // Show all listings
    public function index(){
        return view('exercises.index', [
            'exercises' => Exercise::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }
}
