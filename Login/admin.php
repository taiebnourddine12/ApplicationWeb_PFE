<?php 
		$con=mysqli_connect("localhost","root","","panacimwipext");	
		$username = $_POST["Username"];
		$password = $_POST["Password"];

		$sql = "SELECT * FROM admin WHERE  Username = '$username' AND Password = '$password'";
		$result = mysqli_query($con,$sql);
		
		if($result->num_rows > 0){
			header('Location: ../MenuAdmin/MenuAdmin.html');
		}else{
  			 echo "<script type='text/javascript'>alert('User not found');</script>";
}
?>