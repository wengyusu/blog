<?php
  session_start(); 
  if(!isset($_SESSION['username']))
  {
	   header('Refresh: 1; url=index.php');
	   exit("Please Login");
  }
  $title = $_POST["title"];
  $content = $_POST["content"];
  
include 'datebase.php';
  
  $sql="INSERT INTO article (title, content)
VALUES
('".$title."','".$content."')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo "Success";
  header('location:index.php');
  
  
?>