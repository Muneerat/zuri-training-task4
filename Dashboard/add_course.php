<?php
  //connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "db_zuri";

  $conn = new mysqli($servername, $username, $password,$db_name);
  //check connection
  if($conn->connect_error){
      die("Connection failed:" . $conn->connect_error);
  }
//   echo "Connected successfully";
if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $course = $_POST['course'];

    $sql = "INSERT INTO course (full_name, course)
            VALUES('$full_name','$course')";
    if($conn->query($sql) === TRUE){
        echo "New record created suceessfully";
    } else{
        echo "Error:" . $sql . "<br>". $conn->error;
    }
}
header("location: index.php");
?>