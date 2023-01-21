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
  background-image: url("images/inventory.jpg");

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
  <?php

  if(isset($_POST['signup'])){
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctoratm";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
  
  
    $mc = $_POST['maincat'];
    $sc = $_POST['subcat'];
    $sy = $_POST['symptom'];
    $med = $_POST['medicine'];
    $cat = $_POST['category'];


      
     $sql = "INSERT INTO MEDICINE VALUES('$mc', '$sc', '$sy', '$cat', '$med')";
    
    
    if($conn->query($sql) === TRUE)
    {
              echo '<h4>'.'Your record has been saved successfully'.'</h4><br>';
    }
    else{
      echo 'Failed';
    }
  
    $conn->close();
  }

  
  ?>
  <form  method="POST">
    <div class="container" style="margin-top:100px;" ><font face="Rockwell" color="white">
    <div><h1><b>Medicine Data Entry Screen</b></h1></div><br></font>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4"><h5><font face="Rockwell">Select Category</h5></label></font>
        <select name="category" name="category" class="form-control" required>
          <option value="" >
            Select
           </option>
          <option value="Infant">
            Infant  ( Less than 5 Years)
          </option>
          <option value="Children">
            Children ( From 5 to 19 Years)
          </option>
          <option value="Adult">
            Adult   ( Above 19 Years)
          </option>

        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4"><h5><font face="Rockwell">Main category of illness or disease</h5></label>
        <select name="maincat" name="maincat" class="form-control" required>
          <option value="" >
            Select
           </option>
          <option value="ALLERGIES">
            ALLERGIES
          </option>
          <option value="MONSOON">
            MONSOON
          </option>
          <option value="INJURIES">
            INJURIES  
          </option>
          <option value="HEART">
            HEART  
          </option>
          <option value="PAINS">
            PAINS  
          </option>
          <option value="THROAT">
            THROAT  
          </option>

        </select>

        
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4"><h5>Sub category</h5></label>
        <input type="text" class="form-control" name="subcat" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4"><h5>Symptom</h5></label>
        <input type="text" class="form-control" name="symptom" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4"><h5>Medicine</h5></label>
        <input type="text" class="form-control" name="medicine" required>
      </div>
      </div>
          
    <div class="form-row">
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary" name = "signup" > SAVE</button>
        <button type="submit" class="btn btn-warning" onClick="document.location.href='welcome.html';" >Home</button>
        <button  type = "reset" class="btn btn-danger" name = "reset">Reset</button>
       
       </div>
    </div>
    </div>

    
    

    </form>
	

  
</div>
</font>
</body>
</html>