<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
	body, html {
  height: 95%;
}

.bg {
  /* The image used */
  background-image: url("images/search.jpg");

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

<h5>SEARCH RECORD BASED ON REGISTRATION NUMBER</h5>
<br>
<form method="post">
Select your regn number:
<select name="regno" required></font>
<option value=""></option>

<?php
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "doctoratm";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $result1 =  $conn->query("select regno from regn");
while($row2 = $result1->fetch_assoc()){
    echo '<option value='.$row2['regno'].'>'.$row2['regno'].'</option>';
}


?>
</select>

<br><br>Enter 6 digit Admin Pin...
<input type="password" name = "pin" required>
<button type = "submit" class="btn btn-primary" name = "login">Search... </button>

<button  name = "cancel" class="btn btn-warning" onClick="document.location.href='welcome.html';">Home</button><br><br><br><br>

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
                    $regnno = $_POST['regno'];
                    $sql = 'SELECT * FROM regn where regno ='.$regnno;
                    $result =  $conn->query($sql);
                    echo " <div class = 'center'style='margin-top:50px'>";
                    if ($result -> num_rows > 0)
                    {  
                                        echo "<table class=".$t."><tr><td>Full Name</td><td>Mobile Number</td><td>Email ID</td><td>Date of Birth</td> <td>Gender</td><td>Age</td><td>Address</td></tr>";
                                        while ($row  = $result->fetch_assoc()){            
                                        echo "<tr><td>".$row['fullname'];
                                        echo "<td>".$row['phone'];
                                        echo "<td>".$row['emailid'];
                                        echo "<td>".$row['dateofbirth'];
                                        echo "<td>".$row['gender'];
                                        echo "<td>".$row['age'];
                                        echo "<td>".$row['address'];

                                        echo "</td> </tr>"; } 
                                        echo "</table>";  
                    }
                }
                else{
                    echo 'Invalid admin pin! Please try again';
                }

}
?>


</form>

</div>
</body>
<html>