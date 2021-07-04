<!DOCTYPE html>
<html>
<head>
		<title>Consultation Produit</title>
		<link rel='stylesheet' href='./style.css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
</head>
<body>

<form class="search" name="search" action="searchBetweenDate.php" method="POST" onsubmit="">


	<select name="Tester" id="jsonTester"> 
		 <?php 
			$con=mysqli_connect("localhost","root","","panacimwipext");	
			$Tester = mysqli_query($con, "SELECT * FROM station");
			while ($row = mysqli_fetch_assoc($Tester)) {
			echo "<option name=\"tester\" >" . $row['Station_Name'] . "</option>";
			}
		 ?>
	</select> </br>
	<input type="text" onfocus="(this.type='datetime-local')" placeholder="From" id="DateFrom" name="DateFrom">  </br>
	<input type="text" onfocus="(this.type='datetime-local')" placeholder="To" id="DateTo" name="DateTo">  </br>
	
	<button type="submit" id="valid" onclick="">Display</button>
	
	<a href="../MenuAdmin/MenuAdmin.html" class="home">
		<h1 class="fa fa-home my-home"></h1>
	</a>
	
</form> 

   
</body>
</html>