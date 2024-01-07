<?php include('header.php');?>
<style type="text/css">
  .img-fluid{
    padding: 8px;
  }
</style>
    <div class="" style="" data-stellar-background-ratio="0.5">
    <!--  <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
  
          </div>
        </div>
      </div>
    </div> -->


  

 
      <div style="background-image: url(images/bg.jpg); background-repeat : no-repeat;  " class="row no-gutters" id="lightgallery">
     
      
        <?php
      
          include('admin/home/database.php');
          $coverID = $_GET['coverID'];
          
          $data = mysqli_query($con, "SELECT img FROM imges WHERE cov_id='$coverID'");
          
          while($row = mysqli_fetch_assoc($data)){
            // echo "<re>";print_r($row);
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="admin/images/<?php echo $row['img'];?>" data-sub-html="<h4>Your loving memories.</p>">
        <div class="img"><a href="#"><img src="admin/images/<?php echo $row['img'];?>" style = "border-radius:10% ; " alt="IMage" class="img-fluid"></a></div>
        </div>      
      <?php } ?>
      </div>
    </div>
  </div>

  <?php include('footer.php');?>

 
  <style>
    .img {
  --s: 15px;  /* size of the frame */
  --b: 2px;   /* border thickness */
  --w: 200px; /* width of the image */
  --c: rgba(84, 58, 183, 1);
  
  width: var(--w);
  aspect-ratio: 1;
  object-fit: cover;
  padding: calc(2*var(--s));
  --_g: var(--c) var(--b),#0000 0 calc(100% - var(--b)),var(--c) 0;
  background:
    linear-gradient(      var(--_g)) 50%/100% var(--_i,100%) no-repeat,
    linear-gradient(90deg,var(--_g)) 50%/var(--_i,100%) 100% no-repeat;
  outline: calc(var(--w)/2) solid #0009;
  outline-offset: calc(var(--w)/-2 - 2*var(--s));
  transition: .4s;
  cursor: pointer;
}
.img:hover {
  outline: var(--b) solid var(--c);
  outline-offset: calc(var(--s)/-2);
  --_i: calc(100% - 2*var(--s));
}


  </style>