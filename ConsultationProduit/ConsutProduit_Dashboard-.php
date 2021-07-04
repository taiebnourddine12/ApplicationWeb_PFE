<!DOCTYPE html>
<head>
		<title>EleoneTech - Consultation Produit</title>
		<link rel='stylesheet' href='./style1.css'>

</head>
<body>
<?php

$con=mysqli_connect("localhost","root","","mirror_central");	

	$sql = "select * from dashboard ";
	$query = mysqli_query($con,$sql);

if (isset($_POST["Date"]) || isset($_POST["Matricule"]) || isset($_POST["OF"]) || isset($_POST["PRF"]) || isset($_POST["jsonPoste"]) )  {
	$Date = $_POST["Date"];
	$OF = $_POST["OF"];
	$PRF = $_POST["PRF"];
	$Matricule = $_POST["Matricule"];
	$Poste = $_POST["Poste"];
	
	$sql = "select * from dashboard where  PRF='$PRF' OR Matricule='$Matricule' OR OF='$OF' or Date='$Date' or Poste='$Poste'" ;
	$query = mysqli_query($con,$sql);
}
?>

<form class="search" name="search" action="" method="POST" onsubmit="">


	<select name="Tester" id="jsonTester" onchange="show()"> </select> </br>
	<select name="Poste" id="jsonPoste"> </select> </br>
	
	<input type="text" placeholder="Date" id="Date" name="Date">  </br>
	<input type="number" id="Matricule" name="Matricule" min="1000" max="9999" placeholder="Matricule">  </br>
	<input type="text" id="OF" name="OF" placeholder="OF">  </br>
	<input type="text" id="PRF" name="PRF" placeholder="PRF">  </br>

	<input type="radio" id="dash" name="db" value="dash" onClick="checkRadio(this)" checked> 
	<label for="dash">Dashboard</label>
	<input type="radio" id="prod" name="db" value="prod" onClick="checkRadio(this)" > 
	<label for="prod">Production</label>   </br>
	<button type="submit" id="valid">OK</button>
	
</form>    

   <br>
		<div class='container'>
			<ul class='responsive-table'>
				<li class='table-header'>
				  <div class='content'>ID</div>
				  <div class='content'>Date</div>
				  <div class='content'>OF</div>
				  <div class='content'>PRF</div>
				  <div class='content'>Matricule</div>
				  <div class='content'>Poste</div>
				  <div class='content'>H1 Pass</div>
				  <div class='content'>H1 Fail</div>
				  <div class='content'>H1 Taux de Defaux</div>
				  <div class='content'>H1 Cadence</div>
				  
				  <div class='content'>H2 Pass</div>
				  <div class='content'>H2 Fail</div>
				  <div class='content'>H2 Taux de Defaux</div>
				  <div class='content'>H2 Cadence</div>
				  
				  <div class='content'>H3 Pass</div>
				  <div class='content'>H3 Fail</div>
				  <div class='content'>H3 Taux de Defaux</div>
				  <div class='content'>H3 Cadence</div>
				  
				  <div class='content'>H4 Pass</div>
				  <div class='content'>H4 Fail</div>
				  <div class='content'>H4 Taux de Defaux</div>
				  <div class='content'>H4 Cadence</div>
				  
				  <div class='content'>H5 Pass</div>
				  <div class='content'>H5 Fail</div>
				  <div class='content'>H5 Taux de Defaux</div>
				  <div class='content'>H5 Cadence</div>
				  
				  <div class='content'>H6 Pass</div>
				  <div class='content'>H6 Fail</div>
				  <div class='content'>H6 Taux de Defaux</div>
				  <div class='content'>H6 Cadence</div>
				  
				  <div class='content'>H7 Pass</div>
				  <div class='content'>H7 Fail</div>
				  <div class='content'>H7 Taux de Defaux</div>
				  <div class='content'>H7 Cadence</div>
				  
				  <div class='content'>H8 Pass</div>
				  <div class='content'>H8 Fail</div>
				  <div class='content'>H8 Taux de Defaux</div>
				  <div class='content'>H8 Cadence</div>
				  
				  <div class='content'>Taux de Defaux Total</div>
				  <div class='content'>Cadence Total</div>
				  <div class='content'>Cadence théorique</div>
				  <div class='content'>Actual H</div>
				</li>
				
  <?php 
