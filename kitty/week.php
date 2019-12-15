<?php
session_start();
include('navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>KittySpinny</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="./CSS/main.css">

<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
</head>

<body>
    <div class="main" id ="main">
        

    
         <div id=distance> </div>
         <div id=time> </div>
         <div id=speed> </div>
         

   
    
    
    <div class="chart-container" >
        <canvas id="graphCanvas"></canvas>
    </div>
</div>
   
    <script>

        function umrechnungAusgeben(sekundenwert) {
				

				// Hier Ihren Code einfügen
				var startwert = sekundenwert;
				var sekunden = sekundenwert % 60;
				sekundenwert -= sekunden;
				var jahre = Math.floor(sekundenwert / (60*60*24*365));
				sekundenwert -= jahre*60*60*24*365;
				var tage = Math.floor(sekundenwert / (60*60*24));
				sekundenwert -= tage*60*60*24;
				var stunden = Math.floor(sekundenwert / (60*60));
				sekundenwert -= stunden*60*60;
				var minuten = Math.floor(sekundenwert / 60);
				var returnstring = "";
				returnstring = ""+ 
				      jahre + " years, " +
					  tage + " days, " +
					  stunden + " hours, " +
					  minuten + " minutes, " +
					  sekunden + " seconds."
					  ;
                return returnstring;
			}

        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    
                     var name = [];
					
                    var speed = [];
                    var distance = [];
                    var time = [];
                    var totaldistance = 0;
                    var avgspeed = 0;
                    var date1;
                    var date2;
                    var currentdate;
                    var t;
                    var totaltime = 0;
                    var now = moment();


                    for (var i in data) {

                        
                        date1 = Date.parse(data[i].start);
                        date2 = Date.parse(data[i].end);
                        var input = moment(date2);
                        var isThisWeek = (now.isoWeek() == input.isoWeek());
                        
                        if(isThisWeek) {
                            
                            //time in seconds
                        t = (date2-date1)/1000;
                        
                        totaltime = totaltime + t;
                        
						var v = (data[i].revolutions/time)*1.22*3.141*3.6;
                        var d = data[i].revolutions*1.22*3.141;
						speed.push(v);
                        distance.push(d);
                        time.push(t);
                        name.push(data[i].start);
                        
                        
                        

                        
                        totaldistance = totaldistance + (d);
                    
                        }
                        
                        

                    }
                    totaldistance = Math.floor(totaldistance*100)/100;
                    avgspeed = Math.floor(totaldistance/totaltime*100)/100;
                    document.getElementById('distance').innerHTML ="<p>Total distance this week: " + totaldistance.toLocaleString('en-GB') +" Meter </p>";
                    document.getElementById('time').innerHTML ="<p>Total time this week: " + umrechnungAusgeben(totaltime) + "</p>";
                    document.getElementById('speed').innerHTML ="<p>Average Speed: " + avgspeed + " m/s</p>";
                    

                    var chartdata = {
                        labels: name,
                        datasets: [
                           
							{
                                label: 'Distance  [m]',
                                backgroundColor: '#FFD700',
                                borderColor: '#FFD700',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: distance,
                                yAxisID: 'left-y-axis',
								
								
                            },
                            {
                                label: 'Time  [s]',
                                backgroundColor: '#FF0000',
                                borderColor: '#FF0000',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: time,
                                yAxisID: 'right-y-axis',
								
								
								
                            }
                            
                            
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata,
						options: {
                            responsive: true,
                            showTooltips: true,
                            title: {
                                display: true,
                                text: 'This Week'
                            },
							
							scales: {
								
							xAxes: [{
                                gridLines: {
                                    display:false
                                },
                                
								offset: true,
								distribution: 'series',
								type: 'time',
                               
                                
                                
                                categoryPercentage: 0.5,
                                barPercentage: 1.0,

								ticks:{
                                    beginAtZero: true,
									source: 'labels',
                                    
									},
                                    time: {
                                        
                                        unit: 'day',
                                        tooltipFormat:'lll',
                                        unitStepSize: 1,
                                        displayFormats: {
                                            'millisecond':'lll',
                                            'second': 'lll',
                                            'minute': 'lll',
                                            'hour': 'lll',
                                            'day': 'lll',
                                            'week': 'lll',
                                            'month': 'lll',
                                            'quarter': 'lll',
                                            'year': 'lll',
                                          
                                        }
                                    },
                                
                                scaleLabel: {
                                    display: true,
                                     fontSize: 14,
                                     labelString: 'Date',
                                     
                                     }
							}],
							yAxes: [{
                                gridLines: {
                                    display:false
                                },
								id: 'left-y-axis',
                                
								distribution: 'series',
								position: 'left',
                                offset: true,
								display: true, // Hopefully don't have to explain this one.
                                scaleLabel: {
                                    display: true,
                                     fontSize: 14,
                                     labelString: 'Distance',
                                     
                                     },
                                     ticks: {
                                        beginAtZero: true
                                    },
               
								
								
								},
                                {
                                    gridLines: {
                                    display:false
                                },
								id: 'right-y-axis',
								distribution: 'series',
								position: 'right',
                                offset: true,
								display: true, // Hopefully don't have to explain this one.
                                scaleLabel: {
                                    display: true,
                                     fontSize: 14,
                                     labelString: 'Time',
                                     
                                     },
                                     ticks: {
                                        beginAtZero: true
                                    },
               
								
								
								}
                                
                                
                                
                                
                                
                                
                                ]
							
							
							}
						}
                    });
                });
            }
        }
        </script>

</body>
</html>