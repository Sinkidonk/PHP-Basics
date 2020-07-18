<!DOCTYPE html>
<html lang="en">

  <head>
      <!--
      Author: Alex Parys 
      Date: 2/23/2017
   -->
      <link rel="stylesheet" type="text/css" href="styles.css">
      <link rel="stylesheet" type="text/css" href="img-styles.css">
    <title>Alphatek Parts</title>
	<meta charset="utf-8">
  </head>

<?php include("header.php"); ?>
<?php include("nav.php"); ?>
    <main>
        <h2>If you need to contact us for any reason please send us an email @ alphatekparts@wi.rr.com</h2>
        <p>If you are checking on the status of an order please be sure to include your contact information.</p>
        <form>
            <label for="name">Name: </label><input type="text" name="name" id="oname" placeholder="Name" required><br><br>
            <label for="address">Address: </label><input type="text" name="address" id="address" placeholder="Address" required><br><br>
            <label for="ordernumber">Order#: </label><input type="number" name="ordernumber" id="ordernumber" placeholder="Order#"><br><br>
            <input type="submit"  id="submit" value="Submit" > <input type="reset">
        </form>
        <p>If you are looking for a part that is not listed online or need help identifying a part please email us at alphatekparts@wi.rr.com</p>
        <form>
            <label for="name">Name: </label><input type="text" name="name" id="name" placeholder="Name" required><br><br>
            <label for="tel">Phone Number: </label><input type="number" name="phonenumber" id="phonenumber" placeholder="Phone Number" required><br><br>
            <label for="processormodel">Processor Model: </label>
            <input type="text" name="processormodel" id="processormodel" placeholder="Processor Model" required><br><br>
            <label for="description">Description:</label><textarea></textarea><br><br>
            <input type="submit"  id="submit" value="Submit" > <input type="reset">
        </form>
    </main>
    
    <?php
    ini_set('SMTP','smtp.gmail.com');
    ini_set('smtp_port',465);
$to = "aparys001@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: sinkidonk@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
<?php include("footer.php"); ?>
</html>