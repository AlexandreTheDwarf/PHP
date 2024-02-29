<html>
    <head><title>Clean your room Exercise, improved</title></head>
    <body>
        <?php
            // Create the array of possible states
                $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

            // When testing, change the index value to navigate to the possible array values
                $room_filthiness = $possible_states[0]; 

                if(  $room_filthiness == $possible_states[0] ){
                    echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
                } else if(  $room_filthiness == $possible_states[1] ){
                    echo "<br>Yuk, Room is filthy : let's clean it up !";
                } else if(  $room_filthiness == $possible_states[2] ){
                    echo "<br>Yuk, Room is dirty : let's clean it up !";
                } else if(  $room_filthiness == $possible_states[3] ){
                    echo "<br>Nothing to do, room is neat.";
                } else {
                    echo "<br>whoua the room is so perfect, it's immaculate!";
                }
         ?>
    </body>
</html>        