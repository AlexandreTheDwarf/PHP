<html>
  <head><title>Different greetings according to time</title></head>
  <body>
    <?php 
        date_default_timezone_set('Europe/Paris');
        $now = date("H:i:s");

        // Test the value of $now and display the right message according to the specifications.
        if ($now >= "05:00:00" and $now <= "09:00:00"){
            echo "Good morning !";
            }
            else if ($now >= "09:00:01" and $now <= "12:00:00"){
                echo "Good day !";
            }
            else if ($now >= "12:00:01" and $now <= "16:00:00"){
                echo "Good afternoon !";
            }
            else if ($now >= "16:00:01" and $now <= "21:00:00" ){
                echo "Good evening !";
            }
            else if ($now >= "21:00:01" and $now <= "04:59:59"){
                echo "Good night !";
            }
    ?>
  </body>
</html>