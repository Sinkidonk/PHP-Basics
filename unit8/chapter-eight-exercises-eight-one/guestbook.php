
<!doctype html>
<html>
	<head>
		<title>Guest Book</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Enter your name to sign our guest book</h2>
		<form method="POST" action="SignGuestBook2.php">
			<p>First Name <input type="text" name="first_name" /></p>
			<p>Last Name <input type="text" name="last_name" /></p>
			<p><input type="submit" value="Submit" /></p>
		</form>
		<!-- this was the original link to the show page 
<p><a href="ShowGuestBook.php">Show Guest Book</a></p>
-->
		<?php
		echo "<h2>The Guest Book</h2>";
		$DBConnect = @mysql_connect("localhost", "", ""); /* username and password removed */
		if ($DBConnect === FALSE)
			echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysql_errno() . ": " . mysql_error() . "</p>";
		else { 
			$DBName = "ap_guestbook";
			if (!@mysql_select_db($DBName, $DBConnect)){ 
				echo "<p>There are no entries in the guest book!</p>"; 
			} 
			else { 
				$TableName = "visitors"; 
				$SQLstring = "SELECT * FROM $TableName"; 
				$QueryResult = @mysql_query($SQLstring, $DBConnect);  
				if (mysql_num_rows($QueryResult) == 0){ 
					echo "<p>There are no entries in the guest book!</p>"; 
				} 
				else { 
					echo "<p>The following visitors have signed our guest book:</p>"; 
					echo "<table width='100%' border='1'>"; 
					echo "<tr><th>First Name</th><th>Last Name</th></tr>"; 
					while (($Row = mysql_fetch_assoc($QueryResult)) !== FALSE) { 
						echo "<tr><td>{$Row['first_name']}</td>"; 
						echo "<td>{$Row['last_name']}</td></tr>"; 
					} 
					echo "</table>"; 
				} 
				mysql_free_result($QueryResult); 
			} 
			mysql_close($DBConnect); 
		}
		?>
	</body>
</html>