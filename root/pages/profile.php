<?php
session_start();
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./../css/preloader.css">
	<link rel="stylesheet" href="./../css/menu.css">
	<link rel="stylesheet" href="./../css/style.css">
	<link rel="stylesheet" href="./../css/profile.css">
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
					<input type="search" id="search" onchange="openPage()" class="searchTerm" placeholder="What are you looking?">
					<button type="submit" onclick="openPage()" class="searchButton">
						<i class="fa fa-search"></i>
					</button>
					</div>
					
					<div class="container3">
					<div style="text-align:center;">
                    <?php if(isset($_SESSION['user_name'])): ?>
					<a href="profile.php" style="color : yellow;text-decoration: none;"><?php echo $_SESSION['user_name']; ?></a><br>
					
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
					<li><a href="./appointment.html">Book an Appointment With Doctor</a></li>
					<li><a href="./test.php">Predict Disease</li>
					<li><a href="./oxygen.html">Book Oxygen</a></li>
					<li><a href="./vaccine.html">Get Vaccinated</a></li>
					<li><a href="./medicine.html">Order Medicine</a></li>
					<li><a href="./ambulance.html">Call Ambulance</a></li>
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






<div class='cc1'>


	<div class="card">
	  <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="John" style="width:50%;height:50%;margin-top:8%;">
	   
	 <h1><?php  echo $_SESSION['user_name']; ?></h1>
	  <p><button>Log Out</button></p>
	</div>
	


</div>


<div class='cc2'>

	<!--         row ==> st-row     -->
	<div class="st-row">
		<div class="about-tabs">
			<span class="tab-item outer-shadow active" data-target=".aboutme">About Me</span>
			<span class="tab-item" data-target=".phist">Purchase History</span>
			<span class="tab-item" data-target=".ahist">Appiontment History</span>
		</div>
	</div>
	
	<div class="st-row">
	<!--              skill-item ==> aboutme  -->
		<div class="aboutme tab-content active">
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					NAME  : 
				</div>
				
				<div class="st-col2">
					Firstname Lastname 
				</div>
			</div>
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					USERNAME : 
				</div>
				
				<div class="st-col2">
					Firstname@Lastname 
				</div>
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					EMAIL ID  : 
				</div>
				
				<div class="st-col2">
					Firstname.Lastname@xyz.com 
				</div>
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					PHONE NO  : 
				</div>
				
				<div class="st-col2">
					9800XXXXXX
				</div>
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					DATE OF BIRTH  : 
				</div>
				
				<div class="st-col2">
					DD-MM-YYYY
				</div>
			</div>
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					PIN CODE  : 
				</div>
				
				<div class="st-col2">
					700700
				</div>
			</div>
			
		</div>
	</div>
	
	
	<div class="st-row">
	<!--              experience ==> phist  -->
		<div class="phist tab-content ">
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					Order No.
				</div>
				
				<div class="st-col">
					Order Date
				</div>
				
				<div class="st-col">
					Order Status
				</div>
				
				<div class="st-col">
					Details
				</div>
				
			</div>
			
			<div class="st-row2">

				<div class="st-col2">
					Order No. 1
				</div>
				
				<div class="st-col2">
					Order Date 1
				</div>
				
				<div class="st-col2">
					Order Status 1
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details 1</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">

				<div class="st-col2">
					Order No. 2
				</div>
				
				<div class="st-col2">
					Order Date 2
				</div>
				
				<div class="st-col2">
					Order Status 2
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details 2</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">

				<div class="st-col2">
					Order No. 3
				</div>
				
				<div class="st-col2">
					Order Date 3
				</div>
				
				<div class="st-col2">
					Order Status 3
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details 3</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">

				<div class="st-col2">
					Order No. 4
				</div>
				
				<div class="st-col2">
					Order Date 4
				</div>
				
				<div class="st-col2">
					Order Status 4
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details 4</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">

				<div class="st-col2">
					Order No. 5
				</div>
				
				<div class="st-col2">
					Order Date 5
				</div>
				
				<div class="st-col2">
					Order Status 5
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details 5</a>
				</div>
				
			</div>
			
			
			
		</div>
	</div>
	
	
	<div class="st-row">
	<!--              experience ==> phist  -->
		<div class="ahist tab-content ">
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					Appointment No.
				</div>
				
				<div class="st-col">
					Appointment Date
				</div>
				
				<div class="st-col">
					Doctor Name
				</div>
				
				<div class="st-col">
					Appointment Status
				</div>
				
				<div class="st-col">
					Prescription
				</div>
				
			</div>
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. 1
				</div>
				
				<div class="st-col2">
					Appointment Date 1
				</div>
				
				<div class="st-col2">
					Doctor Name 1
				</div>
				
				<div class="st-col2">
					Appointment Status 1
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Prescription 1</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. 2
				</div>
				
				<div class="st-col2">
					Appointment Date 2
				</div>
				
				<div class="st-col2">
					Doctor Name 2
				</div>
				
				<div class="st-col2">
					Appointment Status 2
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Prescription 2</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. 3
				</div>
				
				<div class="st-col2">
					Appointment Date 3
				</div>
				
				<div class="st-col2">
					Doctor Name 3
				</div>
				
				<div class="st-col2">
					Appointment Status 3
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Prescription 3</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. 4
				</div>
				
				<div class="st-col2">
					Appointment Date 4
				</div>
				
				<div class="st-col2">
					Doctor Name 4
				</div>
				
				<div class="st-col2">
					Appointment Status 4
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Prescription 4</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. 5
				</div>
				
				<div class="st-col2">
					Appointment Date 5
				</div>
				
				<div class="st-col2">
					Doctor Name 5
				</div>
				
				<div class="st-col2">
					Appointment Status 5
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Prescription 5</a>
				</div>
				
			</div>
			
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. 6
				</div>
				
				<div class="st-col2">
					Appointment Date 6
				</div>
				
				<div class="st-col2">
					Doctor Name 6
				</div>
				
				<div class="st-col2">
					Appointment Status 6
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Prescription 6</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. 7
				</div>
				
				<div class="st-col2">
					Appointment Date 7
				</div>
				
				<div class="st-col2">
					Doctor Name 7
				</div>
				
				<div class="st-col2">
					Appointment Status 7
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Prescription 7</a>
				</div>
				
			</div>
			
			
		</div>
	</div>

</div>
	  






	<!-- _____________________FOOTER_____________________ -->
	

<!--     <footer class="footer">
	
		<div class="container">
		
			<div class="row jcb">
			UNDER DEVELOPMENT
			</div>
		</div>
	</footer> -->
	
	<!-- _____________________FOOTER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________JS_____________________ -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="./../js/jquery-3.5.1.js"></script>
	<script src="./../js/preloader.js"></script>
	<script src="./../js/menu.js"></script>
	<script src="./../js/login.js"></script>
	<script src="./../js/profile.js"></script>
	<script src="./../js/srch.js"></script>
	
	<!-- _____________________JS_____________________ -->
	
</body>

</html>