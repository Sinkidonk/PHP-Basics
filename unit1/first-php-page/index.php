<!DOCTYPE html>
<html lang="en">
  <head>
    <title>First php page</title>
	<meta charset="utf-8">
  </head>
    <body>
	
	<?php
        $Age = 93;
        echo "My age is $Age";
        echo "My php test";
        $Movies = array("Star Wars", "Princess Bride", "The Good, the and the ugly", "Terminator");
        
        echo count($Movies);
        phpinfo();
	?>
</body>
</html>