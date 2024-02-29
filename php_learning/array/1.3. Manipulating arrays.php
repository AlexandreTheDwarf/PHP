<html>
  <head><title>Array Exercise</title></head>
  <body>
    <?php 
        $girlfriend = array (
            'firstname' => 'Mathena',
            'lastname' => 'Deglume',
            'age' => 19,
            'favoriteSeason' => 'spring',
            'favoriteSport' => 'null',
            'hobbies' => array ('Gardening', 'Cooking', 'Reading', 'Gaming'),
            'favoriteMovie' => array ('Halloween', 'Elementaire', 'Rango', 'Dragon'),
            'favoriteSerie' => 'The Last Kingdom',
            'favoriteColor' => 'Purple',
            'favoriteGame' => 'Minecraft',
            'likeCoding' => false,
            'likeReading' => false,
            'likeGaming' => true,
            'likeSport' => false,
            'likeCooking' => false
        );
        $me = array(
            'firstname' => 'Alexandre',
            'lastname' => 'Vandewiele',
            'age' => 29,
            'favoriteSeason' => 'Winter',
            'favoriteSport' => 'null',
            'hobbies' => array ('Gaming', 'Watching Series', 'Drawing', 'Getting out with friends'),
            'favoriteMovie' => array ('Lord of the ring', 'The Hobbit', 'Saw', 'Wrong Way', 'Halloween', 'Ready Player One', 'Elementaire'),
            'favoriteSerie' => 'Vikings',
            'favoriteColor' => 'Orange',
            'favoriteGame' => 'Total War Warhammer 3',
            'likeCoding' => true,
            'likeReading' => true,
            'likeGaming' => true,
            'likeSport' => false,
            'likeCooking' => true,
            'girlfriend' => $girlfriend
        );

        $me ['hobbies'][] = 'Taxidermy';
        $me ['lastname'] = 'Durand';
        
        $countGF = count($girlfriend['hobbies']);
        $countMe = count($me['hobbies']);
        $countTotal = $countGF + $countMe;
        echo $me ['lastname'] . "<br>";
        echo "My girlfriend has " . $countGF . " hobbies. <br>";
        echo "I have " . $countMe . " hobbies. <br>";
        echo "Together we have " . $countTotal . " hobbies. <br>";

        // perform array operation
        $possible_hobbies_via_intersection = array_intersect($girlfriend['hobbies'], $me['hobbies']);
        $possible_hobbies_via_merge = array_merge($girlfriend['hobbies'], $me['hobbies']);

        echo '<pre>';
        print_r($possible_hobbies_via_intersection);
        print_r($possible_hobbies_via_merge);
        echo '</pre>';
    ?>
  </body>
</html>