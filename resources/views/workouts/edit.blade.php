<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Workout
            </h2>
            <p class="mb-4">Edit: {{$workout->title}}</p>
        </header>
    
        <form method="POST" action="/workouts/{{$workout->id}}/edit" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">
                    Workout Name
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title" 
                    placeholder="Example: Chest Day" value="{{$workout->title}}"
                />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Example: Chest, Arms, Back, etc" value="{{$workout->tags}}"
                />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Workout Logo
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="logo"
                />
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$workout->logo ? asset('storage/' . $workout->logo) : asset('/images/no-image.png')}}"
                    alt=""
                />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Workout Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    placeholder="Include tasks, requirements, salary, etc"
                >{{$workout->description}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Visibility
                </label>
                <input
                    <?php if ($workout->visibility == "Private"){echo 'checked="checked"';} ?>
                    type="radio"
                    id="private"
                    class="text-xl font-bold ml-5"
                    name="visibility" 
                    value="Private"
                    checked
                />
                <label for="private">Private</label>
                <input
                    <?php if ($workout->visibility == "Anonymous"){echo 'checked="checked"';} ?>
                    type="radio"
                    id="anonymous"
                    class="text-xl font-bold ml-5"
                    name="visibility" 
                    value="Anonymous"
                />
                <label for="anonymous">Anonymous</label>
                <input
                    <?php if ($workout->visibility == "Public"){echo 'checked="checked"';} ?>
                    type="radio"
                    id="public"
                    class="text-xl font-bold ml-5"
                    name="visibility" 
                    value="Public"
                />
                <label for="public">Public</label>
                @error('visibility')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update Workout
                </button>
    
                <a href="/workouts/manage" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>