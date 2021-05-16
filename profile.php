<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:tlogin.php');
    exit;
}
include_once 'db.php';
$result =mysqli_query($conn,"SELECT * FROM tailor WHERE tailor_id='" . $_GET['tailor_id'] . "'");
// $result1 =mysqli_query($conn,"SELECT * FROM catalog");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
    <link href="profile.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
    <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
    <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
 
    <br>

    <a href="index.php" class="btn btn-dark btn-radius"><i class="fas fa-home"></i> Home</a>
   
    <a style="float:right;" href="tlogin.php" class="btn btn-dark btn-radius">LogOut <i class="fa fa-sign-out"></i></a>
    <a style="float:right;margin-right:5px;" href="chatlist.php?shop_name=<?php echo $row["shop_name"]; ?>" class="btn btn-dark btn-radius"><i class='far fa-comment-dots' style='font-size:15px;' ></i> CHAT</a>
    <br>
    <br>

  <!-- <a style="display: inline;" class="btn btn-dark btn-radius" data-toggle="modal" type="button" data-target="#login_modal<?php echo $row['tailor_id']?>"><i class="fas fa-home"></i> Chat</a> -->
    <div class="card">

        <div class="container">
            <br>
            <div class="round-button">
                <div class="round-button-circle">

                    <img width="130" height="130" alt="" src="imageView.php?tailor_id=<?php echo $row["tailor_id"]; ?>">
                    <!-- <img src="" >  -->

                </div>
            </div>
            <br>
          
            <a style="float: right; display: inline;cursor:pointer;" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['tailor_id']?>"> <i style="font-size: 35px;" class="fas fa-edit"></i></a>
            <h1><?php echo $row["owner_name"]; ?></h1>
           <br>
            <p><?php echo $row['shop_street_address']; ?>
                <?php echo $row['shop_city'];?>
                <?php echo $row['shop_state'];?>

            </p>
            <br>
            <p>
                <?php echo $row['bio'];?>
            </p>
            <br>
            <div id="gridview">
        <b><div class="heading">Catalogue Gallery</div></b>
            <div class="add">
            <?php
            $sql = "SELECT * FROM catalog WHERE tailor_id='" . $_GET['tailor_id'] . "' ORDER BY id ASC";

$result1 = mysqli_query($conn, $sql);
$i=0;

while($row1 = mysqli_fetch_array($result1)) {
if($i%2==0)
$classname="even";
else
$classname="odd";

?>

               
               <div class="image"> 
               <form action="delete.php" method="POST">
               
               <input type="hidden" name="tailor_id" value="<?php echo $row1['tailor_id']?>"/>
               <input type="hidden" name="id" value="<?php echo $row1['id']?>"/>
               
               <a style="float: right; display: inline; font-size:20px; margin-left:-12%" >
               <button style="background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" name="submit">
               <i class="fas fa-trash-alt"></i></button></a>
               
               
               </form>
            <img width="130" height="130" alt="" src="catalogView.php?id=<?php echo $row1["id"]; ?>">
            <div class="container">
            <div><?php echo $row1['cat_name']; ?></div>
            <div><?php echo $row1['cat_desc']; ?></div>
           </div>
            </div>
            <?php
$i++;	
}?>


<div>
            <button data-toggle="modal" type="button"
                data-target="#myModal<?php echo $row['tailor_id']?>"><span style="font-size: 100px;" class="fa fa-plus-circle"
                    aria-hidden="true"></span>
            </button></div>
            </div>
                <!-- <i data-toggle="modal" data-target="#" > -->
            </div>
            <br>
            
            
     </div>
</div>
<?php
$i++;					
include 'update_user.php';
include 'catalog.php';

}
?>


            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/bootstrap.js"></script>
</body>

</html>