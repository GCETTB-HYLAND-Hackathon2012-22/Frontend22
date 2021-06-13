<?php
session_start();
// include('location2.php');
$long=$_POST['longitude'];
$lat=$_POST['latitude'];
// echo "lat =".$lat;



$url = "http://gcettbiaans22.herokuapp.com/api/oxygen?lat=$lat&long=$long";
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
$store1=$obj1->vendor_obj->store_name;
$user_id=$obj1->user_obj->user_id;
$prod_id1=$obj1->product_id;
$store_id1=$obj1->store_id;
$prod_price1=$obj1->price;
$address1=$obj1->vendor_obj->city_or_village_name.", ".$obj1->vendor_obj->district.", ".$obj1->vendor_obj->state.", ".$obj1->vendor_obj->country;
$contact1=$obj1->vendor_obj->wp_no." / ".$obj1->vendor_obj->store_contact_no;
// echo "Store name : ".$store1."<br>Store address : ".$address1."<br>Contact No. : ".$contact1;

// string(542) "[{"product_id":"oxy","store_id":"hit_store","vendor_obj":{"user_obj":{"user_id":"hit","first_name":"Raktim","last_name":"Das","email_id":"raktimdas2223@gmail.com","dob":"2001-04-30","pin":721134,"contact_no":5566576767,"is_active":true,"is_confirmed":true},"store_name":"HitStore","country":"India","state":"WB","district":"Paschim Burdwan","city_or_village_name":"Durgapur","store_contact_no":12345,"wp_no":54321,"delivery_capacity":500},"store_name":"HitStore","quantity":50,"price":5000,"delivery_eta":"2021-07-15","feedback":"Test Data"}]" 
$_SESSION['store']=$store1;
$_SESSION['address']=$address1;
$_SESSION['contact']=$contact1;
$_SESSION['storeid']=$store_id1;
$_SESSION['prodprice']=$prod_price1;
$_SESSION['prodidid']=$prod_id1;

// header('location:oxygen.php');
echo("<script>location.href = "."'oxygen.php';</script>");
?>
