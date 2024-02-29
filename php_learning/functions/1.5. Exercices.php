<html>
  <head><title>Functions Exercise</title></head>
  <body>
    <?php 
        function feedback($message, $cssClass = 'info') {
            $validCssClasses = array('info', 'warning', 'error');
        
            // Check if the provided CSS class is valid; if not, use 'info' as the default class
            if (!in_array($cssClass, $validCssClasses)) {
                $cssClass = 'info';
            }
        
            // Define an associative array to map the CSS class to the message type
            $cssToTypeMap = array(
                'info' => 'Notice',
                'warning' => 'Warning',
                'error' => 'Error'
            );
        
            // Construct and return the HTML message
            return "<div class=\"$cssClass\">" . $cssToTypeMap[$cssClass] . ": $message</div>";
        }
        
        // Example usage:
        echo feedback("Incorrect email address", "error");        
    ?>
  </body>
</html>