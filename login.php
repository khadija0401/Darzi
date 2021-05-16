<?php
session_start();
include 'db.php';
if(isset($_POST['login'])){
$username=$_POST['username'];
$pass=$_POST['pass'];

$q=mysqli_query($conn,"insert into cust(username,pass) values('$username','$pass')");
if($q)
{
$_SESSION['username']=$username;
}
else
{
	echo " nahi ho paraha kya?";
}
}
else{
	header('chat.php');
}


?>