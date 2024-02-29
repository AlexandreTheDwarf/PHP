<html>
  <head><title>Hi!</title></head>
  <body>
  <?php
        $firstname = 'Alexandre';
        $age = '29';
        $eyescolor = 'bleus';
        $family = array(
            0 => 'Mathena', 
            1 => 'Hope', 
            2 => 'Peach',
        ); 
        $hungry = false;

        echo "<p>Hi! My name is $firstname.</p>";
        echo "<p>I am $age years old.</p>";
        echo "<p>My eyes are $eyescolor</p>";
        echo "<p>The first person in my family is $family[0]</p>"
    ?>
  </body>
</html>