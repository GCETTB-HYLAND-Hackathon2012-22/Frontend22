<?php
$url = "http://gcettbiaans22.herokuapp.com/api";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// $resp = curl_exec($curl);
curl_close($curl);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./data/favicon.ico">
	
	<!-- CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/preloader.css">
	<link rel="stylesheet" href="./css/menu.css">
	<link rel="stylesheet" href="./css/header.css">
	<!--<link rel="stylesheet" href="./css/login.css">-->

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
	
	<div class="Header">
				
		<div class="logo">
					<a href="#"><img src='./data/logo.png'></a>
					<a href="#"><img id="NM" src='./data/miracurol.png'></a>
				</div>
		

		
		  <div class="Header-background"></div>
		  <div class="Header-content">
			<div class="Header-hero">
			  <h1>Health is Wealth <br/>A Platform</h1>
			  <p>That brings all your needs at one place</p>
			  <button class="Button" onclick="window.open('./pages/reg.php','_self')" id="myButton2" class="btn request-callback">Sign Up</button>
			  <button class="Button" onclick="window.open('./pages/login.php','_self')" id="myButton2" class="btn request-callback">Sign In</button>
			</div>
			<div class="Header-visuals">
			  <div class="Iphone"></div>
			</div>
			
		  </div>
		</div>
	</div>
	
	<!-- _____________________HEADER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________CONTENT_____________________ -->
	

    <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
    <div class="wrapper">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="./pages/about.html">About</a></li>
			<li><a  href="#" class="srv-btn">Services
				<span class="fas fa-caret-down"></span>
			</a>
				<ul class="srv-show">
					<li><a href="./pages/login.php">Book an Appointment with Doctor</a></li>
					<li><a href="./pages/login.php">Predict Disease</a></li>
					<li><a href="./pages/login.php">Book Oxygen</a></li>
					<li><a href="./pages/login.php">Get Vaccinated</a></li>
					<li><a href="./pages/login.php">Order Medicine</a></li>
					<li><a href="./pages/login.php">Call Ambulance</a></li>
				</ul>
			</li>
			<li><a href="./pages/social.html">Social</a></li>
			<li><a href="./pages/contact.html">Contact</a></li>
			<li><a href="./pages/feedback.php">Feedback</a></li>
		</ul>
	</div>
    

	<!--<div class="content">-->
 <!--     <div class="title">WELCOME</div>-->

	<!--</div>-->


		
	<!-- _____________________CONTENT_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________FOOTER_____________________ -->
	
	<!--    <footer class="footer">-->
	
	<!--	<div class="container">-->
		
	<!--		<div class="row jcb">-->
	<!--		UNDER DEVELOPMENT-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</footer>-->
	
	<!-- _____________________FOOTER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________JS_____________________ -->
	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="./js/jquery-3.5.1.js"></script>
	<script src="./js/preloader.js"></script>
	<script src="./js/menu.js"></script>
	<script src="./js/login.js"></script>
	
	<!-- _____________________JS_____________________ -->
	
</body>

</html>