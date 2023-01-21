<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		 <style>
body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("images/otp1.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
input[type=number]:focus {
  background-color: LightYellow;
}

</style>
		
</head>
<body class="bg">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <a class="nav-link" href="ambulance.php"><img src= "images/a1.Jfif" width="100" height="70"></img></a> <span class="sr-only">(current)</span></a>
      <a class="navbar-brand" href="#" style = "color: dodgerblue;"> <h2><font face="Rockwell">SmartHealth Assistance</font></h2></a>
	  <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="images/st.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="80" width="80">
        </a>
      </li>
    </ul>

    </nav>

<?php

session_start();

if (isset($_POST['login'] ))
{
	
	//enableotp

//$x  =  "http://2factor.in/API/V1/f98940f9-3684-11ea-9fa5-0200cd936042/SMS/VERIFY/".$_SESSION['d']."/". $_POST['otptxt'];
 $x  =  "http://2factor.in/API/V1/f179143b-2e16-11ea-9fa5-0200cd936042/SMS/VERIFY/".$_SESSION['d']."/". $_POST['otptxt'];






$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => $x,
     CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo 'System error!!! Please check if your phone number is correct!!!';
  // echo "cURL Error #:" . $err;
} else {

  $obj = json_decode($response); 
  if ($obj->{"Status"} == "Success")
  {
    echo "<h5>Please note your password :</h5> ".$_SESSION['p'];
    
  }
  else
  {
    echo  '<h4>Sorry! the OTP entered did not match...please try again!</h4>';
  }
}

}
?>

<div class="container" style="margin-top: 70px;">


<form method="post">
<font face="TimesNewRoman" color="black" size="5"><b>Enter OTP:</font>
<input type="number" name = "otptxt" required autofocus>
<button type = "submit" name = "login" class="btn btn-warning"> OK </button>
<button  name = "cancel" onClick="document.location.href='welcome.html';" class="btn btn-danger">Home</button><br><br><br><br>

</form>
</div>
</body>
<html>



