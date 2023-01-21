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
  background-image: url("images/subcat1.jpg");
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
        <a class="navbar-brand" href="#" style = "color: Dodgerblue;"> <h3><font face="Rockwell">SmartHealth Assistance</h3></a></font>
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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctoratm";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select distinct subcat from medicine where maincat ='".$_SESSION['maincat']."'";
$result =  $conn->query($sql);
?>
<form action="#" method="post">
<div class="container" style="margin-top: 50px;">

<br>
<br>
<div class = "row">
<div class = "col-md-4"> </div>
<div class = "col-md-4">
<h3 style="color:black" >Select the sub-category of the problem:</h3>

<select name="MainCat" class="form-control" autofocus>

<?php

echo $_SESSION['maincat'];
while($row = $result->fetch_assoc()){
    echo '<option value='.$row['subcat'].'>'.$row['subcat'].'</option>';
}
$_SESSION['subcat'] = $row['subcat'];
?>

</select>

<br>
<input type="submit" name="submit" class="btn btn-warning" value="Click to continue..." />
<br>

<br>
<input type="submit" class="btn btn-danger" name="cancel" value="Back"/>
</div>
</div>

</div>
</form>
<?php
if(isset($_POST['submit'])){
    $selected_val = $_POST['MainCat'];   
    $_SESSION['subcat'] = $selected_val;
    header("Location:select3.php");
}
if(isset($_POST['cancel'])){
     
    header("Location:select.php");
}
?>
    
    
</body>
</html>