<html>
  <head><title>Functions Exercise</title></head>
  <body>
    <?php 
        date_default_timezone_set('Europe/Paris');
        $date = date('Y');
        echo "we are in $date <br>";

        $date2 = date('d-m');
        $date3 = date('h:i:s');
        echo "it is $date2 and it's $date3 o'clock";
    ?>
  </body>
</html>