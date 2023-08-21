<x-layout>
    @include('exercise_partials._hero')
    @include('exercise_partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($exercises) == 0)
    @foreach($exercises as $exercise)
        <x-exercise-card :exercise="$exercise" /> 
    @endforeach

    @else
        <p>No Exercises found</p>
    @endunless

    </div>

    <div class="mt-6 p-4">
        {{$exercises->links()}}
    </div>
</x-layout>