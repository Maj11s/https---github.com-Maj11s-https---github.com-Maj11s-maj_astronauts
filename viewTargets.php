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
				<h1>View Targets</h1>
				<form action="" method="post" class="search_target">
					<input type="submit" name="search_target" class="search_btn" value="search">
				</form>
			</div>
				<div class="card-body">
                       <table  width="100%">
										<?php
													// config file for db connection
						include ("config.php");
                                    // search code for Target 
						if(isset($_POST['search_target'])){
							$qry="select * from targets";
							$run=mysqli_query($con, $qry);
                                    // check the required data is available or not 
							if (mysqli_num_rows($run) > 0 ) {
								echo "<tr><th>Target Name</th><th>First Mission</th><th>Target Type</th><th>Number of Missions</th><th>Action</th></tr>";
                                     	// fetch data if available
										 // the while tag  tells PHP to execute the nested statement(s) repeatedly, as long as the while expression evaluates to true
								while($data=mysqli_fetch_array($run)){
									$id=$data['Target_ID'];
									$name=$data['Name'];
									$first_mission=$data['First_mission'];
									$type=$data['type'];
									$no_missions=$data['No_mission'];
                                    	// print data in table form 
									echo "</tr><tr><td align='center'>$name</td> <td align='center'>$first_mission</td><td align='center'>$type</td><td align='center'>$no_missions</td><td>&nbsp;&nbsp;&nbsp;&nbsp; <a href=functions.php?target-id=$id>Delete</a></td></tr>";

								} // if there no data it will display a message that there is no data
							}
							else{
								echo "<h3 align='center' style='padding:30px 0; color:#fff;'>No Data to Display</h3>";
							}
							
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