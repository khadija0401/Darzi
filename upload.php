<?php
require_once 'db.php';
	
if(ISSET($_POST['upload'])){
 	$tailor_id = $_POST['tailor_id'];
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
	$cat_name = $_POST['cat_name'];
	$cat_desc = $_POST['cat_desc']; 
	$sql = "INSERT INTO catalog(tailor_id,catalog,cat_name,cat_desc) VALUES ('$tailor_id','{$file}','$cat_name','$cat_desc')";
		$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
		if (isset($current_id)) {
            echo'<script type="text/javascript">alert("File uploaded");</script>'; 
			header("refresh:1; url= profile.php?tailor_id=$tailor_id");
		}
		else{
			echo'<script type="text/javascript">alert("File failed to Upload check size");</script>'; 
		}
		
	}


?>


