<?php
session_start();
?>
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
    		<div class="input-group1">
    			<label for="firstame"><b>First Name : </b></label>
    			<input type="text" name="firstame" required>
    		</div>
			
			<div class="input-group1">
    			<label for="lastame"><b>Last Name : </b></label>
    			<input type="text" name="lastame" required>
    		</div>
			
    		<div class="input-group1">
    			<label for="age"><b>Age : </b></label><br>
    			<input style="width:20%" type="number" name="age" max="130" required>
			</div>
	
			<div class="input-group1">
    			<label for="mobile"><b>Mobile No : </b></label>
				<input type="number" name="mobile" required>
			</div>
			<br>
			
			<div class="hz">
				<label for="gender"><b>Gender :  </b></label>
				<div class="opt">
			    <input type="radio" id="male" name="gender" value="1">
				<label for="male">Male</label>
				</div>
				<div class="opt">
				<input type="radio" id="female" name="gender" value="2">
				<label for="female">Female</label>
				</div>
				<div class="opt">
				<input type="radio" id="other" name="gender" value="3">
				<label for="other">Other</label></div><br>
			</div>
				
			
			
			<div class="form-group1">
				<label for="xray-report"><b>X-Ray Image (Optional) : </b></label>
				<input type="file" class="report"  id="xray-report">
			</div>
			<br>
				
			<div class="hz" style="width:50rem;margin-top:2%">
			 <div class="kkk">
				<label for="other"><b>Have any of the following ? : </b></label><br>
				<div class="chk">
				
				<input type="hidden" id="asthma" name="asthma" value="0">
			    <input type="checkbox" id="asthma" name="asthma" value="1">
				<label for="asthma">Asthma</label><br>
				<input type="hidden" id="pneumonia" name="pneumonia" value="0">
				<input type="checkbox" id="pneumonia" name="pneumonia" value="1">
				<label for="pneumonia">Pneumonia</label><br>
				<input type="hidden" id="lung" name="lung" value="0">
				<input type="checkbox" id="lung" name="lung" value="1">
				<label for="lung">Other Lung Disease</label><br>
			</div>	
			</div>
			
			
			<div class="kkk" style="margin-right:0">
				<label for="other"><b>Applicable for You? : </b></label><br>
			<div class="chk" style="display:inline-block;margin-right:20px">
			<input type="hidden" id="breath" name="breath" value="0">
				<input type="checkbox" id="breath" name="breath" value="1">
				<label for="breath">Breathing Difficulty</label><br>
				<input type="hidden" id="fever" name="fever" value="0">
			    <input type="checkbox" id="fever" name="fever" value="1">
				<label for="fever">Fever</label><br>
				<input type="hidden" id="cough" name="cough" value="0">
				<input type="checkbox" id="cough" name="cough" value="1">
				<label for="cough">Cough</label><br>
				<input type="hidden" id="throat" name="throat" value="0">
				<input type="checkbox" id="throat" name="throat" value="1">
				<label for="throat">Sore Throat</label>
				<br>
				</div>
			
			
			<div class="chk" style="display:inline-block">
			<input type="hidden" id="chest" name="chest" value="0">
				<input type="checkbox" id="chest" name="chest" value="1">
				<label for="chest">Chest Pain</label><br>
				<input type="hidden" id="contactwith" name="contactwith" value="0">
				<input type="checkbox" id="contactwith" name="contactwith" value="1">
				<label for="contactwith">Contact with Covid Patient</label><br>
				<input type="hidden" id="history" name="history" value="0">
			    <input type="checkbox" id="history" name="history" value="1">
				<label for="history">Travel History</label><br>
				<input type="hidden" id="gather" name="gather"value="0" >
				<input type="checkbox" id="gather" name="gather"value="1" >
				<label for="gather">Attended Large Gathering</label><br>
				</div>
				</div>
			</div>
			<button style="margin-top:0" onclick="checkCheckbox()" class="btn" type="submit" name="bt" value="search"><b>Check</b></button>
			
