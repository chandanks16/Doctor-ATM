<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
	body, html {
  height: 50%;
}

.bg {
  /* The image used */
  background-image: url("images/3.jpg");

  /* Full height */
  height: 100%;
  /* Center and scale the image nicely */
  background-position:;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body class="bg">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <a class="nav-link" href="ambulance.php"><img src= "images/a1.Jfif" width="100" height="70"></img></a> <span class="sr-only">(current)</span></a>
        <a class="navbar-brand" href="#" style = "color: Dodgerblue;"> <h2><font face="Rockwell">SmartHealth Assistance</h2></a></font>
		<ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="images/st.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="80" width="80">
        </a>
      </li>
    </ul>
  
      </nav>
	  <div class="container" style="margin-top: 60px;"><font face="Rockwell" size="5">
	  <h3>Login to Enter the Stock of Medicine data Entry</h3>
	  <br><br>Enter Admin Pin...
<input type="password" name = "pin" required>
<button type = "submit" class="btn btn-primary" name = "login" onClick="document.location.href='inventory.php';">Next </button>
<button  name = "cancel" class="btn btn-warning" onClick="document.location.href='welcome.html';">cancel</button><br><br><br><br>
<?php


if(isset($_POST['login']))
{
  $t  = 'table';


    if($_POST['pin'] == "224466"){

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "doctoratm";
                    $conn = new mysqli($servername, $username, $password, $dbname);
	}
                else{
                    echo 'Invalid admin pin! Please try again';
}
}	
?>
