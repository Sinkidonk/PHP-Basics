<!DOCTYPE html>
<html lang="en">
  <head>
      <!--
      Unit: 2
      Author: Alex Parys 
      Date: 2/4/17
      Exercise: Exercise 2-1
   -->
    <title>Conditional Script</title>
	<meta charset="utf-8">
  </head>
    <body>
    <?php
        $IntVariable = 75;
        if ($IntVariable > 100) {
            $Result = '$IntVariable is greater then 100';
        }
        else {
           $Result = '$IntVariable is less than or equal to 100';
        }
        
        echo "<p>$Result</p>";

	?>
        
    </body>

</html>