<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-weight: bold;
            font-size: 25px;
            margin-left: 500px;
        }
    </style>
</head>
<body>

<?php 

error_reporting(0);
session_start();
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$_SESSION['quiz_results'] = 0;
echo "<p>";
 echo "Your Result: "."<br>"."<br>";
if($q1=='Mercury'){
    echo "1. Correct Answer."."<br>";
	$_SESSION['quiz_results'] += 1;
}else{
    echo "1. Incorrect Answer."." ". " The correct answer is Mercury"."<br>";
}
if($q2=='Halite'){
    echo "2. Correct Answer."."<br>";
	$_SESSION['quiz_results'] += 1;
}else{
    echo "2. Incorrect Answer."." "." The correct answer is Halite"."<br>";
}
if($q3=='Carbon Dioxide'){
    echo "3. Correct Answer."."<br>";
	$_SESSION['quiz_results'] += 1;
}else{
    echo "3. Incorrect Answer."." "." The correct answer is Carbon Dioxide"."<br>";
}
echo ("Your Score Is: {$_SESSION['quiz_results']}");
echo "</p>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineexam";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO reportcard (u_id, Subject, Score) VALUES ('{$_SESSION["u_id"]}', 'Chemistry', '{$_SESSION['quiz_results']}' ) ";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
  //echo "New record created";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<button type="button" style="margin-left:750px"><a href="student_home_page.php" style="text-decoration: none; margin:50px">Go Back to Home Page</a></button>
</body>
</html>