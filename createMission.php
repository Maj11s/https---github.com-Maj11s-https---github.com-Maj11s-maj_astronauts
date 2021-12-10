<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mission</title> <!-- named the title of the page -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
// here I have used an include tag as this will include and evaluate the specified file.
include ('validation.php')
// end of php tag // 
?> <!-- div tag used to divide-->
<div class="form-banner">
		<div class="wrapper">
		<div class="card">

			<div class="card-header">
				<h1>Create Mission</h1></div>
				<div class="card-body">
					<div class="form"> <!-- form for the astronauts to fill in -->
						<form action="functions.php" method="post">  <!-- the action defines where to send the form data when a form is submitted so this will refer in the functions.php file. -->
							<label for="">Destination</label> 
							<input type="text" name="destination" class="form-control">
							<label for="">Launch Date</label>
							<input type="date" name="launch-date" class="form-control">
							<label for="">Type</label>
							<input type="text" name="type" class="form-control">
							<label for="">Crew Size</label> <!-- used a label tag to display text -->
							<input type="text" name="crew-size" class="form-control">
							<label for="">Target ID</label>
							<input type="number" name="target-id" class="form-control"> 
							<input type="submit" name="save_mission" class="astronaut_btn"> <!-- created a submit button here -->
							<a href="index.php">Go to main page</a>  <!-- created a herf tag (allows to link) that will link back to the index page aka home page -->
						</form>
					</div>
				</div>

			</div>
		</div>
</div>
	</body>
	</html>