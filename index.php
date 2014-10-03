<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>p2: XKCD Password Generator</title>
	<?php require "logic.php"; ?>
	<link rel="stylesheet" href="styles.css" type="text/css">	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">	
</head>

<body>
	<div class="container">
	
		<h1>XKCD Style Password Generator</h1> 
		
		<p>Tired of coming up with new, secure passwords for every application? Now you don't have to—introducing 
		the XKCD Style Password Generator, creating passwords so you don't have to since 2014. Not only are they strong due 
		to their length, but they're also easier to remember since they use real words. 
		Visit <a href="http://xkcd.com/936/">XKCD</a> for more information.</p>
		<div class="password">Your password is: <?php echo $password; ?></div> 
		
		<form method="POST" action="index.php">
			
			<label for="numofwords">Number of words</label>
			<select name="count" id="numofwords">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3" selected="selected">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
			</select>
			<br />
			<label for="uppercase">Uppercase first letter of each word?</label>
			<input type="checkbox" name="uppercase" id="uppercase" />
			<br />
			<label for="symbol">Use a symbol?</label>
			<input type="checkbox" name="symbol" id="symbol"/>
			<br />
			<label for="number">Include a number?</label>
			<input type="checkbox" name="number" id="number" />
			<br />
			<input type="submit" name ="submit" value="Give me password" class="btn btn-default" />
			
		</form>
		
	</div>
</body>
</html>