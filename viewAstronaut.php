<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css"> <!--Used and borrowed the go back button from font awesome "https://pro.fontawesome.com  -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div class="form-banner">
		<div class="wrapper">
		<div class="card">

			<div class="card-header">
							<div class="card-header">
				
				<h1>Astronauts</h1>
				<form action="" method="post" class="search_form">
					<input type="submit" name="search_astronaut" class="search_btn" value="search">
				</form>
			</div>
				<div class="card-body">
                       <table  width="100%">
								<?php
							// the config file for database connection using the include tag 
							include ("config.php");
                                    // search code for the astronaut 
							if(isset($_POST['search_astronaut'])){
                                	// query for select data form database table astronaut
								$qry="select * from astronaut"; // this select from from the astronaut 
								$run=mysqli_query($con, $qry);
                                    // check the required data is available or not 
								if (mysqli_num_rows($run) > 0 ) {
									echo "<tr><th>Name</th><th>No of Missions</th><th>Actions</th></tr>";
                                     	// fetch data from the database on phpmyadmin
									while($data=mysqli_fetch_array($run)){
										$a_id=$data['astronaut_ID'];
										$name=$data['name'];
										$no_missions=$data['no_missions'];
										echo "</tr><tr><td align='center'>$name</td> <td align='center'>$no_missions</td><td>&nbsp;&nbsp;&nbsp;&nbsp; <a href=functions.php?a-id=$a_id>Delete</a></td></tr>";
										//this will echo out and display the table on the website
									}
								}
								else{
									echo "<h3 align='center' style='padding:30px 0; color:#fff;'>No Data to Display</h3>";
								} // if there no data it will display a message that there is no data
								
							}

							?>
							<!-- used i class to create a custom button from font awesome -->
							<i class="fas fa-angle-double-left"></i>
							<a href="index.php">Go Back!</a>
                            </table>
				</div>

			</div>
		</div>
</div>
	</body>
	</html>