<!DOCTYPE html>
<html lang="en">


  <head>
      <!--
      Author: Alex Parys 
      Date: 4/3/2017
   -->
      <?php include("head.php"); ?>
      <link rel="stylesheet" type="text/css" href="styles.css">
      <link rel="stylesheet" type="text/css" href="img-styles.css">
    <title>Alphatek Parts</title>
	<meta charset="utf-8">
  </head>
<?php include("header.php"); ?>
<?php include("nav.php"); ?>

    
    <main>
        <h2>If you need to contact us for any reason please send us an email at <a href="mailto:alphatekparts@wi.rr.com">alphatekparts@wi.rr.com</a></h2>
        <p>If you are checking on the status of an order please be sure to include your contact information.</p>
        <form method="post" action="contact-all.php">
            <label for="fname">Name: </label><input type="text" name="fname" id="foname" placeholder="First Name" required><br><br>
			<label for="lname">Name: </label><input type="text" name="lname" id="loname" placeholder="Last Name" required><br><br>
            <label for="address">Address: </label><input type="text" name="address" id="address" placeholder="Address" required><br><br>
            <label for="ordernumber">Order#: </label><input type="number" name="ordernumber" id="ordernumber" placeholder="Order#"><br><br>
            <input type="hidden" name="id" value="1">
            <input type="submit" id="submit" value="Submit" > <input type="reset">
        </form>
        
        <p>If you are looking for a part that is not listed online or need help identifying a part please email us at <a href="mailto:alphatekparts@wi.rr.com">alphatekparts@wi.rr.com</a></p>
        <form method="post" action="contact-all.php">
            <label for="fname">Name: </label><input type="text" name="fname" id="fname" placeholder="First Name" required><br><br>
			<label for="lname">Name: </label><input type="text" name="lname" id="lname" placeholder="Last Name" required><br><br>
			<label for="phonenumber">Phone Number: </label><input type="tel" name="phonenumber" id="phonenumber" placeholder="Phone Number" required><br><br>
            <label for="processormodel">Processor Model: </label>
            <input type="text" name="processormodel" id="processormodel" placeholder="Processor Model" required><br><br>
            <label for="description">Description:</label><textarea name="description" id="description"></textarea><br><br>
            <input type="hidden" name="id" value="2">
            <input type="submit"  id="submit1" value="Submit" > <input type="reset">
        </form>
		<p>
		Company Information<br>
		Company: Alphatekparts<br>
		Address: 6224 246th Ave<br>
		City: Salem<br>
		State: WI<br>
		Zip: 53168<br>
		Country: USA<br>
		Phone: <a href="tel:708-345-0500">708-345-0500</a><br>
		Fax: 262-290-2840<br>
		Email: <a href="mailto:alphatekparts@wi.rr.com">alphatekparts@wi.rr.com</a><br>
		</p>
	</main>
<?php include("footer.php"); ?>

</html>