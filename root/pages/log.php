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
    	<title>Log In</title>
    	<link rel="stylesheet" type="text/css" href="./../css/reg.css">
    </head>
    <body>
    
    	<div class="header">
    		<h2 style="text-align: center;">Log In</h2>
    	</div>
    	<form action="" method="POST">
    		<div class="input-group">
    			<label for="username">Username :</label>
    			<input type="text" name="username" >
    		</div>
    		<div class="input-group">
    			<label for="first_name">Password :</label>
    			<input type="password" name="password" >
    </div>
    		<div class="input-group">
    		<button class="btn" type="submit" name="log_user">Submit</button>
    </div>
    <label>
              <b>New User?</b> <strong><a href="./reg.php">Create New Account</a></strong>
          </label>
    	</form>
    <?php
if (isset($_POST["log_user"])) {
// 	session_start();
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
// echo $username."<br>".$password;
$data = "username=$username&password=$password&grant_type=password";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
$obj=json_decode($resp);
$detail=$obj->detail;
echo "<br><h3 align ='center'>".$detail."</h3>";
// $_SESSION['code']=$resp;
// header('location:index.php');
}
?>
    </body>
    </html>
