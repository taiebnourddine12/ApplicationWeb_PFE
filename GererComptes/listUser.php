

<!DOCTYPE html>
<html>
<head>
	<title>EleoneTech - Gérer Comptes (User)</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">	
	<link rel='stylesheet' href='./style.css'>

</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","panacimwipext");	
$sql = "select * from login";
$query = mysqli_query($con,$sql);

?>
<form class="list" name="list" action="" method="POST" onsubmit="">
	<input type="radio" id="user" name="db" value="user" onClick="checkRadio(this)" checked> 
	<label for="user">Utilisateur</label>
	<input type="radio" id="admin" name="db" value="admin" onClick="checkRadio(this)" > 
	<label for="admin">Administrateur</label>   </br>
	<button type="submit" id="valid">Show</button>
	
	<a href="./Register/RegisterUser.html" class="float">
		<h1 class="fa fa-plus my-float"></h1>
	</a>
	
	<a href="../MenuAdmin/MenuAdmin.html" class="home">
		<h1 class="fa fa-home my-home"></h1>
	</a>
</form>    
<div class="container">
<table class="table">
	<thead>
		<tr>
           <th>ID</th>
           <th>Username</th>
		   <th>Matricule</th>
           <th>Password</th>
		</tr>
	</thead>
	<tbody>	
		<?php
			if ($query->num_rows > 0) {
				//output data of each row
				while ($row = $query->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['Username']; ?></td>
					<td><?php echo $row['Matricule']; ?></td>
					<td><?php echo $row['Password']; ?></td>
					<td><a class="btn btn-info" href="showUser.php?id=<?php echo $row['ID']; ?>">Show</a>&nbsp;<a class="btn btn-danger" href="deleteUser.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
<script src="js.js"></script>
</body>
</html>