<?php
  $name = $_POST["name"];
  $content = $_POST["content"];
include 'datebase.php';
  
  $sql="INSERT INTO liuyan (name, content)
VALUES
('".$name."','".$content."')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo "Success";
  header('Refresh: 1; url=index.php');
?>