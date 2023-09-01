<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WorkoutController extends Controller
{
    // Show all Workouts
    public function index(){
        return view('workouts.workouts', [
            'workouts' => Workout::visibile()->latest()->filter(request(['tag', 'search']))->paginate(6)
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

    // Store Workout Data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'visibility' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Workout::create($formFields);

        return redirect('/')->with('message', 'Workout created successfully!');
    }

    // Copy and Store Workout Data
    public function copy(Workout $workout){
        $newData =[
            'user_id' => auth()->id(),
            'title' => $workout->title,
            'tags' => $workout->tags,
            'description' => $workout->description,
            'exercises' => $workout->exercises,
            'sets' => $workout->sets,
            'reps' => $workout->reps,
            'rest' => $workout->rest,
            'logo' => $workout->logo,
        ];

        Workout::create($newData);

        return redirect('/workouts/manage')->with('message', 'Workout copied successfully!');
    }

    // Show Workout Edit Form
    public function edit(Workout $workout){
        return view('workouts.edit', ['workout' => $workout]);
    }

    // Show Workout Customize Form
    public function customize(Workout $workout){
        return view('workouts.customize', ['workout' => $workout]);
    }

    // Show Workout Exercise Adjust Form
    public function adjust(Workout $workout, $index){
        return view('workouts.adjust', ['workout' => $workout], ['index' => $index]);
    }

    // Update Workout Data
    public function update(Request $request, Workout $workout){
        // Make sure logged in user is owner
        if($workout->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'visibility' => 'required'
        ]);
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $workout->update($formFields);

        return back()->with('message', 'Workout updated successfully!');
    }

    // Update Workout Exercise Data
    public function save(Request $request, Workout $workout){
        // Make sure logged in user is owner
        if($workout->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'sets' => 'required',
            'reps' => 'required',
            'rest' => 'required',
            'allsets' => 'required',
            'allreps' => 'required',
            'allrests' => 'required',
            'index' => 'required',
        ]);
        $newSets = explode(',', $formFields['allsets']);
        $newSets[$formFields['index']] = $formFields['sets'];
        $newSets = implode(',', $newSets);

        $newReps = explode(',', $formFields['allreps']);
        $newReps[$formFields['index']] = $formFields['reps'];
        $newReps = implode(',', $newReps);

        $newRests = explode(',', $formFields['allrests']);
        $newRests[$formFields['index']] = $formFields['rest'];
        $newRests = implode(',', $newRests);

        $newData = array("sets" => $newSets, "reps" => $newReps, "rest" => $newRests);
        $workout->update($newData);
        return back()->with('message', 'Exercise updated successfully!');
    }

    // Add Exercise to Workout
    public function add(Request $request, Workout $workout){
        // Make sure logged in user is owner
        if($workout->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'exercise' => 'required'
        ]);
        if($workout->exercises == ""){
            $exercises = $formFields['exercise'];
            $sets = "0";
            $reps = "0";
            $rest = "0";
        }
        else{
            $exercises = $workout->exercises . "," . $formFields['exercise'];
            $sets = $workout->sets . ",0";
            $reps = $workout->reps . ",0";
            $rest = $workout->rest . ",0";
        }
        $newData = array("exercises" => $exercises, "sets" => $sets, "reps" => $reps, "rest" => $rest);
        $workout->update($newData);
        return back()->with('message', 'Workout updated successfully!');
    }

    // Remove Exercise to Workout
    public function remove(Request $request, Workout $workout){
        // Make sure logged in user is owner
        if($workout->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'index' => 'required'
        ]);

        $exercises = explode(',', $workout->exercises);
        array_splice($exercises, $formFields['index'], 1);
        $exercises = implode(',', $exercises);

        $sets = explode(',', $workout->sets);
        array_splice($sets, $formFields['index'], 1);
        $sets = implode(',', $sets);
        
        $reps = explode(',', $workout->reps);
        array_splice($reps, $formFields['index'], 1);
        $reps = implode(',', $reps);

        $rest = explode(',', $workout->rest);
        array_splice($rest, $formFields['index'], 1);
        $rest = implode(',', $rest);

        $newData = array("exercises" => $exercises, "sets" => $sets, "reps" => $reps, "rest" => $rest);
        $workout->update($newData);
        return back()->with('message', 'Exercise removed successfully!');
    }

    // Delete Workout
    public function destroy(Workout $workout){

        // Make sure logged in user is owner
        if($workout->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $workout->delete();
        return redirect('/workouts/manage')->with('message', 'Workout deleted successfully');
    }

    // Manage Workout
    public function manage(){
        return view('workouts.manage', ['workouts' => auth()->user()->workouts()->get()]);
    }
}
