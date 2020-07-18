<!DOCTYPE html>
<html lang="en">
  <head>
    <title>First php page</title>
	<meta charset="utf-8">
  </head>
    <body>
	
	<?php
        $Age = 93;
        echo "My age is $Age";
        echo "<br>";
        echo "My php test";
        echo "<br>";
        $movies = array("Star Wars", "Princess Bride", "The Good, The Bad The Ugly", "Terminator");
        
        echo count($movies);
        echo "Number of Movies: " .count($movies);
        echo "<br>";
        
        echo "<h1>Average Numbers</h1>";
        $a = 5;
        $b = 10;
        $c = 15;
        
        function averageNumbers($a, $b, $c) {
            $SumOfNumbers = $a + $b + $c;
            $Result = $SumOfNumbers / 3;
            
            return $Result;
            
        }
        echo averageNumbers($a, $b, $c);
        
        
        
        echo "<br>";
        echo "<h1>If then</h1>";
        
        if ($a == 10) {
            echo "a = 10";
        }
        else if ($a == 5) {
            echo "who care another test<br>";
        }
        
        switch ($a) {
            case 5:
                echo "a = 5" . $a;
                break;
            case 10:
                echo "a = 10" . $a;
                break;
            case 15:
                echo "a =15" . $a;
                break;
            default:
        
        }
        
        
        $City = "Paris";
        $Country = "France";
        $Destinatin = 
            "<p>" . $City . " is in " . $Country . ".</p>";
        echo $Destinatin
        
        //phpinfo();
        
        
        
	?>
</body>
</html>