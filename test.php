
   <?php
       include "db.php";     
       if(isset($_POST['save'])){
        $contact_no=$_POST['contact_no'];
        $query="select * from tailor where contact_no='$contact_no'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);
        if($row['contact_no'] == $contact_no)
        {
            
            echo '<script>window.location="profile.php?tailor_id='.$row['tailor_id'].'"</script>';
          }
        
          else{
              echo '<script>window.location="Registration.php"</script>';
          }
        
        
        
        }
        
        ?>
