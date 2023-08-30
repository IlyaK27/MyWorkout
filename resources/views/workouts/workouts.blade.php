<x-layout>
    @include('workout_partials._banner')
    @include('workout_partials._search')
    @php
        $mysqli = new mysqli('localhost', 'IlyaK', 'password', 'MyWorkout');

        if ($mysqli->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $mysqli->query("SELECT * FROM users u JOIN workouts w ON w.user_id = u.id;");
        $table = $result->fetch_assoc();
    @endphp
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($workouts) == 0)
    @foreach($workouts as $workout)
        @if($workout->visibility != "Private")
            <?php
                $collumn = $mysqli->query("SELECT * FROM users u JOIN workouts w ON w.user_id = u.id WHERE w.id = {$workout->id}")->fetch_assoc();
            ?>
            <x-workout-card :workout="$workout" :collumn="$collumn"/>   
        @endif
    @endforeach

    @else
        <p>No Workouts found</p>
    @endunless

    </div>

    <div class="mt-6 p-4">
        {{$workouts->links()}}
    </div>
    <?php
        mysqli_close($mysqli);
    ?>
</x-layout>