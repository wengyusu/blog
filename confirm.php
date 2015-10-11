<?php
$title=$_GET["title"];
echo "<h1 align='center'>确认删除？</h1>";
echo "</br></br></br></br></br></br>";
echo "<div align='center'><a align='center' href='delete.php?title=$title&choice=y'>确认</a></div>"; 
echo "<div align='center'><a align='center' href='delete.php?title=$title&choice=n'>取消</a></div>"; 

?>