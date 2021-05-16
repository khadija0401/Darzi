<?php
	require_once 'db.php';
	
	if(ISSET($_POST['update'])){
		$tailor_id = $_POST['tailor_id'];
		$shop_name = $_POST['shop_name'];
		$owner_name = $_POST['owner_name'];
		$shop_state = $_POST['shop_state'];
		$contact_no = $_POST['contact_no'];
		$bio = $_POST['bio'];
		$shop_street_address = $_POST['shop_street_address'];
		
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$size = $_FILES['image']['size'];
		if ($size == 0)
       {
		$sql = "UPDATE `tailor` SET `shop_name` = '$shop_name', `shop_street_address` = '$shop_street_address',`contact_no` = '$contact_no',`shop_state` = '$shop_state',`bio` = '$bio',`owner_name` = '$owner_name' WHERE `tailor_id` = '$tailor_id'";
		$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
		if (isset($current_id)) {
			header("location: profile.php?tailor_id=$tailor_id");
		}
      }
      else{
		$sql = "UPDATE `tailor` SET `shop_name` = '$shop_name', `shop_street_address` = '$shop_street_address',`contact_no` = '$contact_no',`shop_state` = '$shop_state',`bio` = '$bio',`owner_name` = '$owner_name', `imageData` = '$file' WHERE `tailor_id` = '$tailor_id'";
		$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
		if (isset($current_id)) {
			header("location: profile.php?tailor_id=$tailor_id");
		}
		
	}
}
?>