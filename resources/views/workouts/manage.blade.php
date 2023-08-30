<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Workouts
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($workouts->isEmpty())
                @foreach($workouts as $workout)
                <tr class="border-x-2 border-gray-300">
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
                @endforeach
                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No Workouts Found</p>
                    </td>
                </tr>
                @endunless
            </tbody>
        </table>
        <a href="/workouts" class="inline-block text-black ml-3 mt-5"><i class="fa-solid fa-mail-reply"></i> Back</a>
        <a href="/workouts/create" class="inline-block text-black mr-3 mt-5" style="float: right;"><i class="fa-solid fa-plus"></i> Create Workout</a>
    </x-card>
</x-layout>