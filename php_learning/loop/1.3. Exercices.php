<html>
  <head><title>Country Selector</title></head>
  <body>
    <?php 
        // Create an array of countries
        $countries = array(
            'BE' => 'Belgium',
            'FR' => 'France',
            'US' => 'United States',
            'DE' => 'Germany',
            'IT' => 'Italy',
            'ES' => 'Spain',
            'UK' => 'United Kingdom',
            'CA' => 'Canada',
            'AU' => 'Australia',
            'JP' => 'Japan'
        );
        
        // Generate the HTML select box using a loop
        echo '<form>';
        echo '<label for="country">Select a country:</label>';
        echo '<select name="country" id="country">';
        foreach ($countries as $iso => $name) {
            echo "<option value='$iso'>$name</option>";
        }
        echo '</select>';
        echo '</form>';
        
        // Convert the array to an associative array
        $assocCountries = array(
            'BE' => 'Belgium',
            'FR' => 'France',
            'US' => 'United States',
            'DE' => 'Germany',
            'IT' => 'Italy',
            'ES' => 'Spain',
            'UK' => 'United Kingdom',
            'CA' => 'Canada',
            'AU' => 'Australia',
            'JP' => 'Japan'
        );
        
        // Update the HTML select box with the new associative array
        echo '<form>';
        echo '<label for="country">Select a country:</label>';
        echo '<select name="country" id="country">';
        foreach ($assocCountries as $iso => $name) {
            echo "<option value='$iso'>$name</option>";
        }
        echo '</select>';
        echo '</form>';
    ?>        
  </body>
</html>