﻿<?php
session_start(); 
$title = $_GET["title"];
include 'datebase.php';
  $sql="select * from article where title='$title'";
  $result=mysql_query($sql); 
  $row=mysql_fetch_array($result);
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<title>Wind's Blog</title>
<body class="container-fluid">
<div class="rows">
<?php
if(!isset($_SESSION['username']))
{
	echo "<div class='btn-group col-xs-offset-2' role='group' aria-label='...'>";
	echo "<a type='button' class='btn btn-default' href='login.php'>登录</a>";
	echo "<a type='button' class='btn btn-default' href='regist.html'>注册</a>";
	echo "</div>";
}
else{
	echo "<div class='btn-group col-xs-offset-2' role='group' aria-label='...'>";
	echo "<a type='button' class='btn btn-default col-xs-offset-2' href='logout.php'>注销</a>";
}
?>
</div>
</br>
</br>
<div class="rows">
<ul class="nav nav-tabs col-xs-offset-2">
<li role="prenstation"><a href="index.php">首页</a></li>
<li role="prenstation"><a href="liuyan.php">留言板</a></li>
</ul>
</div>

<h3 class=" rows col-xs-offset-2">
<?php 
	    echo "$row[title]"; 
?>
  </h3>
  </br>
  </br>

 <p class="rows col-xs-offset-2">
 <?php
 echo "$row[content]";
 ?>
 </br>
  </br>
   </br>
    </br>
	 </br>
 <?php 
echo "<a type='button' class='btn btn-default href='confirm.php?title=$row[title]'>删除</a>"; 
 ?>
</p>
</body>
</html>