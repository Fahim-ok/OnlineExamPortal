<?php
$servername = "localhost";
$u_id = "root";
$password = "";
$dbname = "onlineexam";
$conn = new mysqli($servername, $u_id, $password);
if($conn->connect_error)
{
   die("Connection failed: " . $conn->connect_error);
}
else
{
mysqli_select_db($conn, $dbname);
//echo "Connection successful!";
}
?>