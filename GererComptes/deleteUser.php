<?php
$con=mysqli_connect("localhost","root","","panacimwipext");	

if (isset($_GET['id'])) {
	$ID = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM login WHERE ID = '$ID' ");

if ($query == TRUE) {
		header('Location: ./listUser.php');
	}
}
?>
