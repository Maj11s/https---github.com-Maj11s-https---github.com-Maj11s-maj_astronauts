<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tragets</title> <!-- named the title of the page -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include ('validation.php')
?>
<div class="form-banner">
		<div class="wrapper">
		<div class="card">

			<div class="card-header">
				<h1>Create Targets</h1></div>
				<div class="card-body">
					<div class="form"> <!-- form for the astronauts to fill in -->
						<form action="functions.php" method="post"> 
							<label for="">Name</label>
							<input type="text" name="target-name" class="form-control">
							<label for="">First Mission</label>
							<input type="date" name="launch-date" class="form-control">
							<label for="">Type of Mission</label> <!-- used a label tag to display text -->
							<input type="text" name="type" class="form-control">
							<label for="">Number of Missions</label>
							<input type="text" name="no-missions" class="form-control">
							<input type="submit" name="save_target" class="astronaut_btn">
							<a href="index.php">Go to main page</a>
						</form> <!-- end of form -->
					</div>
				</div>

			</div>
		</div>
</div>
	</body>
	</html>