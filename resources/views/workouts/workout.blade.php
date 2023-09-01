<x-layout>
    @include('workout_partials._search')
    @php
        $mysqli = new mysqli('localhost', 'IlyaK', 'password', 'MyWorkout');

        if ($mysqli->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $name = $mysqli->query("SELECT * FROM users u JOIN workouts w ON w.user_id = u.id WHERE w.id = {$workout->id}")->fetch_assoc()['name'];
    @endphp
    <a href="/workouts" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$workout->logo ? asset('storage/' . $workout->logo) : asset('/images/no-workout-image.png')}}"
                    alt=""
                />
    
                <h2 class="text-2xl mb-3" style="font-size: 35px">{{$workout->title}}</h2>
                @if($workout->visibility == "Public")
                    <h3 class="mb-3" style="font-size: 20px">By: {{$name}}</h3>
                @endif
                <x-workout-tags :tagsCsv="$workout->tags"/>
                <div class="border border-gray-200 w-full mt-4 mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Workout Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{$workout->description}}
                    </div>
                </div>
                <div class="border border-gray-200 w-full mt-4 mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Exercises
                    </h3>
                    <table class="w-full table-auto rounded-sm">
                        <tbody>
                            <x-workout-info :workout="$workout"/>
                        </tbody>
                    </table>
                </div>
            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6">
            <form method="POST" action="/workouts/{{$workout->id}}" enctype="multipart/form-data">
                @csrf
                <button class="text-gray_color"><i class="fa fa-clone text-gray_color"></i> Copy Workout</button>
            </form>
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
    <?php
        mysqli_close($mysqli);
    ?>
</x-layout>