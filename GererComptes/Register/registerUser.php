<?php 
	$con=mysqli_connect("localhost","root","","panacimwipext");	
	
	$Matricule = $_POST["Matricule"];
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];
	
	

	$sql = "INSERT INTO login(Matricule,Username,Password) VALUES ('$Matricule','$Username','$Password')";
	$result = mysqli_query($con,$sql);
	
	if($result) {
		header('Location: ../listUser.php');
	}
	else {
		echo "<script type='text/javascript'>alert('Some error occured');</script>";
	}
?>