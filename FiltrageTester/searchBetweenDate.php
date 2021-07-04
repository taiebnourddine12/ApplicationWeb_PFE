<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eleonetech - Statistiques Testeurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="ChartStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.1/raphael-min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.js'></script>
  </head>
  <body>

<?php

$con=mysqli_connect("localhost","root","","panacimwipext");	

$date1=$_POST["DateFrom"];
$date2=$_POST["DateTo"];
$Station_Name = $_POST["Tester"];

//$date2="2021-01-04 12:31:05";
//$date1="2021-01-04 12:30:52";
//$Station_Name = "FCT 4D";

$sqlALL="SELECT *
FROM all_event
INNER JOIN station
ON all_event.Station_ID=station.Station_ID
where (station.Station_Name = '$Station_Name') ";

$sqlALLPASS="SELECT *
FROM all_event
INNER JOIN station
ON all_event.Station_ID=station.Station_ID
where (station.Station_Name = '$Station_Name') and all_event.Status = 1";

$sqlALLFAIL="SELECT *
FROM all_event
INNER JOIN station
ON all_event.Station_ID=station.Station_ID
where (station.Station_Name = '$Station_Name') and all_event.Status = 0";

$sqlDATEALL="SELECT *
FROM all_event
INNER JOIN station
ON all_event.Station_ID=station.Station_ID
where (station.Station_Name = '$Station_Name') and (all_event.Dating between'$date1' and '$date2') ";

$sqlDATEPASS="SELECT *
FROM all_event
INNER JOIN station
ON all_event.Station_ID=station.Station_ID
where (station.Station_Name = '$Station_Name') and (all_event.Dating between'$date1' and '$date2') and all_event.Status = 1 ";

$sqlDATEFAIL="SELECT *
FROM all_event
INNER JOIN station
ON all_event.Station_ID=station.Station_ID
where (station.Station_Name = '$Station_Name') and (all_event.Dating between'$date1' and '$date2') and all_event.Status = 0 ";


 
$queryALL = mysqli_query($con,$sqlALL);
$queryALLPASS = mysqli_query($con,$sqlALLPASS);
$queryALLFAIL = mysqli_query($con,$sqlALLFAIL);

$queryDATEALL = mysqli_query($con,$sqlDATEALL);
$queryDATEPASS = mysqli_query($con,$sqlDATEPASS);
$queryDATEFAIL = mysqli_query($con,$sqlDATEFAIL);



$ALL = mysqli_num_rows($queryALL);
$ALLPass = mysqli_num_rows($queryALLPASS);
$ALLFail = mysqli_num_rows($queryALLFAIL);

$DATEALL = mysqli_num_rows($queryDATEALL);
$DATEPass = mysqli_num_rows($queryDATEPASS);
$DATEFail = mysqli_num_rows($queryDATEFAIL);


$val = $DATEPass / $ALLPass;
$fpy = $val * 100;
$coefqualite = $ALLPass / $ALL ;
$tauxqualite = $coefqualite * 100;


mysqli_close($con);
 
?>

<h1>Statistiques Testeurs</h1>
    <div class="container">
            <div class="col-6 chart">
                <canvas id="myChart" width="500" height="400"></canvas>
            </div>
			
			<div class="box">
				<div id="g2" class="gauge"></div>
			 </div> 
			
            <div class="col-6 chart">
                <canvas id="myChart2" width="500" height="400"></canvas>
            </div>
			
    </div>
	
	
    <script>

var val = "<?php echo $val ?>"; 
var fpy = "<?php echo $fpy ?>"; 
var coefqualite = "<?php echo $coefqualite ?>"; 
var tauxqualite = "<?php echo $tauxqualite ?>"; 
var DATEPass = "<?php echo $DATEPass ?>"; 
var DATEFail = "<?php echo $DATEFail ?>"; 


let labels1 = ['PASS', 'FAIL'];
let data1 = [DATEPass, DATEFail];
let colors1 = ['#49A9EA', '#36CAAB'];

let myDoughnutChart = document.getElementById("myChart").getContext('2d');

let chart1 = new Chart(myDoughnutChart, {
    type: 'pie',
    data: {
        labels: labels1,
        datasets: [ {
            data: data1,
            backgroundColor: colors1
        }]
    },
    options: {
        title: {
            text: "Pass/Fail",
            display: true
        }
    }
});


let labels2 = ['%', '%'];
let data2 = [fpy, 100 - fpy];
let colors2 = ['#49A9EA', '#36CAAB'];

let myChart2 = document.getElementById("myChart2").getContext('2d');

let chart2 = new Chart(myChart2, {
    type: 'pie',
    data: {
        labels: labels2,
        datasets: [ {
            data: data2,
            backgroundColor: colors2
        }]
    },
    options: {
        title: {
            text: "FPY",
            display: true
        }
    }
});


var g2 = new JustGage({
        id: 'g2',
        value: tauxqualite,
		decimals: 2,
        min: 0,
        max: 100,
        symbol: '%',
		label:"Quality",
        pointer: true,
        pointerOptions: {
          toplength: -15,
          bottomlength: 10,
          bottomwidth: 12,
          color: '#000',
          stroke: '#ffffff',
          stroke_width: 3,
          stroke_linecap: 'round',
        },
        gaugeWidthScale: 0.6,
        counter: true,
        relativeGaugeSize: true
      });


</script>
  </body>
</html>
