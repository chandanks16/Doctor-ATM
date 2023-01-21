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
  height: 50%;
}

.bg {
  /* The image used */
  background-image: url("images/register.jpg");

  /* Full height */
  height: 100%;
  /* Center and scale the image nicely */
  background-position:;
  background-repeat: no-repeat;
  background-size: cover;
}
input[type=text]:focus {
  background-color: LightYellow;
}


</style>

 </head>
<body class="bg">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <a class="nav-link" href="ambulance.php"><img src= "images/a1.Jfif" width="100" height="70"></img></a> <span class="sr-only">(current)</span></a>
      <a class="navbar-brand" href="#" style = "color:Dodgerblue;"> <h3><font face="Rockwell">SmartHealth Assistance</h3></a></font>
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

  if(isset($_POST['signup'])){
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctoratm";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname); 
  
  
    $fullname = $_POST['FullName'];
    $mobilenumber = $_POST['MobileNumber'];
    $address = $_POST['Address'];
    $emailid = $_POST['EmailId'];
    $dateofbirth = $_POST['DateOfBirth'];
    $gender = $_POST['Gender'];
    $age = date('Y') - (int) substr($dateofbirth,0,4); 
    $pwd = $_POST['Password'];
    $regnno = 1;
    
    $sql = "SELECT max(regno)  as 'm' FROM regn";
    $result =  $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $regnno =      $row['m'] + 1;
    }
    
    $sql = "INSERT INTO REGN VALUES('$fullname', '$mobilenumber', '$emailid', '$dateofbirth', '$gender', $age, $regnno,'$pwd', '$address')";
   
    
    if($conn->query($sql) === TRUE)
    {
      
        echo '<h3>'.'Your record has been saved successfully'.'</h3><br>';
        echo '<h3>'.'Please note your registration number is : '.$regnno.'</h3>';
        header("refresh:3;url=welcome.html" );
    }
    else{
      echo 'Failed';
    }
    $conn->close();
  }
  
  
  ?>
  <form  method="POST">
    <div class="container" style="margin-top: 50px; margin-left:80px;"><font face="Rockwell" size="3">
    <div><h1><u><font face="Bahnschrift SemiCondensed">New Patient Sign Up</font></u></h1></div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4"><b>Full Name</b></label>
        <input type="text" class="form-control" name="FullName" placeholder="fullname" required autofocus>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4"><b>Mobile Number</b><sup>*</sup></label>
        <input type="number" class="form-control" name="MobileNumber" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4"><b>Address</b></label>
        <input type="text" class="form-control" name="Address" placeholder="Address" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4"><b>Email ID</b><sup>*</sup></label>
        <input type="email" class="form-control" name="EmailId">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4"><b>Date of birth</b><sup>*</sup></label>
        <input type="date" class="form-control" name="DateOfBirth" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4"><b>Gender</b></label> <br>
        <select name="Gender" name="Gender" class="form-control" required>
          <option value="">
            Select
          </option>
          <option value="Male">
            Male
          </option>
          <option value="Female">
            Female
          </option>
          <option value="Other">
            Other
          </option>

        </select>
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-4">
      <label for="inputEmail4"><b>Login Password</b></label> <br>

        <label for="inputEmail4"><b>Enter password</b></label>
        <input type="password" class="form-control" name="Password" required>
      </div>

    </div>
    
    
    
    <div class="form-row">
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-success" name = "signup" > Sign up</button>
        <button type="submit" class="btn btn-warning" onClick="document.location.href='welcome.html';" >Home</button>
        <button  type = "reset" class="btn btn-danger" name = "reset">Reset</button>
       
       </div>
    </div>
    
  </form>

  
</div>
</body>
</html>