while($row = mysqli_fetch_assoc($query)):
	
?>	
  <li class='table-row'>
				  <div class='content'><?php echo"{$row['ID']}"?></div>
				  <div class='content'><?php echo"{$row['Date']}"?></div>
				  <div class='content'><?php echo"{$row['OF']}"?></div>
				  <div class='content'><?php echo"{$row['PRF']}"?></div>
				  <div class='content'><?php echo"{$row['Matricule']}"?></div>
				  <div class='content'><?php echo"{$row['Poste']}"?></div>
				  
				  <div class='content'><?php echo"{$row['H1 Pass']}"?></div>
				  <div class='content'><?php echo"{$row['H1 Fail']}"?></div>
				  <div class='content'><?php echo"{$row['H1 Taux de Defaux']}"?></div>
				  <div class='content'><?php echo"{$row['H1 Cadence']}"?></div>
				
				  <div class='content'><?php echo"{$row['H2 Pass']}"?></div>
				  <div class='content'><?php echo"{$row['H2 Fail']}"?></div>
				  <div class='content'><?php echo"{$row['H2 Taux de Defaux']}"?></div>
				  <div class='content'><?php echo"{$row['H2 Cadence']}"?></div>
				
				  <div class='content'><?php echo"{$row['H3 Pass']}"?></div>
				  <div class='content'><?php echo"{$row['H3 Fail']}"?></div>
				  <div class='content'><?php echo"{$row['H3 Taux de Defaux']}"?></div>
				  <div class='content'><?php echo"{$row['H3 Cadence']}"?></div>
				
				  <div class='content'><?php echo"{$row['H4 Pass']}"?></div>
				  <div class='content'><?php echo"{$row['H4 Fail']}"?></div>
				  <div class='content'><?php echo"{$row['H4 Taux de Defaux']}"?></div>
				  <div class='content'><?php echo"{$row['H4 Cadence']}"?></div>
				
				  <div class='content'><?php echo"{$row['H5 Pass']}"?></div>
				  <div class='content'><?php echo"{$row['H5 Fail']}"?></div>
				  <div class='content'><?php echo"{$row['H5 Taux de Defaux']}"?></div>
				  <div class='content'><?php echo"{$row['H5 Cadence']}"?></div>
				
				  <div class='content'><?php echo"{$row['H6 Pass']}"?></div>
				  <div class='content'><?php echo"{$row['H6 Fail']}"?></div>
				  <div class='content'><?php echo"{$row['H6 Taux de Defaux']}"?></div>
				  <div class='content'><?php echo"{$row['H6 Cadence']}"?></div>
				
				  <div class='content'><?php echo"{$row['H7 Pass']}"?></div>
				  <div class='content'><?php echo"{$row['H7 Fail']}"?></div>
				  <div class='content'><?php echo"{$row['H7 Taux de Defaux']}"?></div>
				  <div class='content'><?php echo"{$row['H7 Cadence']}"?></div>
			   
				  <div class='content'><?php echo"{$row['H8 Pass']}"?></div>
				  <div class='content'><?php echo"{$row['H8 Fail']}"?></div>
				  <div class='content'><?php echo"{$row['H8 Taux de Defaux']}"?></div>
				  <div class='content'><?php echo"{$row['H8 Cadence']}"?></div>
				
				  <div class='content'><?php echo"{$row['Taux de Defaux Total']}"?></div>
				  <div class='content'><?php echo"{$row['Cadence Total']}"?></div>
				  <div class='content'><?php echo"{$row['Cadence théorique']}"?></div>
				  <div class='content'><?php echo"{$row['Actual H']}"?></div>
    
				</li>
  <?php endwhile; ?>
			</ul>
		</div> 	
<script src="js.js"></script>
</body>
</html>