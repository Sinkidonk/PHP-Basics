<!DOCTYPE html>
<html lang="en">
  <head>
      <!--
      Unit: 
      Author: Alex Parys 
      Date: 
      Exercise: 
   -->
    <title>Contact-all</title>
	<meta charset="utf-8">
  </head>
    <body>
		<?php
        $id = $_POST["id"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $globalerror = 0;
       // GLOBAL $globalerror
        switch ($id) {
            case "1":
        $address = $_POST["address"];
        $ordernumber = $_POST["ordernumber"];
                
        if (!preg_match("/^[a-zA-Z'-]+$/", $fname)) {
            echo "invalid first name";
          //  $GLOBALS['globalerror'] = true;
            $globalerror = 1;
        } 
	
        if (!preg_match("/^[a-zA-Z'-]+$/", $lname)) {
            echo "invalid last name";
          //  $GLOBALS['globalerror'] = true;
            $globalerror = 1;
        }
        if (!preg_match("/^[1-9][0-9]*$/", $ordernumber)) { 
            echo "invalid order number";
        //    $GLOBALS['globalerror'] = true;
            $globalerror = 1;
        }
                
                switch ($globalerror) {
                    case "0":
                        $mailbody = 
                            "Name: " 
                            . $fname 
                            . " " 
                            . $lname 
                            . " Address: " 
                            . $address 
                            . " Order#: " 
                            . $ordernumber;
                        $Subject = "Checking Order " . $ordernumber;
                        
                        break;
                    case "1":
                        echo "try again";
                        break;
                }
                break;
            case "2":
                $phonenumber = $_POST["phonenumber"];
                $processormodel = $_POST["processormodel"];
                $description = $_POST["description"];
                
                if (!preg_match("/^[a-zA-Z'-]+$/", $fname)) {
                    echo "invalid first name";
                   // $GLOBALS['globalerror'] = true;
                } 
                if (!preg_match("/^[a-zA-Z'-]+$/", $lname)) { 
                    echo "invalid last name";
                   // $GLOBALS['globalerror'] = true;
                }
                $tmpphonenumber = $phonenumber;
                $tmpphonenumber = trim($tmpphonenumber);
                $tmpphonenumber = stripslashes($tmpphonenumber);
                if (!preg_match("/^[1-9][0-9]*$/", $tmpphonenumber)) {
                    echo "invalid Phone Number number";
                    //$GLOBALS['globalerror'] = true;
                }
                switch ($globalerror) {
                    case "0":
                        $mailbody = 
                            "Name: " 
                            . $fname 
                            . " " 
                            . $lname 
                            . " Phone Number: " 
                            . $phonenumber 
                            . " Processormodel: " 
                            . $processormodel
                            . " Description: "
                            . $description;
                        $Subject = "Processor";
                        break;
                    case "1":
                        echo "try again";
                        break;
                }

                
        }
        switch ($globalerror) {
            case "0":
				$sender = "alphatekparts@wi.rr.com";
                echo "<a id=\"clickme\" href=\"mailto:" . $sender . "?subject=" . $Subject . "&body=" . $mailbody . "\">click here if script is disable</a>";
				echo "<script>
					  	document.getElementById('clickme').click();
					  	setTimeout(\"window.location.replace('contact.php')\", 1000);
					  </script>";
        }
        ?>
    </body>

</html>
<!--

-->