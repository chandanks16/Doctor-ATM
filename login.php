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
  background-image: url("images/login.jpg");

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
      <a class="navbar-brand" href="#" style = "color:Dodgerblue;"> <h2><font face="Rockwell">SmartHealth Assistance</h2></a></font>
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
  if(isset($_POST['login'])){
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctoratm";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $regnno = $_POST['RegnNo'];
    $pwd = $_POST['Password'];
    
    $sql = 'SELECT * FROM regn where regno ='.$regnno;
   
    $result =  $conn->query($sql);
  $row = $result->fetch_assoc() ;
  
       if($row['regno'] != (int)$regnno || $row['password'] != $pwd){
       echo '<h2><i>Regn Number or password entered in incorrect!!</i></h2>';
   }
   else
   {
    echo '<h2>Login Successfull....</h2>';
    if ((int) $row['regnno'] <= 10)
    {
    // header("refresh:3;url=select.php" );
  
    $_SESSION['regnno']  = (int) $row['regno'];
    $_SESSION['age']  = $row['age'];
    header("Location:select.php");
    
    }
 
  }
  
    
}
  
  ?>
  <form  method="POST"  >
    <div class="container" style="margin-top: 50px;">
    <div><h3 style="color:purple" ><font face="Bahnschrift" size="6"><u>Login</u></h3></div></font>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4" style="color:blue"><font face="Rockwell" size="4">Enter your Registration number</label></font>
        <input type="number" class="form-control" name="RegnNo" placeholder="Enter Reg no"  required autofocus>
      </div>
      <div class="form-group col-md-4" style="color:blue" >
        <label for="inputPassword4"><font face="Rockwell" size="4">Enter your password</label>
        <input type="password" class="form-control" name="Password" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary" name = "login"> Login</button>
        <button type="submit" class="btn btn-warning" onClick="document.location.href='welcome.html';" >Home</button>
        <button  type = "reset" class="btn btn-danger" name = "reset">Clear</button>
        <br>
        <br>
        <br>
        <div style="background-color:white">
        <a href="otp.php"><b>Forgot password...</a> <br>
        <a href="Registration.php" style="color:grey" > Click here for New User</a>
        </div>
       </div>
    </div>
	
    
  </form>
  
</div>
</body>
</html>