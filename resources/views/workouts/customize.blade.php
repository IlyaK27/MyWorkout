<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Customize Workout
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <x-workout-exercises :workout="$workout"/>
            </tbody>
        </table>
        <a href="/workouts/manage" class="inline-block text-black ml-2 mt-5"><i class="fa-solid fa-check-square"></i> Save Workout</a>
        <a href="/workouts/{{$workout->id}}/customize/select" class="inline-block text-black mr-2 mt-5" style="float: right;"><i class="fa-solid fa-plus"></i> Add Exercise</a>
    </x-card>
</x-layout>