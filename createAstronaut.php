<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Astronaut</title> <!-- named the title of the page -->
	<link rel="stylesheet" href="css/style.css"> <!-- here I have connected my css to stylize the website -->
</head>
<body>
<!-- php tag -->
<?php
// here I have used an include tag as this will include and evaluate the specified file.
include ("validation.php");
// end of php tag // 
?>
<!-- div tag used to divide-->
<div class="form-banner">
		<div class="wrapper">
		<div class="card">
			<div class="card-header">
				<h1>Create Astronauts</h1></div>
				<div class="card-body">
					<div class="form">
						<!-- form for the astronauts to fill in -->
						<form action="functions.php" method="post"> <!-- the action defines where to send the form data when a form is submitted so this will refer in the functions.php file. -->
							<label for="">Name</label>
							<label style="font-size: 10pt; color: black;"></label>
							<input type="text" name="astronaut_name" class="form-control">
							<label for="">Number of Missions</label>  
							<label style="font-size: 10pt; color: black;"></label>
							<input type="number" name="no_missions" class="form-control"> <!-- named the classes so i can use it to styles ect -->
							<input type="submit" name="insert_astronaut" class="astronaut_btn"> <!-- created a submit button here -->
							<a href="index.php">Go to main page</a> <!-- created a herf tag (allows to link) that will link back to the index page aka home page -->
						</form> <!-- end of form tag -->
					</div>

				</div>
			</div>
		</div>
</div>
	</body>
	</html>