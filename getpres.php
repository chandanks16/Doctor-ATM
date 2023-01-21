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
  background-image: url("images/pres1.jpg");
  /* Full height */
  height: 100%;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}


</style>
</head>

<body class="bg" >

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

<form  method="POST"  >
    <div class="container" style="margin-top: 60px;margin-left:100px;"><font face="Rockwell">
    <div><h3 style="color:black" >Login</h3></div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4" style="color:DarkRed"><b><h5>Enter your registration number</h5></b></label>
        <input type="number" class="form-control" name="RegnNo" required autofocus>
      </div>
      <div class="form-group col-md-4" style="color:DarkRed" >
        <label for="inputPassword4"><b><h5>Enter date</h5></b></label>
        <input type="date" class="form-control" name="date" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary" name = "login"> Get Records</button>
        <button  class="btn btn-warning" name = "cancel" onClick="document.location.href='welcome.html';" >Home</button>
        <br>
        <br>
        <br>
        
       </div>
	   
    </div>
	</font>
	
    
  </form>
</div>
 <?php

if(isset($_POST['cancel'])){
    header("Location:welcome.html");  
}

  if(isset($_POST['login'])){
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctoratm";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $regnno = $_POST['RegnNo'];
    $dt = $_POST['date'];
    
    
    $sql = "SELECT * FROM records where regno =".$regnno." and date ='$dt'";
    
     $result =  $conn->query($sql);
    echo " <div class = 'center'style='margin-top:50px'>";
    if ($result -> num_rows > 0)
     {  
         echo "<table><tr><td>Consultation Date</td><td>Regn Number</td><td>Main Category</td><td>Sub Category</td> <td>Symptoms</td> <td>Medicine</td></tr>";
        while ($row  = $result->fetch_assoc()){            
        echo "<tr><td>".$row['date'];
        echo "<td>".$row['regno'];
        echo "<td>".$row['maincat'];
        echo "<td>".$row['subcat'];
        echo "<td>".$row['symptom'];
        echo "<td>".$row['medicine'];
        echo "</td> </tr>";
      }
      echo "</table>";
        
    }
    else
     {
         echo 'Records not found! Check Regn# or date again!';
     }
    
    echo "</div>";    
}
?>

</body>
</html>