<x-layout>
    @include('workout_partials._banner')
    @include('workout_partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($workouts) == 0)
    @foreach($workouts as $workout)
        <x-workout-card :workout="$workout" /> 
    @endforeach

    @else
        <p>No Workouts found</p>
    @endunless

    </div>

    <div class="mt-6 p-4">
        {{$workouts->links()}}
    </div>
</x-layout>