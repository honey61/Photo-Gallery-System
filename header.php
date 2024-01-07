<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Image Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="css/swiper.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/flogo.png">

    <style type="text/css">
      
      .site-navbar .contact a:hover{
        box-shadow: inset 0 0 20px 5px #2f6a8c;
        background-color: #00ffff;
      }
      @media (max-width: 780px ) and (min-width: 280px){
        .site-navbar .logo a{
          font-size: 36px;
          color: red;
        }
        .site-navbar .tabs a{
          font-size: 2em;
          color: red;
          display: inherit;
          margin-top: 20px;
        }
        .site-navbar .contact a{
          color: red;
          font-size: 2em;
          display: inherit;
          margin-top: 20px;
        }

      } 
    </style>
    
  </head>
  <body>
  
  <div class="site-wrap">

    
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

    <header  style="background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);"class="site-navbar py-3" role="banner">
      <div class="container-full">
        <div class="col-12 col-xl-12 logo" > 
        

        </div> 
      </div>      
      

      <div class="container">
      <center><h3 style="color:white;">Welcome </h3></center>
        <div class="row align-items-center">
       
     
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="home.php" class="text-black h2 mb-0">  <img src="images/main.png" style="width: 100px;height: auto;"></a><span class="text-primary"></span></a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
          
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
            <div class="form-wrapper"> 
            
        	 <div class="reminder">
           </div>
           
           </div>
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
             
               <ul class="dropdown"> 
                  </ul>
                </li>
                <li class="active"> <a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Log out</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="https://www.facebook.com/Dayen-Bayen-Art-101288444578804/?modal=admin_todo_tour" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
              
                <li>
                  <a href="https://instagram.com/ankush_painuly_photography?utm_medium=copy_link" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="https://m.youtube.com/watch?v=L0x8AjyDbYI&feature=youtu.be" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div> 
      
    </header>




    <style>
      @import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
  margin:0;
}

h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
  color: white;
}
p {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  /* color: #333333; */
}

.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
  color:white;
}
.logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
}

.inner-header {
  height:65vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
  h1 {
    font-size:24px;
  }
}
    </style>
    


<!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">


  
<!--Content before waves-->

<!--Just the logo.. Don't mind this-->


<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>

</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->

<!--Content ends-->