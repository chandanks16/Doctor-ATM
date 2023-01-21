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
  background-image: url("images/pres4.jpg");
  /* Full height */
  height: 120%;
  /* Center and scale the image nicely */
  background-position:center;
  background-repeat: no-repeat;
  background-size: cover;
}

.center {
  margin: auto;
  width: 56%;
  border: 3px solid green;
  padding: 10px;
}
h6{
	text-align:right;
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
<div class="row"  style="margin-bottom:10px; margin-top: 13px;" >
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
</form>

</div>

</div>
<div class = "center"><p align="center"><img src="images/logo1.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="90" width="100">
<h3><u><font face="Rockwell" color="maroon" ><p align="center"><b>SmartHealth Assistance</b></u></h3></font></p><hr>
<h6><font face="Bahnschrift SemiLight Condensed"><?php echo "<b>Date:" . date("d/m/Y") . "<br></b>";?></h6>
<h5><u><b>DoctorName:</b></u>Radhika<br> <u>  <b>Specialization</b></u>:MBBS,MS<br>
<u><b>Hospital</b></u>:St.John's Hospital & Research Centre</h5>
<h4><font face="Bahnschrift SemiCondensed">
Patient Name     :   <?php echo $row1['fullname'];?><br>
Patient Address  :   <?php echo $row1['address'];?> <br>
Patient Age      :   <?php echo $row1['age'];?> <br>
Patient DOB      :   <?php echo $row1['dateofbirth'];?><br>
Patient Email ID :   <?php echo $row1['emailid'];?><br>
Patient Regn Num   :   <?php echo $a;?><br>
Patient Main Issue    :   <?php echo $b;?><br>
Patient Sub Issue    :   <?php echo $c;?><br>
Patient Symptoms    :   <?php echo $d;?><br>
Medicine        :  <b> <?php echo $e;?></b><br></h4></font>
</div>
<br>
<div class="center">
<form action="" method = "post">
<button onclick="myFunction()" class = "btn btn-warning" name="print">Print</button>
<script>
function myFunction() {
  window.print();
}
</script>
<button class = "btn btn-danger" name="close">Close</button>
</form>

</div>

<?php
if(isset($_POST['close'])){
  
    header("Location:welcome.html");  
}


if(isset($_POST['print'])){
    
}


?>


</body>
</html>