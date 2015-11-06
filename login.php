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
	.container {margin-top:15%;}
	</style>
</head>
<title>Login</title>
<div class="container">
	<form class="form-horizontal" name="input" action="check.php" method="post">
  <div class="form-group">
    <label class="col-xs-4 control-label">Username</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="col-xs-4 control-label">Password</label>
    <div class="col-xs-4">
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-4 col-xs-4">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
</html>