
var val = "<?php echo $val ?>"; 
var fpy = "<?php echo $fpy ?>"; 
var coefqualite = "<?php echo $coefqualite ?>"; 
var tauxqualite = "<?php echo $tauxqualite ?>"; 
var DATEPass = "<?php echo $DATEPass ?>"; 
var DATEFail = "<?php echo $DATEFail ?>"; 

alert(val);

let labels1 = ['PASS', 'FAIL'];
let data1 = [69, 31];
let colors1 = ['#49A9EA', '#36CAAB'];

let myDoughnutChart = document.getElementById("myChart").getContext('2d');

let chart1 = new Chart(myDoughnutChart, {
    type: 'doughnut',
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


let labels2 = ['Germany', 'France'];
let data2 = [83, 67];
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


const gaugeElement = document.querySelector(".gauge");

function setGaugeValue(gauge, value) {
  if (value < 0 || value > 1) {
    return;
  }

  gauge.querySelector(".gauge__fill").style.transform = `rotate(${
    value / 2
  }turn)`;
  gauge.querySelector(".gauge__cover").textContent = `${Math.round(
    value * 100
  )}%`;
}

setGaugeValue(gaugeElement, 0.3);

