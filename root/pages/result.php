<?php 
//include('hi.php');
session_start(); 
?> 
<!DOCTYPE html >
<html lang="en">
  <head>
      <link rel="shortcut icon" type="image/x-icon" href="./../data/favicon.ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <!-- Bootstrap CSS -->
       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./../css/pgbar.css">
    <title>COVID possibility result</title>
  </head>
  <body style='background-color:#c603fc'>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Detector</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://soumyajitnandi.000webhostapp.com/pages/index2.php">Back to Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
      <form action="test.php">
          <button class="btn btn-outline-success my-2 my-sm-0" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Detect again</button>
          </form>
  </nav>
        <div class="container"><u>
            <h2 class="text-center mt-3">Disease Possibility Detector Result</h2>
        </u>
        </div>
        <?php
        
        $patient=$_SESSION['name'];
        $result=$_SESSION['res'];
        $bac=$_SESSION['bacteria'];
        $cov=$_SESSION['covid'];
        $vir=$_SESSION['viral'];
        $t =round($result*100,2);
        $bg = "";
        if ($t < 26) {
          $bg = "#0af531";
        } elseif ($t < 51) {
          $bg = "#f1f50a";
        } elseif ($t < 76) {
            $bg = "#f5930a";
        } else {
          $bg = "#f5450a";
        }
        
		
		$covP=$t;
		
		$virP=(100-$covP)/3;
		$bacP=100-$t-$vir;
        
        
            echo "<p><h3 style='text-align: center;margin-top: 100px;'>".$patient."'s covid possibility is ".round($result*100,2)."%</h3>
            
        </p>
  
        
        <div class='skill-bars' style='margin : auto'>
      <div class='bar'>
        <div class='info' style='margin-bottom:5%'>
          <span>Possibility of Covid Infection : </span>
        </div>
        <div class='progress-line html'>
        <style>span::after{ content: '".$t."%';}</style>
          <span style='width :".$t."%;background:".$bg."'></span>
        </div>
      </div>
	</div>";
        
		if($t>30){
			echo "<div id='piechart' style='margin-left:32%;margin-top:20px;'></div>";
		    
		};
    
       ?> 
	   
	   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      // Load google charts
      google.charts.load("current", { packages: ["corechart"] });
      google.charts.setOnLoadCallback(drawChart);

      // Draw the chart and set the chart values
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Disease", "Probablity"],
          ["Bacterial Pneumonia", <?php echo $bacP; ?>],
          ["Covid 19", <?php echo $covP; ?>],
          ["Viral Pneumonia", <?php echo $virP; ?>],
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = { title: "Composite Probablity Result", width: 550, height: 400 };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(
          document.getElementById("piechart")
        );
        chart.draw(data, options);
      }
    </script>
	   
	   
	   
      </body>
      </html>