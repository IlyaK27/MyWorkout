@props(['workout'])

<form action="/workouts/{{$workout->id}}/customize">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <form action="/" method="get">
        <?php 
            if(isset($_GET['search'])){
                $search = $_GET['search'];
            }else{
                $search = "";
            }
        ?>
        <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search Exercises..."
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-blue-500 hover:bg-blue-600"
            >
                Search
            </button>
        </div>
    </div>
</form>

@php
    $exercises = explode(',', $workout->exercises);
    $sets = explode(',', $workout->sets);
    $reps = explode(',', $workout->reps);
    $rests = explode(',', $workout->rest);
    $mysqli = new mysqli('localhost', 'IlyaK', 'password', 'MyWorkout');

    if ($mysqli->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $index = -1;
@endphp

<ul class="flex">
    @foreach($exercises as $exercise)
    <?php
        $result = $mysqli->query("SELECT * 
                                    FROM exercises 
                                    WHERE id = '{$exercise}' 
                                    AND (title LIKE '%{$search}%'
                                        OR description LIKE '%{$search}%'
                                        OR tags LIKE '%{$search}%')");
        $row = $result->fetch_assoc();
        $index++;
    ?>
    @unless($row == null)
    <tr class="border-x-2 border-gray-300">
        <td class="px-6 py-8 border-t border-b border-gray-300 text-lg" width="850">
            <a href="/exercises/{{$exercise}}">{{$row['title']}}</a>
        </td>
        <td class="px-6 py-8 border-t border-b border-gray-300 text-lg" width="225">
            <a href="/workouts/{{$workout->id}}/adjust/{{$index}}" class="text-gray_color-700 px-6 py-2 rounded-xl">   
                <i class="fa-solid fa-gear"></i>
                Adjust
            </a>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="225">
            <div class="text-laravel-400 px-6 py-2 rounded-xl">   
                <i class="fa fa-pencil-square text-gray_color"></i>
                <?php
                    if(isset($sets[$index]) && $sets[$index] != ""){
                        echo "Sets = {$sets[$index]}";
                    }
                    else{
                        echo "Sets = 0";
                    }
                ?>
            </div>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="200">
            <div class="text-laravel-400 px-6 py-2 rounded-xl">   
                <i class="fa-solid fa-sort-numeric-asc"></i>
                <?php
                    if(isset($reps[$index]) && $reps[$index] != ""){
                        echo "Reps = {$reps[$index]}";
                    }
                    else{
                        echo "Reps = 0";
                    }
                ?>
            </div>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="350">
            <div class="text-blue-300 px-6 py-2 rounded-xl">   
                <i class="fa-solid fa-clock"></i>
                <?php
                    if(isset($rests[$index]) && $rests[$index] != "" && $rests[$index] != "0"){
                        $minutes = intdiv($rests[$index], 60);
                        $seconds = $rests[$index] % 60;
                        $ending = " minutes"; // Formatting so there are always 2 digits for seconds
                        if($seconds < 10){
                            $ending = "0 minutes";
                        }
                        echo "Rest per set = " . $minutes . ":" . $seconds . $ending;
                    }
                    else{
                        echo "Rest per set = None";
                    }
                ?>
            </div>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="125">
            <form method="POST" action="/workouts/{{$workout->id}}">
                @csrf
                @method('PUT')
                <input
                    type="hidden"
                    name="index" 
                    value="{{$index}}"
                />
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>
        </td>
    </tr>
    @endunless
    @endforeach
    <?php
        $mysqli->close();
    ?>
</ul>