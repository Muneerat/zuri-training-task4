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

if(isset($_POST['login'])){
    $full_name = $_POST['full_name'];
    $username  = $_POST['username'];
    $password = $_POST['password'];
    
    $sql ="SELECT full_name, user_name, password FROM users ";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $full_name = $row['full_name'];
            $user_name  = $row['user_name'];
            $password = $row['password'];
        
        if($full_name === $full_name && $username === $username && $password === $password){
            echo "You are login Sucessfully ";
        }else{
           echo"Not Register";
        }
    }
    }
    
}

?>
