<?php
    require_once "db.php";
    if(isset($_GET['tailor_id'])) {
        $sql = "SELECT imageData FROM tailor WHERE tailor_id=" . $_GET['tailor_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
        echo $row["imageData"];
	}
	mysqli_close($conn);
?>