<?php
  session_start(); 
  if(!isset($_SESSION['username']))
  {
	   header('Refresh: 1; url=index.php');
	   exit("Please Login");
  }
  
$title=$_GET["title"];
$choice=$_GET["choice"];
if($choice=="n")
{
	header("Location: article.php?title=$title"); 
}
else
{
	include 'datebase.php';
  mysql_query("DELETE FROM article WHERE title='$title'");
  mysql_close($con);
  
  header('Refresh: 1; url=index.php');
  echo "Success";
}
?>