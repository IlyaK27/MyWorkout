<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Adjust Exercise
            </h2>
            {{--<p class="mb-4">Edit: {{$workout->title}}</p>--}}
        </header>
        <?php
            $allsets = explode(',', $workout->sets);
            $sets = $allsets[$index];
            $allreps = explode(',', $workout->reps);
            $reps = $allreps[$index];
            $allrests = explode(',', $workout->rest);
            $rest = $allrests[$index];
        ?>
        <form method="POST" action="/workouts/{{$workout->id}}/customize" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">
                    Sets
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="sets" 
                    placeholder="Example: Chest Day" value="{{$sets}}"
                />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Reps
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="reps"
                    placeholder="Example: Chest, Arms, Back, etc" value="{{$reps}}"
                />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Rest time in seconds
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rest"
                    placeholder="Example: 90 (1 minute 30 seconds)" value="{{$rest}}"
                />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <input
                type="hidden"
                name="allsets" 
                value="{{$workout->sets}}"
            />
            <input
                type="hidden"
                name="allreps" 
                value="{{$workout->reps}}"
            />
            <input
                type="hidden"
                name="allrests" 
                value="{{$workout->rest}}"
            />
            <input
                type="hidden"
                name="index" 
                value="{{$index}}"
            />
            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update Exercise
                </button>
                <a href="/workouts/{{$workout->id}}/customize" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>