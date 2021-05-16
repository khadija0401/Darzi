<?php
    require_once "db.php";
    if(isset($_GET['id'])) {
        $sql = "SELECT catalog FROM catalog  WHERE id='" . $_GET['id'] . "'";

		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
	
       $row = mysqli_fetch_array($result);
        echo $row["catalog"];
}
	mysqli_close($conn);
?>