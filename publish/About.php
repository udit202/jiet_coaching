<?php
$title = "About";
$css ='
<link rel="stylesheet" href="CSS/members.css">
<link rel="stylesheet" href="CSS/faq.css">
<link rel="stylesheet" href="CSS/Potential.css">
<link rel="stylesheet" href="CSS/cmessage.css">
<link rel="stylesheet" href="CSS/why-jiet.css">';
require 'sections/header.php';

?>
<style>
    .vision p{
        text-align: justify;
    }
    .keyword{
        color:rgb(13, 110, 253) ;
    }
</style>
<div class="container-fluid  bg-primary text-center text-white py-4">

<h1 class="fs-1">About Us</h1>
<p class="fs-5">Unlock Your Potential with jiet Coaching</p>


</div>
<div class="text-center my-3">
    <a class="fs-6 btn btn-outline-primary px-5" style="border-radius: 25px;">Join us Today</a>
</div>

<div class="container vision ">
    <div class="row m-2">
        <div class="col-md-7 d-flex justify-content-center align-items-center ">
            <div class="p-2">
                <h2>Our<span class="keyword"> Vision</span> </h2>


            <p>JIET Coaching strives to empower students from 8th to 12th grade with a strong academic foundation, preparing them for board exams and competitive exams like JEE, NEET, and NDA. Through innovative teaching, personalized guidance, and a focus on holistic development, we aim to nurture confident, disciplined, and successful individuals ready to excel in academics and life.</p>
            <img src="images/Screenshot_2024-12-18_000219-removebg-preview.png" alt=""
                style="width: 140px;" > <br>
            
            </div>
        </div>
        <div class="col-md-5">
            <img src="images/Vision.png" alt="" class="w-100">
        </div>
    </div>
</div>
<div class="container vision m">
    <div class="row m-2">
        <div class="col-md-7 d-flex justify-content-center align-items-center order-md-2">
            <div class="p-2">
                <h2>Our <span class="keyword">Mission</span></h2>


            <p>Our mission at JIET Coaching is to deliver exceptional education to students from 8th to 12th grade, equipping them to excel in board examinations and competitive exams like JEE, NEET, and NDA. We are dedicated to fostering a result-oriented learning environment through experienced faculty, advanced teaching methodologies, and a structured curriculum. By focusing on personalized attention, regular progress tracking, and holistic development, we aim to nurture critical thinking, discipline, and self-confidence in every student. Our goal is to inspire students to achieve their full potential and prepare them to contribute positively to society while pursuing their dreams with determination and excellence.</p>
            <img src="images/Screenshot_2024-12-18_000219-removebg-preview.png" alt=""
                style="width: 140px;" > <br>
            
            </div>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="images/Mission.webp" alt="" class="w-100">
        </div>
        
       
    </div>
</div>
<?php
require 'sections/why-jiet.php';
require 'sections/Potential.php';
require 'sections/director_msg.php'; 
require 'sections/testimonials.php';
require 'sections/faq.php';
?>

  
    <?php
    $js='<script src="JS/testominial.js"></script>
    <script src="JS/faq.js"></script>';
require 'sections/footer.php';
?>