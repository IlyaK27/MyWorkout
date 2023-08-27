@props(['exercisesCsv'])
@props(['workout'])

<form action="/workouts/{{$workout->id}}/customize">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <form action="/action_page.php" method="get">
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
    $exercises = explode(',', $exercisesCsv);
    $mysqli = new mysqli('localhost', 'IlyaK', 'password', 'MyWorkout');

    if ($mysqli->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
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
    ?>
    @unless($row == null)
    <tr class="border-x-2 border-gray-300">
        <td class="px-6 py-8 border-t border-b border-gray-300 text-lg" width="1050">
            <a href="/exercises/{{$exercise}}">{{$row['title']}}</a>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="250">
            <a href="/workouts/{{$exercise}}/edit" class="text-laravel-400 px-6 py-2 rounded-xl">   
                <i class="fa fa-gear text-gray_color"></i>
                Sets = 
            </a>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="250">
            <a href="/workouts/{{$exercise}}/edit" class="text-laravel-400 px-6 py-2 rounded-xl">   
                <i class="fa-solid fa-sort-numeric-asc"></i>
                Reps =
            </a>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="350">
            <a href="/workouts/{{$exercise}}/customize" class="text-blue-300 px-6 py-2 rounded-xl">   
                <i class="fa-solid fa-clock"></i>
                Rest time between sets
            </a>
        </td>
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" width="125">
            <form method="POST" action="/workouts/{{$exercise}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>
        </td>
    </tr>
    @endunless
    <?php
        //$mysqli->close();
    ?>
    @endforeach
</ul>