
<!doctype html>
<html>
	<head>
		<title>Guest Book</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		echo "";
		if (empty($_POST['first_name']) || empty($_POST['last_name'])) 
		{echo "";}
		else {
			$DBConnect = @mysql_connect("localhost", "", ""); /* username and password removed */
			$DBName = "ap_guestbook";
			mysql_select_db($DBName, $DBConnect);
			$TableName = "visitors";
			$SQLstring = "SHOW TABLES LIKE '$TableName'";
			$QueryResult = @mysql_query($SQLstring, $DBConnect);
			if (mysql_num_rows($QueryResult) == 0)  
				$SQLstring = "CREATE TABLE $TableName (countID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, last_name VARCHAR(40), first_name VARCHAR(40))";
			$QueryResult = @mysql_query($SQLstring, $DBConnect);
			$LastName = stripslashes($_POST['last_name']);
			$FirstName = stripslashes($_POST['first_name']);
			$SQLstring = "INSERT INTO $TableName VALUES(NULL, '$LastName', '$FirstName')";
			$QueryResult = @mysql_query($SQLstring, $DBConnect);
			echo "";
			mysql_close($DBConnect);
		}
		?>
		
		<script>
			setTimeout("window.location.replace('guestbook.php')", 100); 
		</script>
	</body>
</html>