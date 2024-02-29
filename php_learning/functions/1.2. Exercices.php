<html>
  <head><title>Functions Exercise</title></head>
  <body>
    <form method="post" action="1.2.%20Exercices.php">
      <label for="num1">Number 1:</label>
      <input type="text" name="num1" id="num1" /><br>
      <label for="num2">Number 2:</label>
      <input type="text" name="num2" id="num2" /><br>
      <input type="submit" value="Add Numbers" /><br>
    <?php 
        // Check if the form has been submitted
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            // Declare two integer variables
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        

            function Sum($num1, $num2) {
                // Check if $num1 and $num2 are numeric
                if (is_numeric($num1) && is_numeric($num2)) {
                    // Both arguments are numbers, so calculate and return the sum
                    return $num1 + $num2;
                } else {
                    // At least one argument is not a number, so display an error message
                    return "Error: Argument is not a number.";
                }
            }
            
            $result = Sum($num1, $num2);
            echo $num1 . " + " . $num2 . " = " . $result;
        }
    ?>
  </body>
</html>