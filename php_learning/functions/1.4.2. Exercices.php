<html>
  <head><title>Functions Exercise</title></head>
  <body>
    <?php 
        function replaceAeWithAE($inputString) {
            $outputString = str_replace('æ', 'ae', $inputString);
            return $outputString;
        }
        
        // Test cases
        $input1 = "cæcotrophie";
        $input2 = "chænichthys";
        $input3 = "microsphæra";
        $input4 = "sphærotheca";
        
        $output1 = replaceAeWithAE($input1);
        $output2 = replaceAeWithAE($input2);
        $output3 = replaceAeWithAE($input3);
        $output4 = replaceAeWithAE($input4);
        
        echo $output1 . "\n"; // Output: caecotrophie
        echo $output2 . "\n"; // Output: chaenichthys
        echo $output3 . "\n"; // Output: microsphaera
        echo $output4 . "\n"; // Output: sphaerotheca           
    ?>
  </body>
</html>