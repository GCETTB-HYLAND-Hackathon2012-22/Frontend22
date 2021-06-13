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
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    	<link rel="stylesheet" type="text/css" href="./../css/oxbook.css">
    </head>
    <body>
    
    	<div class="header">
    		<h2 style="text-align: center;"><b>Book Appointment</b></h2>
    	</div>
		
    	<form action="" method="POST">
    		<div class="input-group">
    			<label for="firstame"><b>First Name : </b></label>
    			<input type="text" name="firstame" required>
    		</div>
			
			<div class="input-group">
    			<label for="lastame"><b>Last Name : </b></label>
    			<input type="text" name="lastame" required>
    		</div>
			
    		<div class="input-group">
    			<label for="age"><b>Age : </b></label>
    			<input type="number" name="age" required>
			</div>
			
			<div class="hz">
				<label for="gender"><b>Gender :  </b></label>
				<div class="opt">
			    <input type="radio" id="male" name="gender" value="male">
				<label for="male">Male</label>
				</div>
				<div class="opt">
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Female</label>
				</div>
				<div class="opt">
				<input type="radio" id="other" name="gender" value="other">
				<label for="other">Other</label></div><br>
			</div>
			
			<div class="input-group">
    			<label for="mobile"><b>Mobile No : </b></label>
				<input type="number" name="mobile" required>
			</div>
			
			<div class="input-group">
    			<label for="med"><b>Problems  : </b></label>
    			<input type="text" name="med" required>
    		</div>
				
			
			<div class="input-group">
			<label for="start"><b>Appointment date : </b></label>
<input type="date" id="start" name="date"
       value=""
       min="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d", strtotime("+30 day", strtotime(date("Y-m-d")))); ?>" required>
		</div>
			
			
			

			
    		<div class="input-group">
				<button class="btn" type="submit" onclick="alrt()" name="log_user"><b>Book Now</b></button>
			</div>

    	</form>
<?php
if(isset($_POST["log_user"])){
    echo("<script>location.href = "."'index2.php';</script>");
}
?>
    </body>
	<script>function alrt(){
   alert("Appointment Successfully Booked.");
};</script>
	
    </html>