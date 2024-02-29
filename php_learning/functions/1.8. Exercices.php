<html>
  <head><title>Functions Exercise</title></head>
  <body>
    <h1>Calculate cone volume</h1>
    <form action="" method="get">
        <label for="ray">Rayon</label>
        <input type="text" name="ray" id="ray">
        <label for="height">Height</label>
        <input type="text" name="height" id="height">
        <input type="submit" value="Calculer">
    </form>
    <?php 
        function calculate_cone_volume ($ray, $height) {
            $volume = $ray * $ray * 3.14 * $height * (1/3);
            echo 'The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' =  '. $volume . ' cm<sup>3</sup><br />';
        }
        calculate_cone_volume($_GET['ray'], $_GET['height']);
    ?>
  </body>
</html>