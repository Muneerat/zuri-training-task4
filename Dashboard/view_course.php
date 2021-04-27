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

$sql ="SELECT * FROM course ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>" . $row['full_name'] . "</td>";
      echo "<td>" . $row['course'] . "</td>";
      echo "</tr>";
      
    }
}

?>