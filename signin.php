<?php
require_once('dbconnect.php');
if(isset($_POST['ID']) && isset($_POST['pass'])){
	$u = $_POST['ID'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM login WHERE u_id = '$u' AND password = '$p'";
	$result = mysqli_query($conn, $sql);
	session_start();
	$_SESSION["u_id"] = "$u";
	if(mysqli_num_rows($result) != 0 )
	{
		header("Location: student_home_page.php");
	}	
	else
	{
		echo "User ID or Password is wrong, please enter correct information";
		header("Location: index.php");
	}
}
?>
