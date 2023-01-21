<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Doctor's A T M</title>
    <style>
                body, html {
                height: 100%;
                }

                .bg {
                        /* The image used */
                        background-image: url("images/select.jpg");

                        /* Full height */
                        height: 100%;

                        /* Center and scale the image nicely */
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    }
				
    </style>
 </head>
<body class="bg">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <a class="nav-link" href="ambulance.php"><img src= "images/a1.Jfif" width="100" height="70"></img></a> <span class="sr-only">(current)</span></a>
        <a class="navbar-brand" href="#" style = "color: Dodgerblue;"><font face="Rockwell"><h2>SmartHealth Assistance</font></h2></a>
		<ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="images/st.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="80" width="80"></img>
        </a>
      </li>
    </ul>
  
      </nav>

<?php
session_start();



?>
<form method = "post">
   <div class="w3-container" style="margin-top: 70px; margin-left:90px;">
   <div class="row">
  
  <div class="w3-display-container w3-hover-opacity" style="width:30%">
    <img src="images/throat1.jpg" alt="Avatar" width = "400px" height="220px">
    <div class="w3-display-middle w3-display-hover w3-xxlarge">
      <button class="w3-button w3-aqua" name="1">ThroatPain</button>
    </div>
  </div>
  <div class="w3-display-container w3-hover-opacity" style="width:30%">
    <img src="images/allergies1.jpg" alt="Avatar" width = "400px" height="220px">
    <div class="w3-display-middle w3-display-hover w3-xxlarge">
      <button class="w3-button w3-purple" name="2">Allergies</button>
	  </div>
</div>
<div class="w3-display-container w3-hover-opacity" style="width:30%">
    <img src="images/monsoon.png" alt="Avatar" width = "400px" height="220px">
    <div class="w3-display-middle w3-display-hover w3-xxlarge">
      <button class="w3-button w3-orange" name="3">Mansoon</button>
	  </div>
</div>
</div>
<div class="row">
<div class="w3-display-container w3-hover-opacity" style="width:30%">
    <img src="images/Injuries.jpg" alt="Avatar" width = "400px" height="220px">
    <div class="w3-display-middle w3-display-hover w3-xxlarge">
      <button class="w3-button w3-yellow" name="4" >Injuries</button>
	  </div>
</div>
<div class="w3-display-container w3-hover-opacity" style="width:30%">
    <img src="images/heart2.jpg" alt="Avatar" width = "400px" height="220px">
    <div class="w3-display-middle w3-display-hover w3-xxlarge">
      <button class="w3-button w3-red" name="5" >Heart</button>
	  </div>
</div>
<div class="w3-display-container w3-hover-opacity" style="width:30%">
    <img src="images/pains.jpg" alt="Avatar" width = "400px" height="220px">
    <div class="w3-display-middle w3-display-hover w3-xxlarge">
      <button class="w3-button w3-blue" name="6">Pains</button>
	  </div>
</div>
</div>
</div>
 <div class="row" style="margin-left:90px;">
               <div >
                     
                      <button class = "btn btn-warning" name= "cancel" >Home</button>  
               </div>
           </div>      
               
</form>
<?php


if(isset($_POST['cancel'])){
     
    header("Location:welcome.html");
}

if(isset($_POST['1'])){
     
    $_SESSION['maincat'] = "Throat";
    header("Location:select2.php");
}

if(isset($_POST['2'])){
    $_SESSION['maincat'] = "Allergies";
    header("Location:select2.php");
}

if(isset($_POST['3'])){
     $_SESSION['maincat'] = "Monsoon";
    header("Location:select2.php");
}

if(isset($_POST['4'])){
     $_SESSION['maincat'] = "Injuries";
    header("Location:select2.php");
}

if(isset($_POST['5'])){
     $_SESSION['maincat'] = "Heart";
    header("Location:select2.php");
}

if(isset($_POST['6'])){
     $_SESSION['maincat'] = "Pains";
    header("Location:select2.php");
}
?>
</body>
</html>