<?php
require_once('dbconnect.php');
if(isset($_POST['ID']) && isset($_POST['pass'])){
	$u = $_POST['ID'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM adminlogin WHERE u_id = '$u' AND password = '$p'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) !=0 )
	{
		header("Location: home_Admin.php");
	}
	else
	{
		echo "User ID or Password is wrong, please enter correct information.";
		header("Location: Admin_login.php");
	}	
}
?>
