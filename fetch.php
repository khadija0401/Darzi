<?php
//fetch.php

$connect = mysqli_connect("localhost", "root", "", "darzi");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 
 $query = "
 SELECT  *
 FROM tailor
 WHERE 	pincode LIKE '%".$search."%' 
 ";
 
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {

  while($row1 = mysqli_fetch_array($result))
  {
   $output .= '
<style>
.column {
   height:33.33%;
   float:left;
   width: 33.3%;
   margin-bottom: 16px;
   padding: 0 8px;
 }
 
 @media screen and (max-width: 650px) {
   .column {
     width: 100%;
     display: block;
   }
 }
 
 .card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   height:50%; 
 }
 
 .container {
   padding: 0 16px;
 }
 
 .container::after, .row::after {
   content: "";
   clear: both;
   display: table;
 }
 
 .title {
   color: grey;
 }
 
 .button {
   border: none;
   outline: 0;
   display: inline-block;
   padding: 8px;
   color: white;
   background-color: #000;
   text-align: center;
   cursor: pointer;
   
 }
 
 .button:hover {
   background-color: #555;
 }
 
div.b {
  word-wrap: break-word;
}
 </style>

  <div class="column">
    <div class="card">
  
    <img style="width:100%; height:350px;" alt="Profile Photo" src="imageView.php?tailor_id='.$row1["tailor_id"].'">
      <div class="container">
      <h3>'.$row1["shop_name"].' </h3>
        
        <p class="title">'.$row1["specs"].'</p>
        <p style="">'.$row1["pincode"].'   ,  '.$row1["shop_city"].'</p>
        <p>'.$row1["email_id"].'</p>
        <p><a href="profileview.php?tailor_id='.$row1["tailor_id"].'" window.location.reload(true); ><button class="button" name="view">View Profile </button></a></p>
      </div>
    </div>
  </div>
  
   ';
  }
  echo $output;
  
 }
 else
 {
  echo 'Data Not Found';
 }
 

}
?>