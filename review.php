<?php
session_start();

include 'db.php';

if(isset($_POST['submit'])){
$tailor_id=$_POST["tailor_id"];
$email=$_POST["email"];
$remark=$_POST["remark"];
$rating=$_POST["rating"];
$status=$_SESSION["tailor_id"];
$kyurie="Insert into rating_data (rating,remark,email,status) values ('$rating','$remark','$email','$status')";
$res=mysqli_query($conn,$kyurie);
if(!$res){
    echo'<script type="text/javascript">alert("Error in Processing");</script>';
}
else{
    echo'<script type="text/javascript">alert("Thank you for your Review!");</script>';
    header("refresh:2; url= profileview.php?tailor_id=$tailor_id");
}
}


$status=$_SESSION["tailor_id"];

$query = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from rating_data where status='$status'");
$row = mysqli_fetch_array($query);
$AVGRATE=$row['AVGRATE'];
$query = mysqli_query($conn,"SELECT count(rating) as Total from rating_data where status='$status'");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];
$query = mysqli_query($conn,"SELECT count(remark) as Totalreview from  rating_data where status='$status'");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];
$review = mysqli_query($conn,"SELECT remark,rating,email,id from rating_data where status='$status' order by id desc limit 3");
$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from rating_data group by rating order by rating desc");
?>