</form>
<script>
	function checkCheckbox() { 
</script>
			<?php
			if($_SERVER['REQUEST_METHOD']=='POST' && $_REQUEST['bt']=="search")
		
		 {
		
		$url = "https://gcettbiaans22.herokuapp.com/api/oxygen/max";
		
		 
		
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		
		 
		
		$headers = array(
		   "Accept: application/json",
		   "Content-Type: application/json",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		
		$age=$_REQUEST['age'];
		$gender=$_REQUEST['gender'];
		$asthma=$_REQUEST['asthma'];
		$pneumonia=$_REQUEST['pneumonia'];
		$other=$_REQUEST['lung'];
		$breathing= $_REQUEST['breath'];
		$fever= $_REQUEST['fever'];
		$cough=$_REQUEST['cough'];
		$throat=$_REQUEST['throat'];
		$chest=$_REQUEST['chest'];
		$contactwith=$_REQUEST['contactwith'];
		$travel=$_REQUEST['history'];
		$gather=$_REQUEST['gather'];

		$data = <<<DATA
		{
		  "age": $age,
		  "gender":  $gender,
		  "asthma": $asthma,
		  "pneumonia": $pneumonia,
		  "other_lung_disease": $other,
		  "breathing_difficulty": $breathing,
		  "fever":$fever,
		  "cough": $cough,
		  "sore_throat" : $throat,
		  "chest_pain": $chest,
		  "contact_with_covid_patient":$contactwith,
		  "travel_history":$travel,
		  "attended_large_gathering":$gather
		}
		
DATA;

		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		
		 
		
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		
		 
		
		$resp = curl_exec($curl);
		curl_close($curl);
		// var_dump($resp);
		$obj=json_decode($resp);
		$mx=$obj->max_limit;
		// echo("<script>location.href = "."'login.php';</script>");
		echo "<script>alert('You maximum limit of oredering oxygen is '.$mx);</script>";
		}
			
			
			?>
			
			<form action="" method="POST">
			<br>
			
			<div class="input-group1">
    			<label for="quantity"><b>Quantity: </b></label>
				<input style="width:12%" type="number" maxlength="2" name="quantity" max="<?php echo $mx?>" required>
			</div>
			
			<div class="input-group1">
    			<label for="PIN"><b>PIN Code : </b></label>
    			<input style="width:25%" type="number" name="pin" max="999999" required>
			</div>
			
			
			<br>
			
			
			
			<div class="input-group1" style="margin-bottom:0px">
				<div id="upp">
    			<label for="address"><b>Address : </b></label>
    			<input style="width:300%;margin-bottom:0" type="text" name="address" required>
				</div>
    		</div>
			
			
			
    		<div class="input-group">
				<button style="margin-top:0" class="btn" type="submit" name="bt" value="submit"><b>Order Now</b></button>
			</div>

    	</form>
    	
		<?php
			if($_SERVER['REQUEST_METHOD']=="POST" && $_REQUEST['bt']=="submit"){
				$url = "https://gcettbiaans22.herokuapp.com/api/order/oxygen";
		
		 
		
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		
		 
		
		$headers = array(
		   "Accept: application/json",
		   "Content-Type: application/json",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		
		$user_id=$_SESSION['user_name'];
		$store_id=$_SESSION['storeid'];
		$prod_price=$_SESSION['prodprice'];
		$prod_id=$_SESSION['prodidid'];
		$date=date("Y-m-d");
		$quant=$_REQUEST['quantity'];
		$address=$_REQUEST['address'].", PIN = ".$_REQUEST['pin'];
		echo $user_id."<br>".$store_id."<br>".$prod_price."<br>".$date."<br>".$quant."<br>".$address;
		$data = <<<DATA
		{
			"user_id": "$user_id",
			"store_id": "$store_id",
			"product_id": "$prod_id",
			"price": $prod_price,
			"date_of_delivery": "2021-06-12",
			"quantity": 0,
			"address": "$address"
		}
DATA;
		
		 
		
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		
		 
		
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		
		 
		
		$resp = curl_exec($curl);
		$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close($curl);
		// echo $httpcode;
		if($httpcode==200){
			echo "<script>alert('Oxygen booked successfully');</script>";
			echo("<script>location.href = "."'index2.php';</script>");
		}
		else{
			echo "<script>alert('Your order placing is failed. Please try again');</script>";
		}
		// var_dump($resp);
		// $obj=json_decode($resp);
		// $mx=$obj->;
		 
		
			}
			
			?>
    </body>
	
    </html>
