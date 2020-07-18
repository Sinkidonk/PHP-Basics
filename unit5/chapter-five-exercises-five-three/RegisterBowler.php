<!DOCTYPE html>
<html lang="en">
  <head>
      <!--
      Unit: 5
      Author: Alex Parys 
      Date: 3/8/2017
      Exercise: 5-3
   -->
    <title></title>
	<meta charset="utf-8">
  </head>
    <body>
    <?php
		$FormName = $_POST['name'];
		$FormAge = $_POST['age'];
		$FormAve = $_POST['ave'];
		$MyFile = "bowler.txt";
		$txt =  $FormName . ", " . $FormAge . ", " . $FormAve . "\t\n";
		$file = fopen($MyFile, "a");
		fwrite($file, $txt);
		fclose($file);
		$perms = fileperms($MyFile);
		$perms = decoct($perms % 01000);
		if ($perms !== 0777) {
			chmod($MyFile, 0777);
		}
		
	?>
		<p>Your been enter in for the bowling game thingy thing</p>
        
    </body>

</html>