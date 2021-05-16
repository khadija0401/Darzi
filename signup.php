<?php
include 'db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$pass=$_POST['pass'];
$shop_name=$_POST['shop_name'];
$q=mysqli_query($conn,"insert into cust(username,pass) values('$username','$pass')");
if($q)
    {
    $_SESSION['username']=$username;
    echo'<script type="text/javascript">alert("Login Successfull");</script>'; 
    header("refresh:1; url=modal.php?shop_name=$shop_name");
    }
    else
    {
    	echo'<script type="text/javascript">alert("Login Failed");</script>'; 
    }
    }

?>
