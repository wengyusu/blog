<!DOCTYPE html>
<?php
session_start();
include 'datebase.php';
  $sql="select title from article";
  $result=mysql_query($sql); 
  
?>

<html>
<head>
<meta charset="utf-8">
<style type="text/css"> 
.content {
    width: 97%;
    height: 140px;
}
.footer {
bottom:10px;  

}
</style>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<title>Wind's Blog</title>
<body>
Welcome! 
<?php

if(!isset($_SESSION['username']))
{
	echo "                          <a href='login.php'>登录</a>";
	echo "                          <a href='regist.html'>注册</a>";
}
else{
	echo "<span>$_SESSION[username]</span>";
	echo "                          <a href='logout.php'>注销</a>";
}
?>
</br>
</br>

<ul class="nav">
<li><a href="index.php">首页</a></li>
<li><a href="liuyan.php">留言板</a></li>
</ul>
</br>
</br>
</br>
<div>
<tr>
<ul>
<?php 
  while($row=mysql_fetch_array($result))
  {
	    echo "<li><a href='article.php?title=$row[title]'>$row[title]</a></li>"; 

	
  }
       
 ?>
 </ul>


</tr>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="footer">
<form name="input" action="artsub.php" method="post">
<legend  style="font-weight:bold">发表</legend>
<td>Title: <input type="text" name="title" style="width:97%;"/></td>
</br>
<td>Content: <input type="text" class="content" name="content"/></td>
</br>
<td><input type="submit" value="Submit" /></td>
</form>
</div>
</body>
</html>