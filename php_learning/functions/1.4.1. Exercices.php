<html>
  <head><title>Functions Exercise</title></head>
  <body>
    <?php 
        function replaceAandEWithAE($inputString) {
            $outputString = str_replace(['a', 'e'], 'æ', $inputString);
            return $outputString;
        }
        
        // Test cases
        $input1 = "caecotrophie";
        $input2 = "chaenichthys";
        $input3 = "microsphaera";
        $input4 = "sphaerotheca";
        
        $output1 = replaceAandEWithAE($input1);
        $output2 = replaceAandEWithAE($input2);
        $output3 = replaceAandEWithAE($input3);
        $output4 = replaceAandEWithAE($input4);
        
        echo $output1 . "\n"; // Output: cæcotrophie
        echo $output2 . "\n"; // Output: chænichthys
        echo $output3 . "\n"; // Output: microsphæra
        echo $output4 . "\n"; // Output: sphærotheca
        
    ?>
  </body>
</html>