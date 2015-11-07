<?php
  session_start(); 
  $title=$_GET['title'];
  if(!isset($_SESSION['username']))
  {	
	   $data ="Please Login";
	   header("Refresh: 1; url=index.php?title=$title");
	   exit($data);
  }
else
{
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
}
}
?>