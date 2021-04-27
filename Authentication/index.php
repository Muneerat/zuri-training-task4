<?php
  //connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "";

  $conn = new mysqli($servername, $username, $password,$db_name);
  //check connection
  if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
  }
//   echo "Connected successfully";
 
  
?>

  <a href="register.php">Registration</a><br><br>
  <a href="login.php">Login</a><br><br>
  <a href="#">Reset password</a><br><br>
  <a href="logout.php">logout</a>