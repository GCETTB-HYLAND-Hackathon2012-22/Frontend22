<?php
include('results2.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Book Appointment</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./../data/favicon.ico">
	
	<!-- CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="./../css/preloader.css">
 	<link rel="stylesheet" href="./../css/menu.css">
	<link rel="stylesheet" href="./../css/style.css">  
	<link rel="stylesheet" href="./../css/dr.css">

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
					<input type="text" class="searchTerm" placeholder="What are you looking?">
					<button type="submit" class="searchButton">
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
					<li><a href="./location2.php">Book Oxygen</a></li>
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
		</div>
	  </header>
	  
		<!-- _____________________HEADER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________CONTENT_____________________ -->


		<div class="content2" style="margin-top : 5%;">
			<div class="container1" >
				<div class="row" style="padding : 20px">
					<!--<div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
					<!-- end col -->
				</div>
				<!-- end row -->
				<div class="row" style="margin-top: 10%;">
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
                                    <?php
									echo "<h4>$doc_name1</h4>
									<p class='text-muted'>$doc_spec1 Specialist <span>| </span><span><a href='#' class='text-pink'>M.D, M.S</a></span></p>
								</div>
								<div class='social' >
								   <a ><i class='fa fa-facebook'></i></a>
								   <a ><i class='fa fa-twitter'></i></a>
								   <a ><i class='fa fa-skype'></i></a>
								</div>"
								?>
								<button type='button' class='btn' onclick="window.open('./appbook.php')" id='appButton1' class='btn request-callback'>Book Appointment</button>
								<?php
                                echo "<div class='mt-4'>
									<div class='row'>
										<div class='col-4'>
											<div class='mt-3'>
												<h4>563</h4>
												<p class='mb-0 text-muted'>Booking</p>
											</div>
										</div>
										<div class='col-4'>
											<div class='mt-3'>
												<h4>152</h4>
												<p class='mb-0 text-muted'>Waiting</p>
											</div>
										</div>
										<div class='col-4'>
											<div class='mt-3'>
												<h4>Fees : $doc_fee1</h4>
												<p class='mb-0 text-muted'>Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>"
                    ?>
					<!-- end col -->
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
									<h4>Julie L. Arsenault</h4>
									<p class="text-muted">Orthologist <span>| </span><span><a href="#" class="text-pink">M.D, M.S</a></span></p>
								</div>
								
								<div class="social" >
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
								</div>
								
								<button type="button" class="btn" onclick="window.open('./appbook.php')" id="appButton2" class="btn request-callback">Book Appointment</button>
								<div class="mt-4">
									<div class="row">
										<div class="col-4">
											<div class="mt-3">
												<h4>512</h4>
												<p class="mb-0 text-muted">Booking</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>51</h4>
												<p class="mb-0 text-muted">Waiting</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>1000</h4>
												<p class="mb-0 text-muted">Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
									<h4>Christopher Gallardo</h4>
									<p class="text-muted">General Physician <span>| </span><span><a href="#" class="text-pink">M.D, M.S</a></span></p>
								</div>
								
								<div class="social" >
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
								</div>
								
								<button type="button" class="btn" onclick="window.open('./appbook.php')" id="appButton3" class="btn request-callback">Book Appointment</button>
								<div class="mt-4">
									<div class="row">
										<div class="col-4">
											<div class="mt-3">
												<h4>608</h4>
												<p class="mb-0 text-muted">Booking</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>362</h4>
												<p class="mb-0 text-muted">Waiting</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>500</h4>
												<p class="mb-0 text-muted">Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
				</div>
				<!-- end row -->
				<div class="row">
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
									<h4>Joseph M. Rohr</h4>
									<p class="text-muted">General Physician <span>| </span><span><a href="#" class="text-pink">M.D, M.S</a></span></p>
								</div>
								
								<div class="social" >
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
								</div>
								
								<button type="button" class="btn" onclick="window.open('./appbook.php')" id="appButton4" class="btn request-callback">Book Appointment</button>
								<div class="mt-4">
									<div class="row">
										<div class="col-4">
											<div class="mt-3">
												<h4>845</h4>
												<p class="mb-0 text-muted">Booking</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>354</h4>
												<p class="mb-0 text-muted">Waiting</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>600</h4>
												<p class="mb-0 text-muted">Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
									<h4>Mark K. Horne</h4>
									<p class="text-muted">Neurologist <span>| </span><span><a href="#" class="text-pink">M.D, M.S</a></span></p>
								</div>
								
								<div class="social" >
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
								</div>
								
								<button type="button" class="btn" onclick="window.open('./appbook.php')" id="appButton5" class="btn request-callback">Book Appointment</button>
								<div class="mt-4">
									<div class="row">
										<div class="col-4">
											<div class="mt-3">
												<h4>251</h4>
												<p class="mb-0 text-muted">Booking</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>102</h4>
												<p class="mb-0 text-muted">Waiting</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>1200</h4>
												<p class="mb-0 text-muted">Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
									<h4>James M. Fonville</h4>
									<p class="text-muted">Child Specialist <span>| </span><span><a href="#" class="text-pink">M.D, M.S</a></span></p>
								</div>
								
								<div class="social" >
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
								</div>
								
								<button type="button" class="btn" onclick="window.open('./appbook.php')" id="appButton6" class="btn request-callback">Book Appointment</button>
								<div class="mt-4">
									<div class="row">
										<div class="col-4">
											<div class="mt-3">
												<h4>860</h4>
												<p class="mb-0 text-muted">Booking</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>450</h4>
												<p class="mb-0 text-muted">Waiting</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>750</h4>
												<p class="mb-0 text-muted">Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
				</div>
				<!-- end row -->
				<div class="row">
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
									<h4>Jade M. Walker</h4>
									<p class="text-muted">Cardiologist <span>| </span><span><a href="#" class="text-pink">M.D, M.S</a></span></p>
								</div>
								
								<div class="social" >
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
								</div>
								
								<button type="button" class="btn" onclick="window.open('./appbook.php')" id="appButton7" class="btn request-callback">Book Appointment</button>
								<div class="mt-4">
									<div class="row">
										<div class="col-4">
											<div class="mt-3">
												<h4>520</h4>
												<p class="mb-0 text-muted">Booking</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>187</h4>
												<p class="mb-0 text-muted">Waiting</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>1500</h4>
												<p class="mb-0 text-muted">Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
									<h4>Mathias L. Lassen</h4>
									<p class="text-muted">General Physician <span>| </span><span><a href="#" class="text-pink">M.D, M.S</a></span></p>
								</div>
								
								<div class="social" >
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
								</div>
								
								<button type="button" class="btn" onclick="window.open('./appbook.php')" id="appButton8" class="btn request-callback">Book Appointment</button>
								<div class="mt-4">
									<div class="row">
										<div class="col-4">
											<div class="mt-3">
												<h4>851</h4>
												<p class="mb-0 text-muted">Booking</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>420</h4>
												<p class="mb-0 text-muted">Waiting</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>550</h4>
												<p class="mb-0 text-muted">Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-4" style="margin : auto">
						<div class="text-center card-box">
							<div class="member-card pt-2 pb-2">
								<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
								<div class="NMM">
									<h4>Alfred M. Bach</h4>
									<p class="text-muted">Child Specialist <span>| </span><span><a href="#" class="text-pink">M.D, M.S</a></span></p>
								</div>
								
								<div class="social" >
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								   <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
								</div>
								
								<button type="button" class="btn" onclick="window.open('./appbook.php')" id="appButton9" class="btn request-callback">Book Appointment</button>
								<div class="mt-4">
									<div class="row">
										<div class="col-4">
											<div class="mt-3">
												<h4>721</h4>
												<p class="mb-0 text-muted">Booking</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>154</h4>
												<p class="mb-0 text-muted">Waiting</p>
											</div>
										</div>
										<div class="col-4">
											<div class="mt-3">
												<h4>650</h4>
												<p class="mb-0 text-muted">Fees</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
				</div>
				<!-- end row -->
				<div class="row">
					<div class="col-12">
						<div class="text-right">
							<ul class="pagination pagination-split mt-0 float-right">
								<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>
			<!-- container -->
		</div>


		
	<!-- _____________________CONTENT_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________FOOTER_____________________ -->
	
	
	
	<!-- _____________________FOOTER_____________________ -->
	
	
	
	
	
	
	
	
	

	<!-- _____________________JS_____________________ -->
	
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="./../js/jquery-3.5.1.js"></script>
	<script src="./../js/preloader.js"></script>
	<script src="./../js/menu.js"></script>
	
	<!-- _____________________JS_____________________ -->
	
</body>

</html>

