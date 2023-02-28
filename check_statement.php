<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT  dtime,AllMoney FROM banking";
$result = $conn->query($sql);
 
 if ($result->num_rows > 0) {

   while($row = $result->fetch_assoc()) {
     echo "Date : " . $row["dtime"] . "Balance: " . $row["AllMoney"] . "<br>";  
   }
 }
 $conn->close();
?>