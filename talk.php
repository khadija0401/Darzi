<?php
include 'db.php';
if(isset($_POST['login'])){
$username=$_POST['username'];
$pass=$_POST['pass'];
$shop_name=$_POST['shop_name'];
// $q=mysqli_query($conn,"insert into cust(username,pass) values('$username','$pass')");
// if($q)
// {
// $_SESSION['username']=$username;
// header("location: chat.php?shop_name=$shop_name&&username=$username");
// }
// else
// {
// 	echo " nahi ho paraha kya?";
// }
// }
// if(isset($_POST['username'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
    $sql="select * from cust where username='$username' && pass='$pass'";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
  
    if ($row['username'] == $username && $row['pass'] == $pass)
        
    {
        echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
        $_SESSION['username']=$username;
        header("location: chat.php?shop_name=$shop_name&&username=$username");
    }
    else{
        echo'<script type="text/javascript">alert("check your login credentials");</script>';
        header("location: modal.php?shop_name=$shop_name");
    
    }
}
?>