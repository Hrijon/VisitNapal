<?php
  session_start();
  require'config.php';

  if(isset($_POST['register_btn']))
  {
    //echo'<script type="text/javascript"> alert("Register button clicked") </script>';
    $VisitorName= $_POST['name'];
    $Country= $_POST['country'];
    $Age= $_POST['age'];
    $Date = $_POST['date'];
  
    // Insert userinput data into database
      $query= "INSERT INTO VisitorInfo (VisitorName,Country,age,date) VALUES('$VisitorName','$Country','$Age','$Date')";
      $query_run = mysqli_query($con,$query);

      //after registration process finished then send to login page or throw an error
          
      echo 'Data Inserted';
      echo $query_run;

      if($query_run)
          {
            echo'user Registered.. go to login';
            // include("../index.html"); 
          }
          else
          {
            echo 'Error!!! user is not registered';
            // include("../index.html"); 
          }
  } //isset
  else{
    echo 'Erroe in ISSET****';
  }

  
?>
    