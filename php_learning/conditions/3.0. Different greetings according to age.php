<html>
  <head><title>Different greetings according to age</title></head>
  <body>
    <?php 
        if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])) {
            $age = $_GET['age'];
            $gender = $_GET['gender'];
            $language = $_GET['language'];
        
            switch (true) {
                case $age < 12 && $language == "yes":
                    switch ($gender) {
                        case "male":
                            echo "Hello kiddo!";
                            break;
                        case "female":
                            echo "Hello, little lady!";
                            break;
                    }
                case $age < 12 && $language == "no":
                    switch ($gender) {
                        case "male":
                            echo "Aloha kiddo!";
                            break;
                        case "female":
                            echo "Aloha, little lady!";
                            break;
                    }
                    break;
                case $age >= 12 && $age < 18 && $language == "yes":
                    switch ($gender) {
                        case "male":
                            echo "Hello Teenager!";
                            break;
                        case "female":
                            echo "Hello Miss Teen!";
                            break;
                    }
                case $age >= 12 && $age < 18 && $language == "no":
                    switch ($gender) {
                        case "male":
                            echo "Aloha Teenager!";
                            break;
                        case "female":
                            echo "Aloha Miss Teen!";
                            break;
                    }
                    break;
                case $age >= 18 && $age < 115 && $language == "yes":
                    switch ($gender) {
                        case "male":
                            echo "Hello Mister!";
                            break;
                        case "female":
                            echo "Hello Madam!";
                            break;
                    }
                case $age >= 18 && $age < 115 && $language == "no":
                    switch ($gender) {
                        case "male":
                            echo "Aloha Mister!";
                            break;
                        case "female":
                            echo "Aloha Madam!";
                            break;
                    }
                    break;
                case $age >= 115:
                    echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
                    break;
            }
        } else {
            echo "Please provide both age and gender as parameters.";
        }        
    ?>
        <form method="get" action="">
            <label for="age">Please type your age :</label>
            <input type="" name="age">
            <br>
            <label for="male" action="">male</label>
            <input type="radio" id="male" name="gender" value="male" />
            <label for="female" action="">female</label>
            <input type="radio" id="female" name="gender" value="female" />
            <br>
            <label for="language" action="">Do you speak english ?</label>
            <label for="yes" action="">yes</label>
            <input type="radio" id="yes" name="language" value="yes" />
            <label for="no" action="">no</label>
            <input type="radio" id="no" name="language" value="no" />
            <br>
            <input type="submit" name="submit" value="Greet me now">
        </form>
  </body>
</html>