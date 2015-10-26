<?php
session_start();
$name = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}

include 'datebase.php';
  
  $result = mysql_query("SELECT * FROM user
WHERE username='.$username.' and password='.$password.'");

if(!$result) {
	echo "用户名或密码错误！";
	header("Location: index.php"); 
}
else
{
	$_SESSION['username']=$username;
	header("Location: index.php"); 
}
  
  mysql_close($con);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>