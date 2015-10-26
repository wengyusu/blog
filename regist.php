<?php
session_start();
$name = $password = $passfirm = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
  $passfirm = test_input($_POST["password"]);
}

if($password!=$passfirm)
{
	echo "ÃÜÂë²»Ò»ÖÂ£¡";
	header('Refresh: 1; url=index.php');
}
else
{
include 'datebase.php';
  
mysql_query("INSERT INTO user (username,password) 
VALUES ('.$username.','.$password.')");

  
  mysql_close($con);
  echo "Success!";
  header('Refresh: 1; url=index.php');
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>