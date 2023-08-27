<x-layout>
    @include('workout_partials._search')
    
    <a href="/workouts" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img
                    class="w-48 mr-6 mb-6"
                    {{--src="{{$exercise->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"--}}
                    alt=""
                />
    
                <h3 class="text-2xl mb-4">{{$workout->title}}</h3>
                <x-exercise-tags :tagsCsv="$workout->tags"/>
                <div class="border border-gray-200 w-full mt-4 mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Workout Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{$workout->description}}
                    </div>
                </div>
            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/workouts/create" class="text-gray_color"><i class="fa fa-clone text-gray_color"></i> Copy Workout</a>
            @if(auth()->id() == $workout->user_id)
            <a href="/workouts/{{$workout->id}}/edit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <a href="/workouts/{{$workout->id}}/customize" class="text-blue-300"><i class="fa-solid fa-pen-to-square text-blue-300"></i> Customize</a>
            <form method="POST" action="/workouts/{{$workout->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
            @endif
        </x-card>
    </div>
</x-layout>