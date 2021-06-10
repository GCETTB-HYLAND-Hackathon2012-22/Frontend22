<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>COVID Virus Detector</title>
  </head>
  <body>
        <div class="container">
          <u>
            <h2 class="text-center mt-3">COVID-19 Possibility Detector Form</h2></u>
        </div>
        <form style="margin-left: 200px; margin-right: 200px;"  method="POST" >
        <div class="form-group">
          <label for="Name">Patient's Name</label>
          <input type="text" class="form-control" id="Name" name="Name" placeholder="Name Surname">
        </div>
        
        <div class="form-group">
                    <label for="DiffBreath">Breathing Difficulty</label>
                    <select class="form-control" id="DiffBreath" name="breath" placeholder="Having difficulty in Breathing?">
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                      </select>
                      </div>
        <div class="form-group">
          <label for="Fever">Fever</label>
          <select class="form-control" id="Fever" name="fever" >
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Cough">Cough</label>
          <select class="form-control" id="Cough" name="cough" placeholder="Have cough?">
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Sore_Throat">Sore Throat</label>
          <select class="form-control" id="Sore_Throat" name="throat">
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select>
            </div>
        <div class="form-group">
          <label for="TravelHistory">Travel History</label>
          <select class="form-control" id="TravelHistory" name="travel" placeholder="Any recent travel history from another state or country?">
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select>
            </div>
        <div class="form-group">
            <label for="contact">Contact with covid patient</label>
            <select class="form-control" id="contact" name="contact">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
        
            <div class="form-group">
                <label for="Gathering">Attended large gathering</label>
                <select class="form-control" id="Gathering" name="gather" >
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                  </select>
                  </div>
                  
            <button class="btn btn-primary" name="check" type="submit">Check</button>
      </form>
<?php
    if (isset($_POST["check"])) {

 
        
$url = "https://gcettbiaans22.herokuapp.com/api/covi_checker";

 

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

 

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$patient=$_POST['Name'];
 $breath=$_POST['breath'];
 $fever=$_POST['fever'];
$cough=$_POST['cough'];
$throat=$_POST['throat'];
$travel=$_POST['travel'];
$contact= $_POST['contact'];
$gather= $_POST['gather'];
$data = <<<DATA
{
    "breathing_problem": $breath,
    "fever": $fever,
    "dry_cough": $cough,
    "sore_throat":$throat,
    "abroad_travel": $travel,
    "contact_with_covid_patient": $contact,
    "attended_large_gathering": $gather
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
$result=$obj->result;

// echo $patient."<br>".$result;
$_SESSION['name']=$patient;
$_SESSION['res']=$result;
// header("location:result.php", true, 301);
// exit();
echo("<script>location.href = 'result.php';</script>");
}
?>
</body>
</html>