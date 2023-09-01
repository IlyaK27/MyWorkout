@props(['workout'])

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
                                        WHERE id = '{$exercise}'");
            $row = $result->fetch_assoc();
            $index++;
        ?>
        @unless($row == null)
            <tr class="border-x-2 border-gray-300">
                <td class="px-6 py-8 border-t border-b border-gray-300 text-lg" width="1050">
                    <a href="/exercises/{{$exercise}}" style="float: left;">{{$row['title']}}</a>
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
            </tr>
        @endunless
    @endforeach
    <?php
        $mysqli->close();
    ?>
</ul>