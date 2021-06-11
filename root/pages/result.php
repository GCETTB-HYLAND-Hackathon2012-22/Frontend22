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
  <body style='background-color: 
  
  <?php
$t =round($_SESSION['res']*100,2);

if ($t < 26) {
  echo "#0af531";
} elseif ($t < 51) {
  echo "#f1f50a";
} elseif ($t < 76) {
    echo "#f5930a";
} else {
  echo "#f5450a";
}

echo "'>";
?> <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Detector</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://soumyajitnandi.000webhostapp.com/">Back to Home</a>
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
            <h2 class="text-center mt-3">COVID-19 Possibility Detector Result</h2>
        </u>
        </div>
        <?php
        
        $patient=$_SESSION['name'];
        $result=$_SESSION['res'];
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
        
        
        
            echo "<p><h3 style='text-align: center;margin-top: 100px;'>".$patient."'s covid possibility is ".round($result*100,2)." %</h3>
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
	</div>
        
        
        "
    
       ?> 
      </body>
      </html>