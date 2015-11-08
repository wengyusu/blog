<!DOCTYPE html>
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
	.container {margin-top:10%;}
	</style>
</head>
<title>Login</title>

<div class="container">
	<div class="panel panel-default col-md-8 col-md-offset-2">
	<div class="panel-heading">Login</div>
	<form class="form-horizontal panel-body" name="input" action="" method="post">
  <div class="rows">
  <div class="form-group">
    <label class="col-md-4 control-label">Username</label>
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
	<?php
$username = $password = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);

include 'datebase.php';
  
  $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
  $result = mysql_query($sql);
  $row=mysql_fetch_array($result);
  check($row,$con,$username);
}
	function check($row,$con,$username)
	{
	if(!$row) {
	echo "<span class='alert alert-warning' role='alert'>用户名或密码错误</span>";
	mysql_close($con);
}
else
{
		session_start();
	$_SESSION["username"]=$username;
	header('location:index.php');
	mysql_close($con);
}
  }
?>
</div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label">Password</label>
    <div class="col-md-4">
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-offset-4 col-md-4">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
</div>
</html>