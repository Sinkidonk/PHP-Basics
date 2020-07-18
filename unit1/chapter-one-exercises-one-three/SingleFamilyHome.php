<!DOCTYPE html>
<html lang="en">
  <head>
      <!--
      Unit:1
      Author: Alex Parys 
      Date: 1/14/2017
   -->
    <title>Single Family Home</title>
	<meta charset="utf-8">
  </head>
    <body>
        <?php
          $SingleFamilyHome = 399500;
          $SingleFamilyHome_Display = number_format($SingleFamilyHome, 2);
          echo "<p>The current median price of a single family home in Pleasanton, CA is $$SingleFamilyHome_Display.</p>";
        
        ?>
</body>
</html>