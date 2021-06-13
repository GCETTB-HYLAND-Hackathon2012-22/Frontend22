<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Order Medicine</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./../data/favicon.ico">
	
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    	<title>Order Medicine</title>
    	<link rel="stylesheet" type="text/css" href="./../css/oxbook.css">
    </head>
    <body>
    
    	<div class="header">
    		<h2 style="text-align: center;"><b>Order Medicine</b></h2>
    	</div>
		
    	<form action="index2.php" method="POST">
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
    			<input type="number" maxlength= 3 name="age" required>
			</div>
			
			<div class="input-group">
    			<label for="mobile"><b>Mobile No : </b></label>
				<input type="number" name="mobile" required>
			</div>
			
			<div class="input-group">
    			<label for="med"><b>Medicine Name : </b></label>
    			<input type="text" name="med" required>
    		</div>
				
			
				
			<div class="form-group">
				<label for="xray-report"><b>Prescription:</b></label>
				<input type="file" class="report" id="xray-report" >
			</div>
			
			
			
			<div class="input-group">
				<div id="upp">
    			<label for="address"><b>Address : </b></label>
    			<input type="text" name="address" required>
				</div>
    		</div>
			
			<div class="input-group">
    			<label for="PIN"><b>PIN Code. : </b></label>
    			<input type="number" maxlength= 6 name="PIN" required>
			</div>
			
    		<div class="input-group">
				<button class="btn" type="submit" onclick="alrt()" name="log_user"><b>Order Now</b></button>
			</div>

    	</form>
//     	<?php
//     // 	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    	
// if($httpcode==200){
// 			echo("<script>location.href = "."'index2.php';</script>");
// 		}; ?>

    </body>
	
	<script>function alrt(){
   alert("Medicine Order Successful. Thank you for Ordering");
};</script>


	
	
    </html>