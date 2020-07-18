<!DOCTYPE html>
<html lang="en">
  <head>
      <!--
      Unit: Three
      Author: Alex Parys 
      Date: 2/10/17
      Exercise: 3-1
   -->
    <title>Validate Credit Card</title>
	<meta charset="utf-8">
  </head>
    <body>
        <h1>Validate Credit Card</h1>
    <?php
        $CreditCard = array(
        "",
        "8910-1234-5678-6543",
        "OOOO-9123-4567-0123"
        );
        
        foreach ($CreditCard as $CardNumber) {
            if (empty($CardNumber))
                echo"<p>This Credit Card Number is invalid because it contains an empty string.</p>";
                else {
                    $CreditCardNumber = $CardNumber;
                    $CreditCardNumber = str_replace("-", "", $CreditCardNumber);
                    $CreditCardNumber = str_replace(" ", "", $CreditCardNumber);
                    if (!is_numeric($CreditCardNumber)) echo "<p>Credit Card Number " . $CreditCardNumber . " is not a valid Credit Card number because it contains a non-numeric character. </p>";
                    else
                        echo "<p>Credit Card Number " . $CreditCardNumber . " is a valid Credit Card Number.</p>";
                }
        }

	?>
        
    </body>

</html>