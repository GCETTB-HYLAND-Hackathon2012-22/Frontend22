<?php
// session_start();
// include('location2.php');
$long=$_POST['longitude'];
$lat=$_POST['latitude'];
// echo "lat =".$lat;



$url = "http://gcettbiaans22.herokuapp.com/api/doctors?lat=$lat&long=$long";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);
$obj=json_decode($resp);
$obj1=$obj[0];
$doc_name1=$obj1->user_obj->first_name." ".$obj1->user_obj->last_name;
$doc_spec1=$obj1->specialization;
$doc_fee1=$obj1->fees;
$doc_city1=$obj1->chamber_city;
// $address1=$obj1->vendor_obj->city_or_village_name.", ".$obj1->vendor_obj->district.", ".$obj1->vendor_obj->state.", ".$obj1->vendor_obj->country;
// $contact1=$obj1->vendor_obj->wp_no." / ".$obj1->vendor_obj->store_contact_no;
// echo "Store name : ".$store1."<br>Store address : ".$address1."<br>Contact No. : ".$contact1;

// $_SESSION['store']=$store1;
// $_SESSION['address']=$address1;
// $_SESSION['contact']=$contact1;
// header('location:appointment.php');
// echo("<script>location.href = "."'appointment.php';</script>");
?>
