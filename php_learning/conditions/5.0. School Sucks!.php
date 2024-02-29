<html>
  <head><title>Clean your room Exercise</title></head>
  <body>
    <form action="" method="get">
        <label for="name">Name :</label>
        <input type="text" name="name">
        <br>
        <label for="point" action="">Point :</label>
        <input type="text" name="point">
        <br>
        <input type="submit" name="submit" value="Comment">
        <br>
    </form>
    <?php 
        if (isset($_GET['name']) && isset($_GET['point'])) {
            $name = $_GET['name'];
            $point = $_GET['point'];

            switch (true){
                case $point <= 4:
                    echo "This work is really bad. What a dumb kid!, $name!";
                    break;
                case $point >= 5 && $point <= 9:
                    echo "This is not sufficient. More studying is required. $name!";
                    break;
                case $point == 10:
                    echo "barely enough!, $name!";
                    break;
                case $point >= 11 && $point <= 14:
                    echo "Not bad!, $name!";
                    break;
                case $point >= 15 && $point <= 18:
                    echo "Bravo, bravissimo!, $name!";
                    break;
                case $point >= 19 && $point <= 20:
                    echo "Too good to be true : confront the cheater!, $name!";
                    break;
            }
        }
    ?>
  </body>
</html>