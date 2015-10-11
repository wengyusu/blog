<?php
session_start(); 
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('error' . mysql_error());
  }
  
  mysql_select_db("blog",$con);
  
  $result = mysql_query("SELECT * FROM user
WHERE username='.$username.' and password='.$password.'");

if(!$result) {
	echo "用户名或密码错误！";
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