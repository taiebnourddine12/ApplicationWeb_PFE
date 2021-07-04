		function verif(){
			if(document.getElementById("jsonTester").text=='--Testeur--'){
				alert('Selectionner un Testeur');
				return true;
			}
			if(!document.getElementById("dash").checked || !document.getElementById("prod").checked){
				alert('Selectionner une Database');
				return false;
			}
		}
		
		//Select DB
		function checkRadio(radio) {
           if (radio.id === "user"){
                document.getElementById("valid").innerHTML = "<a href='listUser.php'>Show</a>";
           } else {
                document.getElementById("valid").innerHTML = "<a href='listAdmin.php'>Show</a>";
           }
         }
		 
		