<!DOCTYPE html>
<?php
session_start();
include 'datebase.php';
  $sql="select title from article";
  $result=mysql_query($sql); 
  
?>

<html lang="zh-CN">
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
	<style>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
#id {
  position: fixed;
  bottom: 0;
}
</style>
</head>
<title>Wind's Blog</title>
<body class="container-fluid">
<h2 align="center">Wind's Blog</h2>
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
	echo "<span>$_SESSION[username]</span>";
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
</br>
</br>
</br>
<div class="rows">
<?php 
  while($row=mysql_fetch_array($result))
  {
		echo "<div class='col-xs-offset-2'><a href='article.php?title=$row[title]'><h4>$row[title]</h4></a></div></br>"; 
  }
       
 ?>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="panel panel-default col-xs-offset-2 col-xs-8">
<div class="panel-heading">发表</div>
<form class="form-horizontal col-xs-9" name="input" action="artsub.php" method="post">
<div class="form-group">
    <label class="col-xs-offset-2 control-label">Title</label>
    <div class="col-xs-offset-2">
      <input type="text" class="form-control" placeholder="Title" name="title">
    </div>
	</div>
	<div class="form-group">
	<label class="col-xs-offset-2 control-label">Content</label>
	<div class="col-xs-offset-2">
	<textarea class="form-control" placeholder="Content" name="content" rows="6"></textarea>
	</div>
	</div>
	<div class="form-group">
	<div class="col-xs-offset-2">
      <button type="submit" class="btn btn-default">发表</button>
    </div>
</form>
</div>
</body>
</html>