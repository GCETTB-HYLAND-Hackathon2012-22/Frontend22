<?php
// include('resultsmed.php');
session_start();
?>
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

			if(isset($_POST['log_user'])){
				$url = "https://gcettbiaans22.herokuapp.com/api/order/medicine";
		
		 
		
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
		$date=date("Y-m-d");
		$store_id1=$_SESSION['medstoreid1'];
        $store_prod1=$_SESSION['medstoreprodid1'];
		// $store_id=$_SESSION['storeid'];
		// $prod_price=$_SESSION['prodprice'];
		// $prod_id=$_SESSION['prodidid'];
		// $date=date("Y-m-d");
		// $quant=$_REQUEST['quantity'];
		// $address=$_REQUEST['address'].", PIN = ".$_REQUEST['pin'];
		// echo $user_id."<br>".$store_id."<br>".$prod_price."<br>".$date."<br>".$quant."<br>".$address;
		$data = <<<DATA
		{
			"user_id": "$user_id;",
  "store_id": "$store_id1",
  "product_id": "$store_prod1",
  "date_of_purchase": "$date";
		}
DATA;
// "user_id": "string",
// "store_id": "string",
// "product_id": "string",
// "date_of_purchase": "2021-06-13",
// "bill_id": "string"

		 
		
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
	
	<script>function alrt(){
   alert("Medicine Order Successful. Thank you for Ordering");
};</script>


	
	
    </html>