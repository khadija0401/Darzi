<?php
session_start();
include 'db.php';
$shop_name=$_GET['shop_name'];
$select = "SELECT * FROM tbl_comment where shop_name='$shop_name' && comment_sender_name != '$shop_name' group by comment_sender_name order by date ";
$result = $conn->query($select);
?>
<head>
<title>Chatlist</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
    <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style type="text/css">
    
.table {
    margin: 0 auto;
    border:ridge;
}
.chatbox{
       padding:80px;
    }
    a{
      text-decoration:none;
    }
</style>
<!-- <style>
   
    </style> -->
</head>

<?php
     if (mysqli_num_rows($result) > 0) {
     ?>
     <body>
     <a href="index.php" class="btn btn-dark btn-radius" style="color:white;"><i class="fas fa-home"></i>Back</a>
    <div class="chatbox">
     <div class="container">
         
  <table style="width: auto;" class="table table-hover  table-striped table-condensed">
    <thead>
      <tr>
      <th></th>
             <th><?php echo $shop_name; ?></th>
             
      </tr>
    </thead>
    <tbody>
     
    

    
         <?php
             $i=0;
             while($row = mysqli_fetch_array($result)) {
             ?>
             <tr>
                 <td class="col-md-1"><center><i style="font-size:35px;" class="fas fa-user-circle"></i><center></td>
                 <td ><a href="chattailor.php?shop_name=<?php echo $shop_name ?>&&comment_sender_name=<?php echo $row["comment_sender_name"]; ?>"   style="background-color:white;text-decoration: none;color:black;">
                <dl>
                 <dt><?php echo $row["comment_sender_name"]; ?></dt>
                 <dd><?php echo $row["comment"]; ?></dd>
                 </dl></a></td>
                 
               </tr>  
         <?php
         $i++;
         }
         ?>
         </tbody>
  </table>
</div>
</div>
     
     <?php
         
        }
         else{
           header("location: error.html");
         }
      ?>
 </body>