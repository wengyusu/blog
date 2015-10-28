<?php
session_start(); 
include 'datebase.php';

?>
<html>
<head>
<meta charset="utf-8">
</head>
<title>Wind's Blog</title>
<body>
<?php

if(!isset($_SESSION['username']))
{
	echo "                          <a href='login.php'>登录</a>";
}
else{
	echo "<span>welcome,$_SESSION[username]</span>";
	echo "<a href='logout.php'>                         注销</a>";
}
?>

<h1 align="center">留言板</h1>
  </br>
  </br>

 <p align="center">
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>

 </p>
</body>
</html>