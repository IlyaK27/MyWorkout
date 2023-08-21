<x-layout>
    @include('workout_partials._search')
    
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img
                    class="w-48 mr-6 mb-6"
                    {{--src="{{$exercise->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"--}}
                    alt=""
                />
    
                <h3 class="text-2xl mb-2">{{$workout->title}}</h3>
                <x-exercise-tags :tagsCsv="$workout->tags"/>
                <div class="border border-gray-200 w-full mb-6"></div>
            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/workouts/create"><i class="fa fa-clone" style="color:laravel"></i> Copy Workout</a>
        </x-card>
        {{--<x-card class="mt-4 p-2 flex space-x-6">
        <a href="/workouts/{{$workout->id}}/edit"><i class="fa-solid fa-pencil"></i> Edit</a>
        <form method="POST" action="/workouts/{{$workout->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
        </form>
        </x-card>--}}
    </div>
</x-layout>