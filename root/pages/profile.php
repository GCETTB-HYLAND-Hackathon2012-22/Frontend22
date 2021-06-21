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
					<a href="#" style="color : yellow;text-decoration: none;"><?php echo $_SESSION['user_name']; ?></a><br>
					
                    <?php endif ?>
					</div>
					</div>

				<input type="checkbox" id="active">
					<label for="active" class="menu-btn"><span></span></label>
					<label for="active" class="close"></label>
					<div class="wrapper">
						<ul>
							<li><a href="./index2.php">Home</a></li>
							<li><a href="./about.html">About</a></li>
							<li><a  href="#" class="srv-btn">Services
							<span class="fas fa-caret-down"></span>
						</a>
							<ul class="srv-show">
					<li><a href="./location3.php">Book an Appointment With Doctor</a></li>
					<li><a href="./test.php">Predict Disease</li>
					<li><a href="./location2.php">Book Oxygen</a></li>
					<li><a href="./vaccine.html">Get Vaccinated</a></li>
					<li><a href="./locationmed.php">Order Medicine</a></li>
					<li><a href="./ambulance.html">Call Ambulance</a></li>
							</ul>
						</li>
							<li><a href="./social.html">Social</a></li>
							<li><a href="./contact.html">Contact</a></li>
							<li><a href="./feedback.php">Feedback</a></li>
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
	  <p><button onclick="window.open('./../index.php','_self')">Log Out</button></p>
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
	
	<div class="st-row" >
	<!--              skill-item ==> aboutme  -->
		<div class="aboutme tab-content active"   >
			<div class="st-row2" ">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					NAME  : 
				</div>
				
				<div class="st-col2">
					<?php  echo $_SESSION['user_name']; ?> 
				</div>
			</div>
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					USERNAME : 
				</div>
				
				<div class="st-col2">
					<?php  echo $_SESSION['user_id']; ?> 
				</div>
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					EMAIL ID  : 
				</div>
				
				<div class="st-col2" >
					<?php  echo $_SESSION['user_email']; ?>
				</div>
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					PHONE NO  : 
				</div>
				
				<div class="st-col2">
					<?php  echo $_SESSION['user_contact']; ?>
				</div>
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					DATE OF BIRTH  : 
				</div>
				
				<div class="st-col2">
					<?php  echo $_SESSION['user_DOB']; ?>
				</div>
			</div>
			
			<div class="st-row2" >
			<!--          skill-item ==> ids  -->
				
				<div class="st-col">
					PIN CODE  : 
				</div>
				
				<div class="st-col2">
					<?php  echo $_SESSION['user_pin']; ?>
				</div>
			</div>
			
			<div class="st-row2" >
			<!--          skill-item ==> ids  -->
				<div class="st-col" style="background-color:#87ffd9">
					 
				</div>
				
				<div class="st-col2" style="background-color:#87ffd9;border:none;">
					
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
					Order No. #M345
				</div>
				
				<div class="st-col2">
					13-06-2021
				</div>
				
				<div class="st-col2">
					Booked
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">

				<div class="st-col2">
					Order No. #O280
				</div>
				
				<div class="st-col2">
					13-06-2021
				</div>
				
				<div class="st-col2">
					Booked
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">

				<div class="st-col2">
					#M325	
				</div>
				
				<div class="st-col2">
					11-06-2021
				</div>
				
				<div class="st-col2">
					Shipped
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">

				<div class="st-col2">
					Order No. #O250
				</div>
				
				<div class="st-col2">
					10-06-2021
				</div>
				
				<div class="st-col2">
					Delivered
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">

				<div class="st-col2">
					Order No. #M300
				</div>
				
				<div class="st-col2">
					25-04-2021
				</div>
				
				<div class="st-col2">
					Delivered
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#">Details</a>
				</div>
				
			</div>
			
			
			
		</div>
	</div>
	
	
	<div class="st-row">
	<!--              experience ==> phist  -->
		<div class="ahist tab-content " style="padding-bottom: 80px;">
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
					Appointment No. #1233
				</div>
				
				<div class="st-col2">
					15-06-2021
				</div>
				
				<div class="st-col2">
					Julie L. Arsenault
				</div>
				
				<div class="st-col2">
					Booked
				</div>
				
				<div class="st-col2">
					<a class="pp" style="pointer-events: none;
  cursor: default;color:grey;border:none;" href="#">Prescription</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. #1232
				</div>
				
				<div class="st-col2">
					13-06-2021
				</div>
				
				<div class="st-col2">
					SOUMYAJIT NANDI
				</div>
				
				<div class="st-col2">
				    Booked
				</div>
				
				<div class="st-col2">
					<a class="pp" href="#"  style="pointer-events: none;
  cursor: default;color:grey;border:none;">Prescription</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. #1131
				</div>
				
				<div class="st-col2">
					10-06-2021
				</div>
				
				<div class="st-col2">
					Mark K. Horne
				</div>
				
				<div class="st-col2">
					Completed
				</div>
				
				<div class="st-col2">
					<a class="pp" href="./../data/Prescription_1131.pdf">Prescription</a>
				</div>
				
			</div>
			
			
			<div class="st-row2">
			<!--          skill-item ==> ids  -->
				
				<div class="st-col2">
					Appointment No. #830
				</div>
				
				<div class="st-col2">
					01-06-2021
				</div>
				
				<div class="st-col2">
					Christopher Gallardo
				</div>
				
				<div class="st-col2">
					Completed
				</div>
				
				<div class="st-col2">
					<a class="pp" href="./../data/Prescription_830.pdf">Prescription</a>
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