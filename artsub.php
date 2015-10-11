<?php
  session_start(); 
  if(!isset($_SESSION['username']))
  {
	   header('Refresh: 1; url=index.php');
	   exit("Please Login");
  }
  $title = $_POST["title"];
  $content = $_POST["content"];
  
  @$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('error' . mysql_error());
  }
  
  mysql_select_db("blog",$con);
  
  $sql="INSERT INTO article (title, content)
VALUES
('".$title."','".$content."')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  header('Refresh: 1; url=index.php');
  echo "Success";
  
?>