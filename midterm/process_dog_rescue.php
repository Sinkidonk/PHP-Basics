<!DOCTYPE html>
<html lang="en">
  <head>
      <!--
      Unit: MidTerm
      Author: Alex Parys
      Date: 2/28/2017
      Exercise: MidTerm
   -->
    <title>Rescue Dog</title>
	<meta charset="utf-8">
  </head>
    <body>
    <?php
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$dog = $_POST["dog"];
//		echo $fname . "<br>" . $lname . "<br>" . $email . "<br>" . $dog . "<br>";

		function IsDogAvailable($fname, $lname, $dog) {
//			echo $dog . "function";
			$fullname = $fname . " " .  $lname;
			switch($dog) {
				case "Abby":
					$dogavailable = 0;
					break;
				case "Mari":
					$dogavailable = 0;
					break;
				case "Josh":
					$dogavailable = 1;
					break;
				case "Brad":
					$dogavailable = 1;
					break;
				case "Bryce":
					$dogavailable = 1;
					break;
				case "Brook":
					$dogavailable = 1;
					break;
				default:
					$dogavailable = 2;
			}

			switch($dogavailable) {
				case 0:
					echo "<p>Thank you for filling out the Dog Rescue form, "
						. $fullname . ". <br> Unfortunately "
						. $dog . " is no longer available for adoption.";
					break;
				case 1:
					echo "<p>Thank you for filling out the Dog Rescue form, "
						. $fullname
						. ". <br>"
						. $dog . " is still available for adoption. We'll contact you shortly.";
					break;
				default:
					echo "<p>Woo, you got the impossible outcome woo what you want a gold star huh.</p>";
			}
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		function ValidateInput($fname, $lname, $email, $dog) {
			$error = 0;
			
			$fname = test_input($_POST["fname"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
				$fnameErr = "Only letters and white space allowed";
				$error = 1;
				echo $fnameErr;
			} else {
				$error = 0;
			}
			
			$lname = test_input($_POST["lname"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
				$lnameErr = "Only letters and white space allowed";
				$error = 1;
				echo $lnameErr;
			} else {
				$error = 0;
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
				$error = 1;
				echo $emailErr;
			} else {
				$email = test_input($_POST["email"]);
				$error = 0;
			}
			
			switch($error) {
				case 0:
					IsDogAvailable($fname, $lname, $dog);
			}
		}
		

		ValidateInput($fname, $lname, $email, $dog);
		
	?>

    </body>

</html>