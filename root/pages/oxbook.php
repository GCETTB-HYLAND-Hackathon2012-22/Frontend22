<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Book Oxygen</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./../data/favicon.ico">
	
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    	<title>Book Oxygen</title>
    	<link rel="stylesheet" type="text/css" href="./../css/oxbook.css">
    </head>
    <body>
    
    	<div class="header">
    		<h2 style="text-align: center;"><b>Oxygen Booking</b></h2>
    	</div>
		
    	<form action="" method="POST">
    		<div class="input-group">
    			<label for="firstame"><b>First Name : </b></label>
    			<input type="text" name="firstame" >
    		</div>
			
			<div class="input-group">
    			<label for="lastame"><b>Last Name : </b></label>
    			<input type="text" name="lastame" >
    		</div>
			
    		<div class="input-group">
    			<label for="age"><b>Age : </b></label>
    			<input type="number" name="age" >
			</div>
			
			<div class="input-group">
    			<label for="mobile"><b>Mobile No : </b></label>
				<input type="number" name="mobile" >
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
				
			<div class="hz">
				<label for="covid"><b>COVID Status : </b></label>
				<div class="opt">
			    <input type="radio" id="positive" name="covid" value="positive">
				<label for="positive">Positive</label>
				</div>
				<div class="opt">
				<input type="radio" id="negative" name="covid" value="negative">
				<label for="negative">Negative</label>
				</div>
				<div class="opt">
				<input type="radio" id="unknown" name="covid" value="unknown">
				<label for="unknown">Unknown</label></div><br>
			<div>
				
			<div class="form-group">
				<label for="covid-report"><b>Covid Report : </b></label>
				<input type="file" class="report" id="covid-report">
			</div>
			
			<div class="form-group">
				<label for="xray-report"><b>X-Ray Image (pdf/image) : </b></label>
				<input type="file" class="report" id="xray-report">
			</div>
				
			<div class="form-group">
				<label for="other"><b>Have any of the following ? : </b></label><br>
				<div class="chk">
			    <input type="checkbox" id="asthma" name="other" value="asthma">
				<label for="asthma">Asthma</label><br>
				<input type="checkbox" id="other" name="other" value="pneumonia">
				<label for="pneumonia">Pneumonia</label><br>
				<input type="checkbox" id="breathe" name="other" value="breathe">
				<label for="breathe">Breathing Problems</label></div><br>
			<div>	
			
			<div class="input-group">
    			<label for="quantity"><b>Quantity : </b></label>
    			<select id="quantity" name="quantity">
					<option value=1>1</option>
					<option value=2>2</option>
					<option value=3>3</option>
					<option value=4>4</option>
					<option value=5>5</option>
				</select>
			</div>
			
			
			<div class="input-group">
				<div id="upp">
    			<label for="address"><b>Address : </b></label>
    			<input type="text" name="address" >
				</div>
    		</div>
			
			<div class="input-group">
    			<label for="PIN"><b>PIN No. : </b></label>
    			<input type="number" name="PIN">
			</div>
			
    		<div class="input-group">
				<button class="btn" type="submit" name="log_user"><b>Order Now</b></button>
			</div>

    	</form>

    </body>
	
    </html>
