<?php
  session_start();
?>
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
  background-image: url("images/ambulance.jfif");

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
  <?php
  if(isset($_POST['addmed'])){
    header("Location:inventory.php");

   }
  if(isset($_POST['cancel'])){
    header("Location:welcome.html");

   }

 
  
  
    

  
  ?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <a class="nav-link" href="ambulance.php"><img src= "images/a1.Jfif" width="100" height="70"></img></a> <span class="sr-only">(current)</span></a>
        <a class="navbar-brand" href="#" style = "color: Dodgerblue;"> <h2><font face="Rockwell">SmartHealth Assistance</font></h2></a>
		<ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="images/st.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="80" width="80">
        </a>
      </li>
    </ul>
  
      </nav>

  <form  method="POST">
    <div class="w3-panel w3-pale-green w3-border">
  <br><p><h3>Please Note:</h3>
 <h3>Emergency Request has been sent to Near by Hospital!!!</h3></p>
  
</div>
   
    <div class="form-row">
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-warning" name = "cancel" >Home</button>
        <br>
        <br>
        <br>

       </div>
    </div>
    
  </form>
</div>
</body>
</html>