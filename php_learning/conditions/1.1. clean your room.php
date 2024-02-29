<html>
  <head><title>Clean your room Exercise</title></head>
  <body>
    <?php 
        $room_is_filthy = true;

        if( $room_is_filthy == true ){
            echo "Yuk, Room is dirty : let's clean it up !";
            //cleanup_room();
            echo "<br>Room is now clean!";
            $room_is_filthy = false;
        } else {
            echo "<br>Nothing to do, room is neat.";
        }
     ?>
  </body>
</html>