@extends('layouts.hmsmain')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<div class="container">

    <h4 id="hdtpa"><b> CRM Panel </b></h4>
    <br>
    <br>


    <div>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    </div>
    <br>
    <div> 
        <canvas id="myChart1" style="width:100%; max-width:600px; height:500px;"> </canvas>
    </div>
    

</div>

<script>
var xValues = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
var yValues = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 12
                }
            }],
        }
    }
});

var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
    "#b91d47",
    "#00aba9",
    "#2b5797",
    "#e8c3b9",
    "#1e7145"
];

new Chart("myChart1", {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        title: {
            display: true,
            text: "World Wide Wine Production 2018"
        }
    }
});
</script>


@endsection