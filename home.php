<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<?php include('header.php');
?>
<style type="text/css">
  .img-fluid{
    padding: 8px;
  }
</style>

    <div class="site-section border-bottom">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-md-7" data-aos="fade-up">
            <div class="effect">
          <h2>My Photography</h2></div>
          </div>
        </div>

        <div class="row">
          <?php
            include('admin/home/database.php');
            $data = mysqli_query($con, "SELECT * FROM covers");
            while($row = mysqli_fetch_assoc($data)){
              // echo "<pre>";print_r($row);
          ?>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a class="image-gradient" href="photos.php?coverID=<?php echo $row['cov_id']; ?>">
              <figure>
                <img src="admin/cover/<?php echo $row['covImgName']; ?>" alt="" class="img-fluid" style="width: 100%;height: 300px;">
              </figure>
              <div class="text">
                <h3><?php echo $row['covTitile']; ?></h3>
                <span><?php echo $row['covShortDetail']; ?></span>
              </div>
            </a>
          </div>
        <?php } ?>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a class="image-gradient" href="photos.php">
            </a>
          </div> 
        </div>
      </div>
    </div>

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