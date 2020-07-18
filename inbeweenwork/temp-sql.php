<!DOCTYPE html>
<html lang="en">

  <head>
      <!--
      Author: Alex Parys 
      Date: 3/4/2017
   -->
 <?php include("head.php"); ?>
 	  <meta name="description" content="AX300SE &amp; AX390SE Crossover Guide, Developer/Fixer and Fixer/ Wash, Alphatek Part # 5236-700-07">
	  <meta name="keywords" content="5236-700-07, Crossover Guide, Developer, Fixer, Wash"> 
  <title>Crossover Guide</title>
  </head>
<?php include("header.php"); ?>
<?php include("nav.php"); ?>
    <main>
        <div class="center-img">
            <img class="parts-img" src="./ax300se-parts-pages/full-images/ss-guide.jpg" width="400" height="300" alt="Crossover Guide">
			<img class="parts-img" src="./ax300se-parts-pages/full-images/ss-guide-1.jpg" width="400" height="300" alt="Crossover Guide">
                <?php 
    $DBConnect = @mysql_connect("localhost", "", ""); /* Removed username and password" */
		if ($DBConnect === FALSE)
			echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysql_errno() . ": " . mysql_error() . "</p>";
		else { 
			$DBName = "alphatek";
			if (!@mysql_select_db($DBName, $DBConnect)){ 
				echo "<p>There are no entries in the guest book!</p>"; 
			} 
			else { 
				$TableName = "alph"; 
				$SQLstring = "SELECT Name, price FROM $TableName where ID=1"; 
				$QueryResult = @mysql_query($SQLstring, $DBConnect);  
				if (mysql_num_rows($QueryResult) == 0){ 
					echo "error";
				} 
				else { 
					while (($Row = mysql_fetch_assoc($QueryResult)) !== FALSE) { 
						echo "<p>{$Row['Name']} $ {$Row['price']}</p>"; 
						 
					} 

				} 
				mysql_free_result($QueryResult); 
			} 
			mysql_close($DBConnect); 
		}
    ?>
			<p>Developer/Fixer and Fixer/ Wash</p>
			<p>Alphatek Part # 5236-700-07</p>
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="VFDUKANF639AQ">
                <input type="image" src="images/btn-cart-lg.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" width="120" height="26">
                <img alt="" src="images/pixel.gif" width="1" height="1">
            </form>
        </div>
    </main>

<?php include("footer.php"); ?>
</html>