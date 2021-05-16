<!DOCTYPE html>
<html class="no-js" lang="en"><head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="main.css">
    <style media="screen">
         .center{
              flex-direction: column;
         }
         .profileDiv{
              width:60%;
              margin:0 auto;
              border: 1px solid #aeaeae;
              border-radius: 5px;
         }
         @media screen and (min-width:240px) and (max-width:680px){
              .profileDiv{
                   width: 100%;
              }
         }
    </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body>

     <div class="profileDiv">

         <div class="login-form-body" style=" background-color: white; border-radius:5px;">

             <div class="row">
                 <div style="margin:0px auto;">
                     <h2 class="myTitle">Registration Page</h2>
                 </div>
             </div>
             <br>
             <form class="center" action="Function.php" method="POST" enctype= multipart/form-data>
                <div class="form-group text-center" style="position: relative;" >
                  <span class="img-div">
                    <div class="text-center img-placeholder"  onClick="triggerClick()">
                      <h4>Update image</h4>
                    </div>
                    <img src="avatar.png" onClick="triggerClick()" id="profileDisplay">
                  </span>
                  <input type="file" name="userImage" accept=".jpeg,.jpg,.png,.jfif" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required>
                  <label>Profile Image</label>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-gp ">
                         <label for="exampleInputName1">Shop Name</label>
                         <input type="text" name="shop_name" value="" id="exampleInputName1" required>
                         <div class="text-danger"></div>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-gp ">
                         <label for="exampleInputName1">Specialized In:</label>
                         <input type="text" name="specs" value="" id="exampleInputName1" required>
                         <div class="text-danger"></div>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-gp ">
                        <label for="exampleInputName1">Owner's Name</label>
                        <input type="text" name="owner_name" value="" id="exampleInputName1" required>
                        <div class="text-danger"></div>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-gp ">
                         <label for="exampleInputEmail1">E-mail</label>
                         <input type="email" name="email_id" value="" id="exampleInputEmail1" required>
                         <div class="text-danger"></div>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-gp ">
                         <label for="exampleInputEmail1">Mobile No.</label><br>
                         <input type="phone" id="phone" name="contact_no" placeholder="9876543210" pattern="[0-9]{10}" required><br><br>
                         <div class="text-danger"></div>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-gp ">
                         <label for="exampleInputEmail1">Address</label>
                         <input type="text" name="shop_street_address" value="" id="exampleInputEmail1" required>

                         <div class="text-danger"></div>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-gp ">
                       <label for="exampleInputEmail1">Pincode</label>
                       <input type="text" name="pincode" id="pincode" pattern="[0-9]{6}" required /><br />
                       <div class="text-danger"></div>
                    </div>
               </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-gp ">
                         <label for="exampleInputEmail1">City</label>
                         <input type="text" name="shop_city" value="" id="exampleInputEmail1" required>
                         <div class="text-danger"></div>
                      </div>
                 </div>
                 
                 <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-gp ">
                         <label for="exampleInputEmail1">State</label>
                         <input type="text" name="shop_state" value="" id="exampleInputEmail1" required>
                         <div class="text-danger"></div>
                      </div>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-gp ">
                         <label for="exampleInputName1">Country</label>
                         <input type="text" name="shop_country" value="" id="exampleInputName1" required>
                         <div class="text-danger"></div>
                      </div>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-gp ">
                     <!-- <label for="exampleInputName1">Bio</label> -->
                     <textarea wrap="on" cols="40" rows="5" type="text" name="bio" placeholder="Bio" value="" id="exampleInputName1"></textarea>
                     <div class="text-danger"></div>
                  </div>
             </div> 
                 <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-gp ">
                       <label for="exampleInputName1">GST No.</label><br>
                       <input type="text" id="s_regno" name="s_regno" placeholder="22AA201468A41Z4" pattern="[0-9]{2}[0-9,A-Z]{10}[0-9]{1}Z[1-9]{1}" required><br><br>
                       <div class="text-danger"></div>
                    </div>
               </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-gp ">
                        <label for="">Choose Document for Verification:</label><br>
                        <br><br>
                         <input type="file" name="fileupload" accept=".pdf,.jpeg,.jpg,.png" required><br><br>
                         <div class="text-danger"></div>
                      </div>
                 </div>

                <div class="row">
                   <input type="submit" name="save" id="btnRegister" class="btn" value="Submit" onclick="gstno()">
                </div>
             </form>
         </div>
         <!-- jquery latest version -->
        <script src="assets/js/vendor/jquery-2.2.4.min.js">
            function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax.php?q="+str,true);
    xmlhttp.send();
  }
}
        </script>
        <!-- bootstrap 4 js -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="assets/js/jquery.slicknav.min.js"></script>

        <!-- start chart js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <!-- start highcharts js -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <!-- start zingchart js -->
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
        </script>
        <!-- all line chart activation -->
        <script src="assets/js/line-chart.js"></script>
        <!-- all pie chart -->
        <script src="assets/js/pie-chart.js"></script> <!-- Start datatable js -->
         <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
         <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
         <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
         <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
         <!-- others plugins -->
         <script src="assets/js/plugins.js"></script>
         <script src="assets/js/scripts.js"></script>
         <script src="scripts.js"></script>



</div></body></html>