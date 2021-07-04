		
		
		//Select DB
		function checkRadio(radio) {
           if (radio.id === "prod"){
                document.getElementById("valid").innerHTML = "<a href='http://"+ip+"/eleoneTech_web/ConsultationProduit/ConsutProduit_Production.php'>  OK  </a>";
           } else {
                document.getElementById("valid").innerHTML = "<a href='http://"+ip+"/eleoneTech_web/ConsultationProduit/ConsutProduit_Dashboard.php'>  OK  </a>";
           }
         }
		 
		 
		//Select IP
		 var ip="localhost";
		 function show(){
			 ip = document.getElementById("jsonTester").value;	 
		 }
		 
		
	  //Show Tester List
	  fetch('station.json')
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                var mainContainer = document.getElementById("jsonTester");
				for (var i = 0; i < data.length; i++) {
					var option = document.createElement('option');
					option.value = data[i].Station_IP;
					option.text = data[i].Station_Name;
					mainContainer.appendChild(option);
				}
            });
			

		//Show Poste List
		var poste = document.getElementById('jsonPoste');

		var jsonOptions = [{
		  "Numéro": "--Poste--",
		  "valeur":""
		},
		{
		  "Numéro": "Poste 1",
		  "valeur":"Poste 1"
		},
		{
		  "Numéro": "Poste 2",
		  "valeur":"Poste 2"
		},
		{
		  "Numéro": "Poste 3",
		  "valeur":"Poste 3"
		}];

		// Loop over the JSON array.
		jsonOptions.forEach(function(item) {
		  var option = document.createElement('option');
		  
		  option.value = item.valeur;
		  option.text = item.Numéro;

		  poste.appendChild(option);
		});
	