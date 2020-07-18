<!DOCTYPE html>
<html lang="en">

  <head>
      <!--
      Author: Alex Parys 
      Date: 3/6/2017
   -->
	  <?php include("head.php"); ?>
	  <title>Sitemap</title>
  </head>
<?php include("header.php"); ?>
<?php include("nav.php"); ?>
  <a href=""></a>
    <main>
        <div class="center-img">
            <p><a href=index.php>index.php</a></p>
            <p><a href="contact.php">contact.php</a></p>
            <p><a href="payment.php">payment.php</a></p>
            <p><a href="shipping.php">shipping.php</a></p>
			<?php
/*			$dir = "./ax200-parts-pages";
			$DirEntries = scandir($dir);
			echo print_r($DirEntries);
			foreach ($DirEntries as $Entry) {
				$dirEntry = "ax200-parts-pages/" . $Entry;
				echo "<p><a href=\"" . $dirEntry . "\">" . $Entry . "</a>";

			};
			*/

			function o_scandir($dir, $torf) {
				//echo $dir . "<br>";
				//echo $torf . "<br>";
				
				
				$DirEntries = scandir($dir);
//				echo print_r($DirEntries);
				unset($DirEntries[ 1]);
//				echo print_r($DirEntries);
				foreach ($DirEntries as $Entry) {
					$dirEntry = $dir . "/" . $Entry;
					echo "<p><a href=\"" . $dirEntry . "\">" . $Entry . "</a>";
					
				}
//				echo print_r($DirEntries);
			}
          //  o_scandir(".", false);
            o_scandir("./ax200-parts-pages", false);
            o_scandir("./ax300se-parts-pages", false);
            o_scandir("./ax390se-parts-pages", false);
            o_scandir("./ax700le-parts-pages", true);
            
			?>

			

        </div>
    </main>
<?php include("footer.php"); ?>
</html>