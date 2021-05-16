<?php

if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}

include 'review.php';
include_once 'db.php';
$result =mysqli_query($conn,"SELECT * FROM tailor WHERE tailor_id='" . $_GET['tailor_id'] . "'");

$_SESSION['tailor_id']=$_GET['tailor_id'];

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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <script>
 
</script>
  
</head>


<body>
    <br>

    <a href="index.php" class="btn btn-dark btn-radius"><i class="fas fa-home"></i>Back</a>
    
    <!-- <a style="float:right;" href="tlogin.php" class="btn btn-dark btn-radius">LogOut <i class="fa fa-sign-out"></i></a> -->

    <br>
    <br>
    <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
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
            <a style="float:right;" href="modal.php?shop_name=<?php echo $row["shop_name"]; ?>" class="btn btn-dark btn-radius">CHAT <i class="fa fa-sign-out"></i></a>
            <div class="col-md-6" style="float: right; display: inline;">
			<h3 align="center"><b><?php echo round($AVGRATE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
			<p align="center"><?=$Total;?> ratings and <?=$Total_review;?> reviews</p>
		</div>
            <!-- <a style="float: right; display: inline;" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['tailor_id']?>"> <i style="font-size: 35px;" class="fas fa-edit"></i></a> -->
            <h1><?php echo $row["owner_name"]; ?></h1>
           <br>
           <?php echo' <i class="fa fa-phone w3-margin-bottom w3-large w3-center"></i>          :'; echo $row['contact_no'];?>
           <br>
           <?php  echo ' <i class="fa fa-envelope w3-margin-bottom w3-large w3-center"></i>          :'; echo $row['email_id'];?>
           <br>
            <p><?php  echo '<i class="fa fa-map-marker w3-margin-bottom w3-large w3-center"></i>          :'; echo $row['shop_street_address']; ?>
                <?php echo $row['shop_city'];?>
                <?php echo $row['shop_state'];?>

            </p>
            <br>
            <p>
                <?php echo $row['bio'];?>
            </p>
            <br>
            <div id="gridview">
        <b><div class="heading">Catalogue Gallery</div></b><br>
            <div class="add">
            <?php
            $sql = "SELECT * FROM catalog WHERE tailor_id='" . $_GET['tailor_id'] . "' ORDER BY id ASC";

$result1 = mysqli_query($conn, $sql);
$i=0;
if(mysqli_num_rows($result1)>0){
while($row1 = mysqli_fetch_array($result1)) {
if($i%2==0)
$classname="even";
else
$classname="odd";

?>

               
               <div class="image"> 
               
               
               <input type="hidden" name="tailor_id" value="<?php echo $row1['tailor_id']?>"/>
               <input type="hidden" name="id" value="<?php echo $row1['id']?>"/>
               
               <a style="float: right; display: inline; font-size:20px; margin-left:-12%" >
               <button style="background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" name="submit">
               </button></a>
               
               
            <img width="130" height="130" alt="" src="catalogView.php?id=<?php echo $row1["id"]; ?>">
            <div class="container">
            <div><?php echo $row1['cat_name']; ?></div>
            <div><?php echo $row1['cat_desc']; ?></div>
           </div>
            </div>
            <?php
$i++;	
}
}
else
{
    echo "THERE IS NOTHING TO DISPLAY";
}
?>



            <br>
            
            </div>
</div>
<?php
$i++;					
include 'update_user.php';
include 'catalog.php';

?>


            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/bootstrap.js"></script>

         <br><br>   <div class="row container">
<div class="col-md-4 ">
	<h3><b>Rating & Reviews</b></h3>
	<div class="row">
	
		<div class="col-md-6">
			<h3 align="center"><b><?php echo round($AVGRATE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
			<p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p>
		</div>
		<div class="col-md-6">
			<?php
			while($db_rating= mysqli_fetch_array($rating)){
			?>
				<h4 align="center"><?=$db_rating['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?=$db_rating['Total'];?></h4>
				
				
			<?php	
			}
				
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">	
		<?php
			while($db_review= mysqli_fetch_array($review)){
		?>
				<h4><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span style="font-size:14px;"><?=$db_review['email'];?></span></h4>
				<p><?=$db_review['remark'];?></p>
				<hr>
		<?php	
			}
				
		?>
		</div>
	</div>
		
    <form action="review.php" method="POST">
        <div id="rating_div">
            <div class="star-rating">
         
            <div class="stars">
                    <input class="star star-5" id="star-5" type="radio" value="5" name="rating">
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" value="4" name="rating">
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" value="3" name="rating">
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" value="2" name="rating">
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" value="1" name="rating">
                    <label class="star star-1" for="star-1"></label>

                </div>
            </div>
        </div>
        </div>
        </div><br>

<input type="hidden" name="demo_id" id="demo_id" value="1">
<input type="hidden" name="tailor_id" value="<?php echo $row['tailor_id']?>"/>
                  
                  <?php } ?>
<div class="col-md-4">
<input type="email" class="form-control" name="email" id="email" placeholder="Email Id"  required><br>
<textarea class="form-control" rows="5" placeholder="Write your review here..." name="remark" id="remark" required></textarea><br>
<p><input type="submit" value="submit" name="submit" class="btn btn-default btn-sm btn-info" id="srr_rating"></p>
<!-- <p><button  class="btn btn-default btn-sm btn-info" id="srr_rating" name="submit">Submit</button></p> -->
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/index.js">
// $( window ).load(function() {
//     if (window.location.href.indexOf('reload')==-1) {
//          window.location.replace(window.location.href+'?reload');
//     }
// });
</script>






</body>
<style>
div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>
</html>
