<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Attends</title> <!-- named the title of the page -->
	<link rel="stylesheet" href="css/style.css">  <!-- here I have connected my css to stylize the website -->
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
				<h1>Create Attends</h1></div>
				<div class="card-body">
					<div class="form"> <!-- form for the astronauts to fill in -->
						<form action="functions.php" method="post"> <!-- the action defines where to send the form data when a form is submitted so this will refer in the functions.php file. -->
							<label for="">Mission ID</label> 
							<input type="text" name="mission-id" class="form-control">
							<label for="">Astronaut Id</label> 
							<input type="text" name="a-id" class="form-control">
							<input type="submit" name="save_attend" class="astronaut_btn"> <!-- created a submit button here -->
							<a class="home_page"href="index.php">Go to main page</a> <!-- created a herf tag (allows to link) that will link back to the index page aka home page -->
						</form> <!-- end of form tag -->
					</div>
				</div>

			</div>
		</div>
</div>
	</body>
	</html>