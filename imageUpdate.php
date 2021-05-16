<?php
    require_once "db.php";
    if(isset($_GET['tailor_id'])) {
        if(count($_POST)>0) {
            mysqli_query($conn,"UPDATE tailor set imageData WHERE tailor_id='" . $_GET['tailor_id'] . "'");
            $message = "Record Modified Successfully";
          }
    }
    $result = mysqli_query($conn,"SELECT * FROM tailor WHERE tailor_id='" . $_GET['tailor_id'] . "'"); 
    $row= mysqli_fetch_array($result);
    
?>