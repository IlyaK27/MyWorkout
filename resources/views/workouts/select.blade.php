<x-layout>
    <h1 class="text-3xl text-center font-bold my-6 uppercase">
        Select Exercise
    </h1>
    @include('exercise_partials._search')
    <form method="POST" action="/workouts/{{$workout->id}}/customize/select" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($exercises) == 0)

        @foreach($exercises as $exercise)
            <x-exercise-selector :exercise="$exercise" /> 
        @endforeach

        @else
            <p>No Exercises found</p>
        @endunless

        </div>
        <div class="text-xl font-bold mb-4"></div> {{--To create more space between title and tags--}}
        <div class="mb-6">
            <a href="/workouts/{{$workout->id}}/customize" class="text-black ml-6"><i class="fa-solid fa-mail-reply"></i> Back</a>
            <button class="bg-laravel text-white rounded py-2 px-4 mr-6 hover:bg-black" style="float: right;">
                Add Exercise
            </button>
        </div>
    </form>

    <div class="mt-6 p-4">
        {{$exercises->links()}}
    </div>
</x-layout>