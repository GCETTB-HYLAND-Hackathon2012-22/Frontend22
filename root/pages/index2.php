<?php
include("index.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Welcome</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./../data/favicon.ico">
	
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./../css/preloader.css">
	<link rel="stylesheet" href="./../css/menu.css">
	<link rel="stylesheet" href="./../css/style.css">
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
	
	
	<header class="header">
	
				<div class="container">
		

			<div class="row jcb">
			
			
				<div class="logo">
					<a href="#"><img src='./../data/logo.png'></a>
					<a href="#"><img id="NM" src='./../data/miracurol.png'></a>
				</div>
				
					<div class="container2">
					
					
					
					<input type="text" class="searchTerm" placeholder="What are you looking?">
					<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					</button>
					
					
					
					</div>
					
					<div class="container3">
					<div style="text-align:center;">
                    <?php if(isset($_SESSION['user_name'])): ?>
					<a href="profile.html" style="color : yellow;text-decoration: none;"><?php echo $_SESSION['user_name']; ?></a><br>
					<button onclick="" style=" padding: 10px; font-size: 15px; color: white; background: blue; border: none; border-radius: 2px;">Log Out</button>
                    <?php endif ?>
					</div>
					</div>

				<input type="checkbox" id="active">
					<label for="active" class="menu-btn"><span></span></label>
					<label for="active" class="close"></label>
					<div class="wrapper">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="./about.html">About</a></li>
							<li><a  href="#" class="srv-btn">Services
							<span class="fas fa-caret-down"></span>
						</a>
							<ul class="srv-show">
								<li><a href="./appointment.html">Appointment</a></li>
								<li><a href="./test.php">Predictor</a></li>
								<li><a href="./oxygen.html">Oxygen</a></li>
								<li><a href="./vaccine.html">Vaccination</a></li>
								<li><a href="./medicine.html">Medicine</a></li>
								<li><a href="./ambulance.html">Ambulance</a></li>
							</ul>
						</li>
							<li><a href="./social.html">Social</a></li>
							<li><a href="./contact.html">Contact</a></li>
							<li><a href="./feedback.html">Feedback</a></li>
						</ul>
					</div>
					
			
					
			</div>
			
<!-- 		<div class="search">
			<input type="text" class="searchTerm" placeholder="What are you looking for?">
			<button type="submit" class="searchButton">
				<i class="fa fa-search"></i>
			</button>
		</div> -->
			
			
			
		</div>
		
		
	  </header>
	
	<!-- _____________________HEADER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________CONTENT_____________________ -->
	


	<div class="content">
      <div class="title">WELCOME</div>
	</div>


		
	<!-- _____________________CONTENT_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________FOOTER_____________________ -->
	

    <footer class="footer">
	
		<div class="container">
		
			<div class="row jcb">
			UNDER DEVELOPMENT
			</div>
		</div>
	</footer>
	
	<!-- _____________________FOOTER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________JS_____________________ -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="./../js/jquery-3.5.1.js"></script>
	<script src="./../js/preloader.js"></script>
	<script src="./../js/menu.js"></script>
	<script src="./../js/login.js"></script>
	
	<!-- _____________________JS_____________________ -->
	
</body>

</html>