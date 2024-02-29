<html>
  <head><title>The Girl Soccer team</title></head>
  <body>
  <form method="get" action="">
        <label for="name">Please type your name :</label>
        <input type="" name="name">
        <br>
        <label for="age">Please type your age :</label>
        <input type="" name="age">
        <br>
        <label for="male" action="">male</label>
        <input type="radio" id="male" name="gender" value="male" />
        <label for="female" action="">female</label>
        <input type="radio" id="female" name="gender" value="female" />
        <br>
        <input type="submit" name="submit" value="Greet me now">
    </form>

    <?php 
    // 4.1 You want to create a soccer team for girls between 21 and 40 years old.
    //if (isset($_GET['age']) && isset($_GET['gender'])) {
    //    $age = $_GET['age'];
    //    $gender = $_GET['gender'];

    //    if ($age >= 21 && $age <= 40 and $gender === "female"){
    //        echo "Welcome to the team!";
    //    } else {
    //        echo "Sorry you don't fit the criteria";
    //    }
    //}
    ?>
    <?php
    // 4.2. Achieve the same, without the ELSE.
    if (isset($_GET['age']) && isset($_GET['gender'])) {
        $age = $_GET['age'];
        $gender = $_GET['gender'];

        $response = "Sorry you don't fit the criteria";

        if ($age >= 21 && $age <= 40 and $gender === "female"){
            $response = "Welcome to the team!";
        }

        echo $response;
    }
    ?>
  </body>
</html>