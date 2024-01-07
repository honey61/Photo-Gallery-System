
 <link rel="shortcut icon" type="image/x-icon" href="images/flogo.png">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      /* header */
      .site-navbar{
        position: inherit;
      }
      .site-navbar .logo a{
        color: #000;
        text-shadow: 0 0 40px black;
        text-decoration: none;
        font-size: 40px;
        font-weight: 900;
        padding: 0 15px;
      }
      .site-navbar .logo a img{
        width: 300px;
        height: auto;
        /*background-color: #046f6f;*/
        margin-bottom: 20px;
      }
      .site-navbar .iconlogo a img{
        width: 300px;
        height: auto;
        /*background-color: #046f6f;*/
        margin-bottom: 20px;
      }
      .site-navbar .tabs a{
        display: inline;
        /*text-shadow: 0 0 40px black;*/
        text-decoration: none;
        color: #fff;
        font-size: 60px;
        font-weight: 900;
        line-height: initial;
        /*box-shadow: inset 0 0 20px 5px black;*/
        margin-left: 45px;
        /*background-color: #00ffff54;*/
      }
      /*.site-navbar .tabs a:hover{
        box-shadow: inset 0 0 20px 5px #2f6a8c;
        background-color: #00ffff;
      }*/
      .site-navbar .contact{
        margin-top: 45px;
      }
      .site-navbar .contact a{
        display: inline;
        /*text-shadow: 0 0 40px black;*/
        text-decoration: none;
        color: #fff;
        font-size: 60px;
        font-weight: 900;
        line-height: initial;
        /*box-shadow: inset 0 0 20px 5px black;*/
        margin-left: 10px;
        /*back
      ground-color: #00ffff54;*/
      }
      .about {
          
         width: 65%;
         position: relative;
         left: 20%;
         right: 20%;
          
        }
        .containt{
          text-align: center;
          
        }
      
      /*.site-navbar .contact a:hover{
        box-shadow: inset 0 0 20px 5px #2f6a8c;
        
        background-color: #00ffff;
      }*/
      @media (max-width: 780px) and (min-width: 280px){
        .site-navbar .logo a{
          font-size: 36px;
        }
        .site-navbar .tabs a{
          font-size: 2em;
          display: inherit;
          margin-top: 20px;
        }
        .site-navbar .contact a{
          font-size: 2em;
          display: inherit;
          margin-top: 20px;
        }
        
      }
    </style><?php include('header.php');?>
 <div class="about"> 
   <div class="containt"><p><div class="effect">
        <h2>Photo Gallery System</h2></div>
          
   For futher information you can contact us by provided contact number
   <ul>
       <li>Rohit :- 8449369073</li>
       <li>Anmol   :- 8477934986</li>

   </ul>
  
  <H6 style="color:#000;">OR YOU CAN ALSO MAIL US ON </h6> 
   <ul>
     <li><a href="hs8126246@gmail.com"> Email:- rohit121joshi@gmail.com</a></li>
     <li><a href="ankushpainuly308@gmail.com"> Email :- anmolemmanuel17@gmail.com</a></li>

     </ul>

    </p></div></div>



    <?php include('footer.php');?>
    <style>
  h2 {
margin: 0;
font-family: "Montserrat", sans-serif;
font-size: 8vh;
letter-spacing: 1vh;
color: white;
background: Url("images/nature_small_8.jpg");
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
animation: shine 8s linear infinite;}

@keyframes shine {
from {
background-position: center O;}
to{
background-position: center 200%;}
}

.effect
{
background: radial-gradient (ellipse at bottom,
#022227 0%, #000000 100%) ; position: relative;


margin: 0;
display: grid;
place-items: center;
}

  </style>