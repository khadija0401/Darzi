<?php
include 'db.php';
session_start();
$shop_name=$_GET['shop_name'];
$_SESSION['shop_name']=$shop_name;
$username=$_GET['username'];
$_SESSION['username']=$username;

?>
<!DOCTYPE html>
<html>
 <head>
  <title>DARZI</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  
  <br />
  <div class="container">
  <h2 align="center"><?php echo $username ?>,You are talking to  <?php echo $shop_name?></h2>
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" value="<?php echo $username; ?>"  >
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
</html>





<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.0/js.cookie.js"></script>
<script>
// $(window).on('load',function(){
//             setTimeout(function(){
//             if(!Cookies.get('modalShown')) {
//             	$("#myModal").modal('show');
//               Cookies.set('modalShown', true);
//             } else {
//             	// alert('Your modal won\'t show again as it\'s shown before.');
//             }
        			
//     },3000);
//  });
// $(window).on('load',function(){
//     var delayMs = 1500; // delay in milliseconds
    
//     setTimeout(function(){
//         $('#myModal').modal('show');
//     }, delayMs);
// });  






$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>

<style>
body {
	font-family: 'Varela Round', sans-serif;

}
.modal-login {
	width: 320px;
}
.modal-login .modal-content {
	border-radius: 1px;
	border: none;
}
.modal-login .modal-header {
	position: relative;
	justify-content: center;
	background: #f2f2f2;
}
.modal-login .modal-body {
	padding: 30px;
}
.modal-login .modal-footer {
	background: #f2f2f2;
}
.modal-login h4 {
	text-align: center;
	font-size: 26px;
}
.modal-login label {
	font-weight: normal;
	font-size: 13px;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 38px;
	border-radius: 2px; 
}
.modal-login .hint-text {
	text-align: center;
}
.modal-login .close {
	position: absolute;
	top: 15px;
	right: 15px;
}
.modal-login .checkbox-inline {
	margin-top: 12px;
}
.modal-login input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.modal-login .btn {
	min-width: 100px;
	background: #3498db;
	border: none;
	line-height: normal;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #248bd0;
}
.modal-login .hint-text a {
	color: #999;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
body.modal-open .container{
    -webkit-filter: blur(10px);
    -moz-filter: blur(10px);
    -o-filter: blur(10px);
    -ms-filter: blur(10px);
    filter: blur(10px);
}
</style>
<!-- Modal HTML -->
<!-- <div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
<div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li id="tab1" class=" active tab-style login-shadow "><a href="" data-toggle="tab">Log In</a></li>
              <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
              
            </ul>
        </div>
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">

    <div class="modal-body">
        <div id="myTabContent" class="tab-content">
       
        <div class="tab-pane fade active in" id="signin">
			<form action="" method="post">
				<div class="modal-header">				
					<h4 class="modal-title">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" required="required" >
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Password</label>
							
						</div>
						
						<input type="password" class="form-control" name="pass" required="required">
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					
					<input type="submit" class="btn btn-primary" value="Login" name="login">
				</div>
			</form>
		</div>
	</div>
</div>     
</div>
    
    </div>
  </div>

  </div>
    
    </div>
  </div> -->
<!-- Button trigger modal -->


<!-- Modal -->
<!-- <div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li id="tab1" class=" active tab-style login-shadow "><a href="" data-toggle="tab">Log In</a></li>
              <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
              
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
       
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal">
            <fieldset>
             Sign In Form 
             Text input-->
              
               <!-- <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>
               -->
              
            <!-- Password input-->
            <!-- <div class="group">
<input required="" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label>
    </div>
<em>minimum 6 characters</em>

           <div class="forgot-link">
            <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
            </div>
             -->

            <!-- Button -->
            <!-- <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
              <input type="submit" class="btn btn-primary" value="Login" name="login">
              </div>
            </div>
            </fieldset>
            </form>
        </div>
          
          
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal">
            <fieldset> -->
            <!-- Sign Up Form -->
            <!-- Text input-->
            <!-- <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">First Name</label></div>
             -->
            <!-- Text input-->
            <!-- <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Last Name</label></div>
             -->
            <!-- Password input-->
            <!-- <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email</label></div>
             -->
            <!-- Text input-->
            <!-- <div class="group">
<input required="" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label></div>
              <em>1-8 Characters</em>
             -->
              <!-- <div class="group2">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Country</label></div>
             -->
            
            
            <!-- Button -->
            <!-- <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div> -->
      <!--<div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>-->
    <!-- </div>
  </div>
</div>
   -->
   

<!--modal2-->

<!-- <div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
        <fieldset>
        <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>
        
        
        <div class="control-group">
              <label class="control-label" for="forpassword"></label>
              <div class="controls">
                <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
              </div>
            </div>
          </fieldset>
            </form>
          
      </div>
    </div>
    
  </div>
</div> --> 