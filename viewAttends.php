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
				<h1>View Attends</h1>
				<form action="" method="post" class="search_attend">
					<input type="submit" name="search_attend" class="search_btn" value="search">
				</form>
			</div>
				<div class="card-body">
                       <table  width="100%">
										<?php
								// the config file for database connection using the include tag 				
						include ("config.php");
                                    // search code for Attends 
						if(isset($_POST['search_attend'])){ // query for select data form database table astronaut
							$qry="select * from attends";  // this select from from the astronaut
							$run=mysqli_query($con, $qry);
                                    // check the required data is available or not 
							if (mysqli_num_rows($run) > 0 ) {
								echo "<tr><th>Mission ID</th><th>Number Of Missions</th><th>Astronaut ID</th></tr>";
                                     	// fetch data if available
										 // the while tag  tells PHP to execute the nested statement(s) repeatedly, as long as the while expression evaluates to true 
								while($data=mysqli_fetch_array($run)){ // fetch data from the database on phpmyadmin
									$mission_id=$data['Mission_ID']; 
									$astronaut_id=$data['astronaut_ID'];
                                    	// print data in table form 
									echo "</tr><tr><td align='center'>$mission_id</td> <td align='center'>$astronaut_id</td><td>&nbsp;&nbsp;&nbsp;&nbsp; <a href=functions.php?attend-id=$mission_id>Delete</a></td></tr>";

								}
							}
							else{
								echo "<h3 align='center' style='padding:30px 0; color:#fff;'>No Data to Display</h3>";
							} // if there no data it will display a message that there is no data
							
						}

						?> <!-- used i class to create a custom button from font awesome -->
						<i class="fas fa-angle-double-left"></i>
							<a href="index.php">Go Back!</a>
                            </table>
				</div>

			</div>
		</div>
</div>
	</body>
	</html>