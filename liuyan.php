<!DOCTYPE html>
<?php
include 'datebase.php';
  $sql="select * from liuyan";
  $result=mysql_query($sql); 
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style type="text/css"> 
.content {
    width: 97%;
    height: 140px;
}

</style>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<title>Wind's Blog</title>
<body style="overflow-y:scroll;">
<?php
if(!isset($_SESSION['username']))
{
	echo "                          <a href='login.php'>登录</a>";
}
else{
	echo "<span>$_SESSION[username]</span>";
	echo "                          <a href='logout.php'>注销</a>";
}
?>
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
 <?php 
  while($row=mysql_fetch_array($result))
  {
	    echo "<h3 align='center'>From:$row[name]</h3>"; 
		echo "<h4 align='center'>$row[content]</h4>"; 
echo "</br>";
  }
 ?>
 </ul>
 </br>
 </p>
 <div class="footer">
<form name="input" action="liusub.php" method="post">
<fieldset>
<legend  style="font-weight:bold">发表</legend>
<td>Name: <input type="text" name="name"/></td>
</br>
<td>Content: <input type="text" class="content" name="content"/></td>
</br>
<td><input type="submit" value="Submit" /></td>
</fieldset>
</form>
</div>
</body>
</html>