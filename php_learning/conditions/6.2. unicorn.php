<html>
  <head><title>Are you a human, a cat or a unicorn ?</title></head>
  <body>
    <form action="" method="get">
        Are you a human, a cat or a unicorn ?
        <input type="radio" name="animal" value="human">Human
        <input type="radio" name="animal" value="cat">Cat
        <input type="radio" name="animal" value="unicorn">Unicorn
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if (isset($_GET['animal'])) {
            $animal = $_GET["animal"];
            $greeting = ($animal === "human") ? "DoCIC5Pxp57qg" : (($animal === "cat") ? "JIX9t2j0ZTN9S" : "fckbO2dUKL3bmuYFoW");
            echo '<iframe src="https://giphy.com/embed/' . $greeting . '" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
        }
    ?>
  </body>
</html>    

