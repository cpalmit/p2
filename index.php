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
	
	<!-- Don't forget: Landing page includes a description of your app and 
	what a xkcd password is (assume an unfamiliar audience). -->
	
		<h1>XKCD Style Password Generator</h1> 
		<p>Your password is: <?php echo $password; ?></p> 
		<form method="POST" action="index.php">
			
			<label for="numofwords">Number of words</label>
			<select name="count">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3" selected="selected">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
			<br />
			<label for="uppercase">Uppercase first letter?</label>
			<input type="checkbox" name="uppercase" />
			<br />
			<label for="symbol">Use a symbol?</label>
			<input type="checkbox" name="symbol" />
			<br />
			<label for="number">Include a number?</label>
			<input type="checkbox" name="number" />
			<br />
			<input type="submit" name ="submit" value="submit" class="btn btn-default" />
			
		</form>
	
	</div>
</body>
</html>