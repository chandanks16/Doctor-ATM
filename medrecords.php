<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("images/new4.jpg");

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
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
       <a class="nav-link" href="ambulance.php"><img src= "images/a1.Jfif" width="100" height="70"></img></a> <span class="sr-only">(current)</span></a>
      <a class="navbar-brand" href="#" style = "color: blue;"> <h2><font face="Rockwell">SmartHealth Assistance</h2></a></font>
	  <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="images/st.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="80" width="80">
        </a>
      </li>
    </ul>

		
		
  
      </nav>

      <button  name = "cancel" class="btn btn-warning" onClick="document.location.href='welcome.html';">Home</button><br>
<?php


                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "doctoratm";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                
                    $sql = 'SELECT * FROM medicine';
                    $result =  $conn->query($sql);
                    echo " <div class = 'center'style='margin-top:50px'>";
                    $t = 'table table-bordered';
                    if ($result -> num_rows > 0)
                    {  
                                        echo "<table class=".$t."><tr><td>Main Category</td><td>Sub Category</td><td>Symptoms</td><td>Medicine</td> <td>Category</td></tr>";
                                        while ($row  = $result->fetch_assoc()){            
                                        echo "<tr><td>".$row['maincat'];
                                        echo "<td>".$row['subcat'];
                                        echo "<td>".$row['symptom'];
                                        echo "<td>".$row['medicine'];
                                        echo "<td>".$row['category'];

                                        echo "</td> </tr>"; } 
                                        echo "</table>";  
                    }
                
?>







<button  name = "cancel" class="btn btn-warning" onClick="document.location.href='welcome.html';">Home</button><br><br><br><br>



</form>

</div>
</div>

</body>
<html>