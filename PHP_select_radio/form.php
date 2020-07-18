<!DOCTYPE html>
<html>
  <head>
    <title>PHP Get Value of Select Option and Radio Button</title>

<!-- include css file here-->
   <link rel="stylesheet" href="css/style.css"/>
     
  </head>	
  <body>
	<div class="container">
		<div class="main">
		<h2>PHP Multiple Select Options and Radio Buttons</h2><hr/>
	    <form method="post" action="form.php">
		
		<!---------Select Option Fields starts here------>
		  <label class="heading">To Select Multiple Options Press ctrl+left click :</label><br/><br/>
		  <select name="Color[]" multiple>
			<option value="Red">Red</option>
			<option value="Green">Green</option>
			<option value="Blue">Blue</option>
			<option value="Pink">Pink</option>
			<option value="Yellow">Yellow</option>
			<option value="White">White</option>
			<option value="Black">Black</option>
			<option value="Violet">Violet</option>
			<option value="Limegreen">Limegreen</option>
			<option value="Brown">Brown</option>
			<option value="Orange">Orange</option>
		  </select><br/><br/>
		  <?php include'select_value.php'; ?>
		 <hr/>
		 
		<!---------Radio Button starts here------> 
		 <label class="heading">Radio Buttons :</label><br/>
		  <input type="radio" name="radio" value="Radio 1">Radio 1
		  <input type="radio" name="radio" value="Radio 2">Radio 2<br/>
		  <input type="radio" name="radio" value="Radio 3">Radio 3
		  <input type="radio" name="radio" value="Radio 4">Radio 4<br/><br/>
		  <?php include'radio_value.php'; ?><hr/>
		  <input type="submit" name="submit" value="Get Selected Values" />
		  
         </form>
		</div>
	
<!-- Div Fugo is advertisement div-->
		<div class="fugo">
			<a href="http://www.formget.com/app/"><img src="images/formGetadv-1.jpg" /></a>
		</div>
   </div>

  </body>
</html>
