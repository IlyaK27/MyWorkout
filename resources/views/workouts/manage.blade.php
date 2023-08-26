<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Workouts
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <x-workout-exercise :tagsCsv="$workout-exercise->exercises"/>
                {{--<tr class="border-x-2 border-gray-300">
                    <td class="px-6 py-8 border-t border-b border-gray-300 text-lg" width="1100">
                        <a href="/workouts/{{$workout->id}}">
                            {{$workout->title}}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="300">
                        <a href="/workouts/{{$workout->id}}/edit" class="text-laravel-400 px-6 py-2 rounded-xl">   
                            <i class="fa fa-clone text-gray_color"></i>
                            Copy Workout
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="250">
                        <a href="/workouts/{{$workout->id}}/edit" class="text-laravel-400 px-6 py-2 rounded-xl">   
                            <i class="fa-solid fa-pen-to-square"></i>
                            Edit
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="250">
                        <a href="/workouts/{{$workout->id}}/customize" class="text-blue-300 px-6 py-2 rounded-xl">   
                            <i class="fa-solid fa-plus-square"></i>
                            Customize
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="125">
                        <form method="POST" action="/workouts/{{$workout->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No Workouts Found</p>
                    </td>
                </tr>--}}
            </tbody>
        </table>
        <a href="/workouts/create" class="inline-block text-black ml-2 mt-5"><i class="fa-solid fa-plus"></i> Create Workout</a>
    </x-card>
</x-layout>