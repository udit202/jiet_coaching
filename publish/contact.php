<?php
$title = "Contact Us";
$css ='
<link rel="stylesheet" href="CSS/members.css">
<link rel="stylesheet" href="CSS/faq.css">
<link rel="stylesheet" href="CSS/Potential.css">
<link rel="stylesheet" href="CSS/cmessage.css">
<link rel="stylesheet" href="CSS/why-jiet.css">';
require 'sections/header.php';
?>

<style>
  
    .contact-form {
        display: flex;
        flex-direction: column;
        width: 50%;
    }

    .contact-form label {
        font-size: 16px;
        color: rgb(2, 129, 179);
        margin-bottom: 5px;
    }

    .contact-form input,
    .contact-form textarea {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid rgb(2, 129, 179);
        border-radius: 5px;
        font-size: 14px;
    }

   

    
</style>

<div class="container-fluid my-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 ">
            <div class="row">
                <div class="col-md-10 contact_head">
                    <h2 class="keyword">
                        Lets Get in Touch!

                    </h2>
                    <p>
                        Have a question or need assistance? Reach out to us via email, phone, or the contact form below.
                        We're eager to assist you. Nice hearing from you!
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <img alt="Illustration of a person wearing glasses and a purple hoodie" height="400"
                        src="images/get-started.23be618-removebg-preview.png" width="" class="w-100" />
                </div>
                <div class="col-md-5">
                    <div class="contact-form w-100 ">
                        <form>
                            <div class="mb-3 w-100">
                                <label for="exampleInputEmail1" class="form-label">Full Name:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 w-100">
                                <label for="exampleInputEmail1" class="form-label">Email:</label>
                                <input type="email" class="form-control w-100" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3 text-end w-100">
                                <button type="submit" class="btn btn-outline-primary px-5" style="border-radius: 25px;">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center my-3">
    <a class="fs-6 btn btn-outline-primary px-5" style="border-radius: 25px;">Join us Today</a>
</div>

<?php
    
require 'sections/faq.php';
?>
    <?php
    $js='<script src="JS/testominial.js"></script>
    <script src="JS/faq.js"></script>';
require 'sections/footer.php';
?>