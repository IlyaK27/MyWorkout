<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                 Create your workout
            </h2>
            <p class="mb-4">Create and keep track of your workout</p>
        </header>
    
        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Workout Name</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title" 
                    placeholder="Example: Push Day" value="{{old('title')}}"
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
                        placeholder="Example: Chest, Triceps, Short, etc" value="{{old('tags')}}"
                    />
                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Workout Picture
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="logo"
                    />
                    @error('logo')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">Workout Description</label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description"
                        rows="10"
                        placeholder="Include general information, who it's meant for, strength vs hypertrophy, etc"
                    >{{old('company')}}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Create Workout
                    </button>
                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
        </form>
    </x-card>
</x-layout>