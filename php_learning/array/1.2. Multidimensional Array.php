<html>
  <head><title>Clean your room Exercise</title></head>
  <body>
    <?php 
        $girlfriend = array (
            'firstname' => 'Mathena',
            'lastname' => 'Deglume',
            'age' => 19,
            'favoriteSeason' => 'spring',
            'favoriteSport' => 'null',
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
        echo '<pre>';
            print_r($me);
        echo '</pre>';
    ?>
  </body>
</html>