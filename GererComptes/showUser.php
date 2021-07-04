<!DOCTYPE html>
<html>
<head>
	<title>EleoneTech - Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='./style.css'>

</head>
<body>
<?php 

$con=mysqli_connect("localhost","root","","panacimwipext");	
if (isset($_GET['id'])) {
	$ID = $_GET['id'];

	// write SQL to get user data
	$sql = "select * from login WHERE ID='$ID'";

	// Execute the sql
	$result = mysqli_query($con,$sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$ID = $row['ID'];
			$Username = $row['Username'];
			$Matricule = $row['Matricule'];
			$Password  = $row['Password'];
			
		}

	?>
		<div id="login-page" class="row">
			<div class="card-panel">
			  <fieldset>
				<!--LOGO-->
				<center><img src="eleonetech.png" class="logo"></center>
				<legend>Profil information:</legend>
				<label for="ID">ID:</label>
				<p name="ID"><?php echo $ID; ?></p>
				<label for="Username">Username:</label><br>
				<p name="Username"><?php echo $Username; ?></p>
				<br>
				<label for="Matricule">Matricule:</label><br>
				<p name="Matricule"><?php echo $Matricule; ?></p>
				<br>
				<label for="ID">Password:</label><br>
				<p name="Password"><?php echo $Password; ?></p>
				<br>
			  </fieldset>
			</div>
		</div>
		<a href="listUser.php" class="float">
			<h1 class="fa fa-list my-float"></h1>
		</a>
		
</body>
</html>

	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: list.php');
	}

}
?>