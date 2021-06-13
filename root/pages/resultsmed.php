<?php
// session_start();
// include('location2.php');
$long=$_POST['longitude'];
$lat=$_POST['latitude'];
// echo "lat =".$lat;



$url = "http://gcettbiaans22.herokuapp.com/api/medicine?lat=$lat&long=$long";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
$obj=json_decode($resp);
$obj1=$obj[0];
$store_name1=$obj1->vendor_obj->store_name;
$store_add1=$obj1->vendor_obj->city_or_village_name.", ".$obj1->vendor_obj->district.", ".$obj1->vendor_obj->state."-".$obj1->vendor_obj->user_obj->pin;
$store_contact1=$obj1->vendor_obj->store_contact_no;
// echo $store_name1;
// echo $store_add1;
// $_SESSION['store']=$store1;
// $_SESSION['address']=$address1;
// $_SESSION['contact']=$contact1;
// header('location:appointment.php');
// echo("<script>location.href = "."'appointment.php';</script>");
?>
