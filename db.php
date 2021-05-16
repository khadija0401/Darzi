<?php
$servername='localhost';
  $user='root';
  $password='';
  $dbname = "darzi";
  $conn=mysqli_connect($servername,$user,$password,"$dbname");
  global $conn,$sql;
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>