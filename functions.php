<?php
	// configg file fo database connection
	include("config.php");
	// form validation file
	include('validation.php');
	
	//Start of create Astronaut//
	// php code to insert astronaut data into the astronaut table
	if(isset($_POST['insert_astronaut'])){
		$astronaut_name=$_POST['astronaut_name']; //created the variable name, then will post and show name that was created in the form//
		$no_missions=$_POST['no_missions'];
		// this will then insert into the database that I have created in phpmyadmin
		$qry="INSERT INTO `astronaut`(`name`, `no_missions`) VALUES ('$astronaut_name','$no_missions')";
		// run query
		$run=mysqli_query($con,$qry);
		if($run==true){ //the if statement will execute if its true
			$last_id = $con->insert_id;
			//this will echo out and pop up a dialogue and confirm that data was succssfully added if the if statement is true 
			echo ("<script LANGUAGE='JavaScript'>
window. alert('Astronaut Added Successfully. Your ID is $last_id');
window. location. href='createAstronaut.php';
</script>");

//this will echo out and pop up a dialogue and confirm that data was succssfully added if the if statement is false
		}	//Else Tag tells the report that if the condition set by the If Tag isn't met
		else{
			echo "<script>alert('oops! Some Error, Try Again!!!!')</script>";
						echo ("<script LANGUAGE='JavaScript'>
window. alert('oops! Some Error, Try Again!!!!');
window. location. href='createAstronaut.php';
</script>");
// end of create astronaut
		}
	}
		// Start of Create Mission 
		if(isset($_POST['save_mission'])){
			$destination=$_POST['destination'];
			$launch_date=$_POST['launch-date'];
			$missionType=$_POST['type'];
			$crew_size=$_POST['crew-size'];
			$target_id=$_POST['target-id'];
			// // this will then insert into the database that I have created in phpmyadmin
			$qry="INSERT INTO `mission`(`Destination`, `Launch_date`, `type`, `Crew_size`, `Target_ID`) VALUES ('$destination',$launch_date,'$missionType','$crew_size','$target_id')";
			// run query 
			$run=mysqli_query($con,$qry);
			if($run==true){
				$last_id = $con->insert_id;
				echo ("<script LANGUAGE='JavaScript'>
	window. alert('Mission Added Successfully. Your ID is $last_id');
	window. location. href='createMission.php';
	</script>");
			} //this will echo out and pop up a dialogue and confirm that data was succssfully added if the if statement is false
			else{ //Else Tag tells the report that if the condition set by the If Tag isn't met
				echo "<script>alert('oops! Some Error, Try Again!!!!')</script>";
							echo ("<script LANGUAGE='JavaScript'>
	window. alert('oops! Some Error, Try Again!!!!');
	window. location. href='createMission.php';
	</script>");
			}
		}
	// end of create mission 


// Start of Create Targets 
if(isset($_POST['save_target'])){
	$target_name=$_POST['target-name'];
	$launch_date=$_POST['launch-date'];
	$missionType=$_POST['type'];
	$no_missions=$_POST['no-missions'];
	// insert query for data insertion in mission table 
	$qry="INSERT INTO `targets`(`Name`, `First_mission`, `type`, `No_mission`) VALUES ('$target_name','$launch_date','$missionType','$no_missions')";
	// run query 
	$run=mysqli_query($con,$qry);
	if($run==true){
		$last_id = $con->insert_id;
					echo ("<script LANGUAGE='JavaScript'>
window. alert('New Target Added Successfully. Your ID is $last_id');
window. location. href='createTargets.php';
</script>");
	}
	else{
								echo ("<script LANGUAGE='JavaScript'>
window. alert('oops! Some Error, Try Again!!!!');
window. location. href='createTargets.php';
</script>");
	}
}
// end of create targets

	// Start of create Attends
			if(isset($_POST['save_attend'])){
		$mission_id=$_POST['mission-id'];
		$astronaut_id=$_POST['a-id'];
		// insert query for data insertion in attends table 
		$qry="INSERT INTO `attends`(`Mission_ID`, `astronaut_ID`) VALUES ('$mission_id','$astronaut_id')";
		// run query 
		$run=mysqli_query($con,$qry);
		if($run==true){
			$last_id = $mission_id;
					echo ("<script LANGUAGE='JavaScript'>
window. alert('New Attend Added Successfully. Your ID is $last_id');
window. location. href='createAttends.php';
</script>");
		}
		else{
								echo ("<script LANGUAGE='JavaScript'>
window. alert('oops! Some Error, Try Again!!!!');
window. location. href='createAttends.php';
</script>");
		}
	}
// end of create attends


//These are the delete functions below

// delete astronaut code 
	if(isset($_GET['a-id'])){
		$astronaut_id=$_GET['a-id']; //created a variable so it can define from name that I created in the come in createAstronaut.php page
		$qry="DELETE FROM `astronaut` WHERE `astronaut_id`='$astronaut_id'"; // this will delete and remove the information that is currently displaying
		$run=mysqli_query($con,$qry);
		if($run==true){ //if the statement is true then it will excute the code
								echo ("<script LANGUAGE='JavaScript'>
window. alert('Astronaut Deleted Successfully.');
window. location. href='createAstronaut.php';
</script>"); // this will echo out and display the a popup dialouge saying "it has been successfully deleted"
		} //this well then redirect back using the herf tag
	}

	// delete mission code 
	if(isset($_GET['Mission-id'])){
		$mission_id=$_GET['mission-id'];
		$qry="DELETE FROM `mission` WHERE `mission_id`='$mission_id'";
		$run=mysqli_query($con,$qry);
		if($run==true){ //if the statement is true then it will excute the code
	echo ("<script LANGUAGE='JavaScript'>
window. alert('Mission Deleted Successfully.');
window. location.href='createMission.php';
</script>"); // this will echo out and display the a popup dialouge saying "it has been successfully deleted"
		} //this well then redirect back using the herf tag
	}

		// delete attend code 
	if(isset($_GET['attend-id'])){
		$attend_id=$_GET['attend-id'];
		$qry="DELETE FROM `attends` WHERE `Mission_ID`='$attend_id'";
		$run=mysqli_query($con,$qry);
		if($run==true){ //if the statement is true then it will excute the code
	echo ("<script LANGUAGE='JavaScript'>
window. alert('Attend Deleted Successfully.');
window. location.href='createAttends.php';
</script>"); // this will echo out and display the a popup dialouge saying "it has been successfully deleted"
		} //this well then redirect back using the herf tag
	}
			// delete target code 
	if(isset($_GET['Target-id'])){
		$target_id=$_GET['Target-ID'];
		$qry="DELETE FROM `targets` WHERE `Target_ID`='$target_id'";
		$run=mysqli_query($con,$qry);
		if($run==true){  //if the statement is true then it will excute the code
	echo ("<script LANGUAGE='JavaScript'>
window. alert('Target Deleted Successfully.');
window. location.href='createTargets.php';
</script>"); // this will echo out and display the a popup dialouge saying "it has been successfully deleted"
		} //this well then redirect back using the herf tag
	}
	?>