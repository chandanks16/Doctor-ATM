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

    <title>Doctor's A T M</title>
    <style>
body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("images/otp.jfif");
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
  <form  method="POST"  >
    <div class="container" style="margin-top: 50px;">
    <div><h3 style="color:black" >There are no medicines available for this category.</h3></div>
   
    <div class="form-row">
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary" name = "addmed"> Add Medicine</button>
        <button type="submit" class="btn btn-warning" name = "cancel" >Cancel</button>
        <br>
        <br>
        <br>

       </div>
    </div>
    
  </form>
  
</div>
</body>
</html>