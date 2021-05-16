<?php
include_once 'db.php';
if(isset($_POST['save'])){
  getData();
 }
 function getData(){
  global $conn,$sql;
  $contact_no = $_POST['contact_no'];
  $email_id = $_POST['email_id'];
  $shop_name = $_POST['shop_name'];
  $shop_street_address = $_POST['shop_street_address'];
  $shop_city = $_POST['shop_city'];
  $pincode = $_POST['pincode'];
  $owner_name = $_POST['owner_name'];
  $shop_state = $_POST['shop_state'];
  $shop_country = $_POST['shop_country'];
  $bio = $_POST['bio'];
  $s_regno= $_POST['s_regno'];

  $filename = $_FILES['fileupload']['name'];
  $size = $_FILES['fileupload']['size'];
  $specs=$_POST['specs'];
 //echo "size of file: $size";
  $max_size = 2000000;
  $tmp_name = $_FILES['fileupload']['tmp_name'];
  // For image upload
  // VALIDATION
  // validate image size. Size is calculated in Bytes

  // Upload image only if no errors
  if (empty($error)) {
     if(isset($filename)){
         if(!empty($filename)){
             if(($size<=$max_size)){
                 $Location = "./docs/$filename";
                 $retrival_path = "http://localhost/darzi/docs/$filename";
                 $doc = "http://localhost/darzi/docs/$filename" ;
                 if(move_uploaded_file($tmp_name,$Location)){
                        if (count($_FILES) > 0) {
                            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                                $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                $sql = "INSERT INTO tailor(contact_no,email_id,shop_name,shop_street_address,shop_city,pincode,owner_name,shop_state,shop_country,bio,s_regno,specs,doc,imageData)
                     VALUES ('$contact_no','$email_id','$shop_name','$shop_street_address','$shop_city','$pincode','$owner_name','$shop_state','$shop_country','$bio','$s_regno','$specs','$doc','{$imgData}')";
                 
              }
          }
        }
    }
                     
      if(!mysqli_query($conn,$sql))
      {
          echo'<script type="text/javascript">alert("File upload failed");</script>'; 
          header("refresh:1; url= Registration.php");
      }
      else{
          echo'<script type="text/javascript">alert("File uploaded successfully");</script>';
          header("refresh:1; url= tlogin.php");
         }
                 }
                 else{
                     echo'<script type="text/javascript">alert("There was an error");</script>';
                     header("refresh:1; url= Registration.php");
                 }
             }else{
                 echo'<script type="text/javascript">alert("The file size should be less than or equal to 2MB");</script>';
                 header("refresh:1; url= Registration.php"); 
                 
             }
         }
     
     
    
	 mysqli_close($conn);
}
  
?>
