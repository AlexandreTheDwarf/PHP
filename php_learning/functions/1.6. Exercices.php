<!DOCTYPE html>
<html>
<head>
    <title>Generate a new word</title>
</head>
<body>
    <h1>Generate a new word</h1>

    <?php
    function generateRandomWord($minLength, $maxLength) {
        $length = rand($minLength, $maxLength);
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $word = '';
        for ($i = 0; $i < $length; $i++) {
            $word .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $word;
    }

    $shortWord = generateRandomWord(1, 5);
    $longWord = generateRandomWord(7, 15);
    ?>

    <p>Short Word (1-5 letters): <?php echo $shortWord; ?></p>
    <p>Long Word (7-15 letters): <?php echo $longWord; ?></p>

    <button onclick="location.reload()">Generate</button>
</body>
</html>
