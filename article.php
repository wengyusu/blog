<?php
session_start(); 
$title = $_GET["title"];
include 'datebase.php';
  $sql="select * from article where title='$title'";
  $result=mysql_query($sql); 
  $row=mysql_fetch_array($result);
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css" />
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
<h1 align="center">
<?php 
	    echo "$row[title]"; 
		echo "</br>";
?>
  </h1>
  </br>
  </br>

 <p align="center">
 <?php
 echo "$row[content]";
 ?>
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
 <?php 

	    echo "<a href='confirm.php?title=$row[title]'>删除</a>"; 
 ?>
 </p>
</body>
</html>