<!DOCTYPE html>
<html>
<title>Darzi</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif
  }

  body,
  html {
    height: 100%;
    line-height: 1.8;
  }

  /* Full height image header */
  .bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("back.png");
    min-height: 100%;

  }

  .w3-bar .w3-button {
    padding: 16px;
  }

  .searchbar{
    width: 250px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  }
  .searchbar:focus {
  width: 100%;
}
.mySlides {display:none;}

</style>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-wide">DARZI</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> OUR TEAM</a>
        <a href="tlogin.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i>TAILOR'S PORTAL </a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT US</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
        onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
    style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">OUR TEAM</a>
    <a href="tlogin.php" onclick="w3_close()" class="w3-bar-item w3-button">TAILORS PORTAL</a>

    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  </nav>

  <!-- Header with full-height image -->
  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
      <span class="w3-large"><b>Cant Find the right tailor to trust??</span>
      <p><a href="#Search"
          class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Search for
          a Tailor Near You</a></p>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </header>
  <!-- Search Section -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="Search">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>Find Your Tailor</h3>
        <p>Search Tailor by pincode.....</p>

        <div class="container">
          <br />
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true">Search</i></span>
              <input type="text" name="search_text" id="search_text" placeholder="Search by Pincode" class="searchbar" />
            </div>
          </div>
          <br />
          <div id="result"></div>
        </div>



      </div>
      <div class="w3-col m6">
        
         
      </div>
    </div>
  </div>

  <div class="w3-content w3-section">
  
  <img class="mySlides" src="offer2.jpg" style="width:100%">
  <img class="mySlides" src="offer3.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
  <!-- About Section -->
  <div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">ABOUT THE WEBSITE</h3>
    <p class="w3-center w3-large">Key features of our Website</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Friendly UI</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Easy Search for users</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Tailors can upload thier work</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Online Chat with Tailor</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div>
    </div>
  </div>



  <!-- Team Section -->
  <div class="w3-container" style="padding:128px 16px;" id="team">
    <h3 class="w3-center">THE TEAM</h3>
    <p class="w3-center w3-large">The ones who runs this company</p>
    <div class="w3-row-padding " style="margin-top:64px">
      <div class="w3-col l3 m6 w3-margin-bottom"  style="margin-left:200px;">
        <div class="w3-card">
          <img src="ateef.jpg" alt="Ateef Radiowalla" style="width:100%; height:550px;">
          <div class="w3-container">
            <h3>Ateef Radiowalla</h3>
            <p class="w3-opacity">Full Stack Developer</p>
            
            <p><a href="mailto:ateef.radiowalla@gmail.com"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="khadija.jpg" alt="Khadija Morbiwala" style="width:100%; height:550px;">
          <div class="w3-container">
            <h3>Khadija Morbiwala</h3>
            <p class="w3-opacity">Full Stack Developer</p>
            
            <p><a href="mailto:khadija.morbiwala1@gmail.com"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="snehal.jpg" alt="Snehal Phapale" style="width:100%; height:550px;">
          <div class="w3-container">
            <h3>Snehal Phapale</h3>
            <p class="w3-opacity">Full Stack Developer</p>
           
            <p><a href="mailto:snehal.phapale@gmail.com"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Promo Section "Statistics" -->
  <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
    <div class="w3-quarter">
      <span class="w3-xxlarge">14+</span>
      <br>Partners
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">1000+</span>
      <br>Customers
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">2M+</span>
      <br>Happy Clients
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">4M+</span>
      <br>Searches
    </div>
  </div>




  <!-- Contact Section -->
  
    <div class="w3-container" style="padding:128px 16px;" id="contact">
    <h3 class="w3-center">CONTACT</h3> <br>
    <p class="w3-center w3-large">Lets get in touch. Send us a message:</p> <br>
    <div class="w3-row-padding w3-center">
<!--     
      <div class="">
        <i class="fa fa-map-marker w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Address</p>
        <p>Mumbai,India</p>
      </div>
      <div class="">
        <i class="fa fa-phone w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Phone</p>
        <p>+91 8879117413     +91 7738288659  +91 93265 01184</p>
      </div>
      <div class="">
        <i class="fa fa-envelope w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Email</p>
        <p>darzi@gmail.com</p>
      </div>  -->
      <!-- <div class="w3-quarter">
        <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Online Chat with Tailor</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div> -->
    </div>
  </div>

      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
      <!-- Image of location/map -->

    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Team Darzi</a></p>
  </footer>

  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
    }
  </script>
  <script>
    $(document).ready(function () {

      load_data();

      function load_data(query) {
        $.ajax({
          url: "fetch.php",
          method: "POST",
          data: {
            query: query
          },
          success: function (data) {
            $('#result').html(data);
          }
        });
      }
      $('#search_text').keyup(function () {
        var search = $(this).val();
        if (search != '') {
          load_data(search);
        } else {
          load_data();
        }
      });
    });
  </script>
</body>

</html>
