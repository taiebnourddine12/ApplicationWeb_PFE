<!DOCTYPE html>
<head>
		<title>EleoneTech - Consultation Produit</title>
		<link rel='stylesheet' href='./style1.css'>
</head>
<body>

<form class="search" name="search" action="" method="POST" onsubmit="">


	<select name="Tester" id="jsonTester" onchange="show()"> </select> </br>
	<select name="Poste" id="jsonPoste"> </select> </br>
	
	<input type="text" onfocus="(this.type='date')" placeholder="Date" id="Date" name="Date">  </br>
	<input type="number" id="Matricule" name="Matricule" min="1000" max="9999" placeholder="Matricule">  </br>
	<input type="text" id="OF" name="OF" placeholder="OF">  </br>
	<input type="text" id="PRF" name="PRF" placeholder="PRF">  </br>

	<input type="radio" id="dash" name="db" value="dash" onClick="checkRadio(this)"> 
	<label for="dash">Dashboard</label>
	<input type="radio" id="prod" name="db" value="prod" onClick="checkRadio(this)" > 
	<label for="prod">Production</label>   </br>
	<button type="submit" id="valid">OK</button>
	
	
</form>    
<script src="js.js"></script>
</body>
</html>