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
  background-image: url("images/medicine.jpg");
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
}</style>



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
<?php
session_start();


if (  ( int )$_SESSION['age'] <=5 ) {
    $cat ='Infant';
}
else if (  ( int )$_SESSION['age'] >5 && ( int )$_SESSION['age'] <=19 ) {
    $cat= 'Children';
}
else if (  ( int )$_SESSION['age']  >19 ) {
    $cat = 'Adult';
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctoratm";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select medicine from medicine where symptom ='".$_SESSION['symptom']."' and category='".$cat."'";

$result =  $conn->query($sql);
?>
<div class="row"  style="margin-bottom:10px; margin-top: 50px;" >
<div class="col-md-6">
</div>
    <div class="col-md-6">

<form action="#" method="post">

<?php
$row = $result->fetch_assoc();
$e = $row['medicine'];
$recdate = date("Y-m-d");
$a = $_SESSION['regnno'];
$b = $_SESSION['maincat'];
$c = $_SESSION['subcat'];
$d = $_SESSION['symptom'];

if ($e != "")
{
echo "<br><h2>Your Medicine:  $e</h2> ";
$sql1 = "INSERT INTO RECORDS VALUES('$recdate','$a','$b','$c','$d','$e')";

$conn->query($sql1);

$sql2 = "SELECT * FROM REGN WHERE REGNO = ".$a."";
$conn->query($sql2);
$result2 =  $conn->query($sql2);
$row1 = $result2->fetch_assoc();

}
else
{
    header("Location:nomed.php");  
}

?>


<form action="" method = "post">
<button class = "btn btn-primary" name="print"><h4>Display Prescription</h4></button> 
<button class = "btn btn-warning" name="close"><h4>Go to Home Screen</h4></button>
</form>



<?php
if(isset($_POST['print'])){
  
    header("Location:select4.php");  
}
if(isset($_POST['close'])){
  
    header("Location:welcome.html");  
}
?>

</body>
</html>