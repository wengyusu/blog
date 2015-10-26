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

<tr>

<h2 align="center">文章列表</h2>
</br>

</tr>

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