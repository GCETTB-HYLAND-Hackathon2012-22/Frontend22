<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2 style="text-align: center;">Register</h2>
	</div>
	<form action="" method="POST">
		<div class="input-group">
			<label for="username">Username :</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label for="first_name">First Name :</label>
			<input type="password" name="password" >
</div>
		<div class="input-group">
		<button class="btn" type="submit" name="log_user">Submit</button>
</div>
<label>
          new user? <strong><a href="registration.php">create your account</a></strong>
      </label>
	</form>
<?php
if (isset($_POST["log_user"])) {

$url = "https://gcettbiaans22.herokuapp.com/api/auth";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
echo $username."<br>".$password;
$data = "username=$username&password=$password&grant_type=password";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
}
?>
</body>
</html>