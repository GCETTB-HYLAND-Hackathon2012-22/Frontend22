<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./../data/favicon.ico">
	
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="./../css/reg.css">
</head>
<body>

	<div class="header">
		<h2 style="text-align: center;">Register</h2>
	</div>
	<form action="" method="POST">
	    <input type="hidden" name="longitude" id="getlon" />
            <input type="hidden" name="latitude" id="getlat" />
		<div class="input-group">
			<label for="username">Username :</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label for="first_name">First Name :</label>
			<input type="text" name="first_name" required>
		</div>
		<div class="input-group">
			<label for="last_name">Last Name :</label>
			<input type="text" name="last_name" required>
		</div>
		<div class="input-group">
			<label for="email">Email Id :</label>
			<input type="email" name="email" required>
		</div>
        <div class="input-group">
			<label for="start">Date of Birth :</label>
<input type="date" id="start" name="date"
       value=""
       min="1921-01-01" max="2021-01-01" required>
		</div>
        <div class="input-group">
			<label for="pin">PIN Code :</label>
			<input type="text" maxlength= 6 name="pin" required>
		</div>
        
        <div class="input-group">
			<label for="contact">Contact No :</label>
			<input type="text" pattern="[1-9]{1}[0-9]{9}" maxlength= 10 title="Only 10 digit numeric characters are allowed, starting with non zero" name="contact" required>
		</div>
        <div class="input-group">
			<label for="password">Enter Password :</label>
			<input type="password" name="password" required>
		</div>
		<div class="input-group">
		    <button class="btn" type="submit" name="reg_user">Submit</button>
        </div>
         <p>Already have an account? <a href="login.php">Login here</a>.</p>
	</form>
	<script>
    document.addEventListener('DOMContentLoaded', () => {
    pageLoad();
});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, positionError);
    }
}

function showPosition(position) {
    console.log(position);
    document.getElementById('getlat').value = position.coords.latitude;
    document.getElementById('getlon').value = position.coords.longitude;
    lon = document.getElementById('getlon').value;
    lat = document.getElementById('getlat').value;

    document.frm1.submit(); // here the form is submit
}

function positionError(error) {
    if (error.PERMISSION_DENIED) alert('Please accept geolocation');
    hideLoadingDiv();
    showError('Geolocation is not enabled. Please enable to use this feature');
}

function pageLoad() {
    getLocation();
}
        </script>
    <?php
    if (isset($_POST["reg_user"])) {

 

$url = "https://gcettbiaans22.herokuapp.com/api/register";

 

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

 

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

 $username=$_REQUEST['username'];
 $first=$_REQUEST['first_name'];
$last=$_REQUEST['last_name'];
$email=$_REQUEST['email'];
$date=$_REQUEST['date'];
$pin= $_REQUEST['pin'];
$contact= $_REQUEST['contact'];
$password=$_REQUEST['password'];
$lon=$_REQUEST['longitude'];
$lat=$_REQUEST['latitude'];
$data = <<<DATA
{
  "user_id": "$username",
  "first_name":  "$first",
  "last_name": "$last",
  "email_id": "$email",
  "dob": "$date",
  "pin": $pin,
  "contact_no":$contact,
  "password": "$password",
  "latitude" : $lat,
  "longitude": $lon
}
DATA;

 

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

 

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

 

$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);

	echo "<script>location.href = "."'confrm.php';</script>";
}

?>
</body>
</html>
