<?php
include_once 'db.php';
if(ISSET($_POST['submit'])){
$id = $_POST['id'];
$tailor_id = $_POST['tailor_id'];
$sql = "DELETE FROM catalog WHERE id=$id";
if (mysqli_query($conn, $sql)) {
 echo '<script type="text/javascript">alert("Catalog deleted successfully");</script>';
 header("refresh:1; url=profile.php?tailor_id=$tailor_id");
} else {
    echo "Error deleting record: ";
    header("refresh:1; url=profile.php?tailor_id=$tailor_id");
}
}
mysqli_close($conn);
?>