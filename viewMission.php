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
				<h1>View Missions</h1>
				<form action="" method="post" class="search_form">
					<input type="submit" name="search_mission" class="search_btn" value="search">
				</form>
			</div>
				<div class="card-body">
                       <table  width="100%">
										<?php
													// config file for db connection
						include ("config.php");
                                    // search code for mission 
						if(isset($_POST['search_mission'])){
							$qry="select * from mission";
							$run=mysqli_query($con, $qry);
                                    // check the required data is available or not 
							if (mysqli_num_rows($run) > 0 ) {
								echo "<tr><th>Destination</th><th>Lanuch Date</th><th>Mission Type</th><th>Crew Size</th><th>Target ID</th><th>Actions</th></tr>";
                                     	// fetch data if available
										 // the while tag  tells PHP to execute the nested statement(s) repeatedly, as long as the while expression evaluates to true
								while($data=mysqli_fetch_array($run)){
									$mission_id=$data['Mission_ID'];
									$destination=$data['Destination'];
									$launch_date=$data['Launch_date'];
									$type=$data['type'];
									$crew_size=$data['Crew_size'];
									$target_id=$data['Target_ID'];
                                    	// print data in table form 
									echo "</tr><tr><td align='center'>$destination</td> <td align='center'>$launch_date</td><td align='center'>$type</td><td align='center'>$crew_size</td><td align='center'>$target_id</td><td>&nbsp;&nbsp;&nbsp;&nbsp; <a href=functions.php?mission-id=$mission_id>Delete</a></td></tr>";

								}
							}
							else{
								echo "<h3 align='center' style='padding:30px 0; color:#fff;'>No Data to Display</h3>";
							} // if there no data it will display a message that there is no data
							
						}

						?> <!-- used i class to create a custom button from font awesome -->
						<i class="fas fa-angle-double-left"></i>
						<a href="index.php">Go to main page</a>
                            </table>
				</div>

			</div>
		</div>
</div>
	</body>
	</html>