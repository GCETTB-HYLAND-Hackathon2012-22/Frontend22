<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Oxygen</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./../data/favicon.ico">
	
	<!-- CSS -->>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./../css/preloader.css">
	<link rel="stylesheet" href="./../css/menu.css">
	<link rel="stylesheet" href="./../css/style.css">
	<link rel="stylesheet" href="./../css/oxygen.css">

</head>

<body>

	<!-- _____________________PRELOADER_____________________ -->
	
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="sk-folding-cube">
				<div class="sk-cube1 sk-cube"></div>
				<div class="sk-cube2 sk-cube"></div>
				<div class="sk-cube4 sk-cube"></div>
				<div class="sk-cube3 sk-cube"></div>
			</div>
		</div>
	</div>
	
	<!-- _____________________PRELOADER_____________________ -->
	
	
	
	
	
	
	
	

	<!-- _____________________HEADER_____________________ -->
	
		<header class="header">
		<div class="container">
			<div class="row jcb">
				<div class="logo">
					<a href="./../index.html"><img src='./../data/logo.png'></a>
					<a href="./../index.html"><img id="NM" src='./../data/miracurol.png'></a>
				</div>
				
					<div class="container2">
					<input type="search" id="search" onchange="openPage()" class="searchTerm" placeholder="What are you looking?">
					<button type="submit" onclick="openPage()" class="searchButton">
						<i class="fa fa-search"></i>
					</button>
					</div>
				

				<input type="checkbox" id="active">
					<label for="active" class="menu-btn"><span></span></label>
					<label for="active" class="close"></label>
					<div class="wrapper">
						<ul>
							<li><a href="./../index.html">Home</a></li>
							<li><a href="./about.html">About</a></li>
							<li><a  href="#" class="srv-btn">Services
							<span class="fas fa-caret-down"></span>
						</a>
							<ul class="srv-show">
					<li><a href="./location3.php">Book an Appointment With Doctor</a></li>
					<li><a href="./test.php">Predict Disease</li>
					<li><a href="#">Book Oxygen</a></li>
					<li><a href="./vaccine.html">Get Vaccinated</a></li>
					<li><a href="./locationmed.php">Order Medicine</a></li>
					<li><a href="./ambulance.html">Call Ambulance</a></li>
				</ul>
			</li>
				<li><a href="./social.html">Social</a></li>
				<li><a href="./contact.html">Contact</a></li>
				<li><a href="./feedback.html">Feedback</a></li>
			</ul>
		</div>
			</div>
		</div>
	  </header>
	
	<!-- _____________________HEADER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________CONTENT_____________________ -->

	<div class="content">
      <div class="title">Order Oxygen</div>
	  <p>From verified sellers at original price</p>

		<span class="gap"></span>
		<div class="row">
		  <div class="column">
			<div class="card">
				 <?php 
                // include('results.php');
              $store1=$_SESSION['store'];
              $address1=$_SESSION['address'];
              $contact1=$_SESSION['contact'];
                echo "<h2>Store : $store1</h2>
				<h4>Address : $address1</h4>
				<h4>Contact : $contact1</h4><br>";
               
                ?>
				<button class="Button" onclick="window.open('./oxbook.php')" id="oxButton1" class="btn request-callback">Order Now</button>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
				<h1>Supplier 2</h1>
				<h2>Address 2</h2>
				<h2>Contact 2</h2><br>
				<button class="Button" onclick="window.open('./oxbook.php')" id="oxButton2" class="btn request-callback">Order Now</button>
			</div>
		  </div>
		  <div class="column">
			<div class="card">					
				<h1>Supplier 3</h1>
				<h2>Address 3</h2>
				<h2>Contact 3</h2><br>
				<button class="Button" onclick="window.open('./oxbook.php')" id="oxButton3" class="btn request-callback">Order Now</button>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
				<h1>Supplier 4</h1>
				<h2>Address 4</h2>
				<h2>Contact 4</h2><br>
				<button class="Button" onclick="window.open('./oxbook.php')" id="oxButton4" class="btn request-callback">Order Now</button>
			</div>
		  </div>
		</div>
		

		<span class="gap"></span>
		
		<div class="row">
		  <div class="column">
			<div class="card">
				<h1>Supplier 5</h1>
				<h2>Address 5</h2>
				<h2>Contact 5</h2><br>
				<button class="Button" onclick="window.open('./oxbook.php')" id="oxButton5" class="btn request-callback">Order Now</button>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
				<h1>Supplier 6</h1>
				<h2>Address 6</h2>
				<h2>Contact 6</h2><br>
				<button class="Button" onclick="window.open('./oxbook.php')" id="oxButton6" class="btn request-callback">Order Now</button>
			</div>
		  </div>
		  <div class="column">
			<div class="card">					
				<h1>Supplier 7</h1>
				<h2>Address 7</h2>
				<h2>Contact 7</h2><br>
				<button class="Button" onclick="window.open('./oxbook.php')" id="oxButton7" class="btn request-callback">Order Now</button>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
				<h1>Supplier 8</h1>
				<h2>Address 8</h2>
				<h2>Contact 8</h2><br>
				<button class="Button" onclick="window.open('./oxbook.php')" id="oxButton8" class="btn request-callback">Order Now</button>
			</div>
		  </div>
		</div>
	</div>

		
	<!-- _____________________CONTENT_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________FOOTER_____________________ -->
	
	
	
	<!-- _____________________FOOTER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________JS_____________________ -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="./../js/jquery-3.5.1.js"></script>
	<script src="./../js/preloader.js"></script>
	<script src="./../js/menu.js"></script>
	<script src="./../js/srch.js"></script>
	
	<!-- _____________________JS_____________________ -->
	
</body>

</html>