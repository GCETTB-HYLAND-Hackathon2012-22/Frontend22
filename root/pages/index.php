<?php
session_start();
$code= $_SESSION['code'];
// echo $code;
$temp="";
for($i=1;$i<=125;$i++){
    $temp.=$code[$i+16];
}
//  echo $temp."<br>" ;

$url = "https://gcettbiaans22.herokuapp.com/api/users/me";

 

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer ".$temp,
   "Accept: application/json"
);
// $headers=array($code);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

 

$resp = curl_exec($curl);
curl_close($curl);
$obj=json_decode($resp);
$username=$obj->user_id;
$name=$obj->first_name." ".$obj->last_name;
echo "Welcome ". $name;

 

?>