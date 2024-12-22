<?php
$title = "Home";
$css = '<link rel="stylesheet" href="CSS/testimonial.css">
<link rel="stylesheet" href="CSS/faq.css">
<link rel="stylesheet" href="CSS/Potential.css">
<link rel="stylesheet" href="CSS/course_cards.css">
<link rel="stylesheet" href="CSS/course-slider.css">
<link rel="stylesheet" href="CSS/members.css">
<link rel="stylesheet" href="CSS/promis.css">
<link rel="stylesheet" href="CSS/homepage.css">
<link rel="stylesheet" href="CSS/why-jiet.css">
<link rel="stylesheet" href="CSS/cmessage.css">
';
require 'sections/header.php';

?>
<style>

</style>
<div class="container-fluid my-4 banner">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 ">
      <div class="row d-flex justify-content-evenly">
        <div class="col-md-6 col-lg-8">
          <h1>
            <span class="head_start">Your Pathway To </span><br>
            Success
          </h1>
          <h2>
            join JIET Coaching and unlock your potential with experts guidence for Neet, JEE, and NDA
            preparation
          </h2>
        </div>
        <div class="col-md-5 col-lg-3">
          <div class="img_div">
            <img src="images/banner_revamp_01.png" alt="" class="w-100">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    
require 'sections/course_slider.php';
?>
<!-- Navigation Buttons -->
<!-- <div class="navigation-buttons text-center mt-4">
            <button id="prevBtn" class=""><i class="bi bi-arrow-left-short fs-3"></i></button>
            <button id="nextBtn" class=""><i class="bi bi-arrow-right-short fs-3"></i></button>
        </div> -->

<!-- modules cards  -->
<?php
    
require 'sections/why-jiet.php';
?>
<!-- potential  -->

<?php
    
require 'sections/Potential.php';
?>
  <!-- end  -->

  <!-- courses -->
  <?php
    
  require 'sections/courses.php';
  ?>

  <!-- courses end -->
  <!-- promisses  -->
  <?php
    
  require 'sections/promises.php';
  ?>
  <!-- end  -->
<!-- Director message  -->
<?php
    
require 'sections/director_msg.php';
?>
 <!-- message end  -->

  <!-- testimonial  -->
  <?php
    
  require 'sections/testimonials.php';
  ?>
  
  <!-- end  -->
 <!-- faq  -->
 <?php
    
 require 'sections/faq.php';
 ?>
  <!-- end  -->

<script>
 
</script>

<!-- end testimonial  -->
<?php
    
    $js='<script src="JS/slider.js"></script>
    <script src="JS/testominial.js"></script>
    <script src="JS/faq.js"></script>';
require 'sections/footer.php';
?>