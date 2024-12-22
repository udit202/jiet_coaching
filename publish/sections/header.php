<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
    echo $title;
?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="CSS/home.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
        <?php
        echo $css;
    ?>
        <style>
           .link_div ul>li>.login_btn:hover{
            color: white;
           }


        </style>
        <script src="JS/sticky-menu.js"></script>
</head>
<body>
    
    <!-- navbar -->
    <div class="container-fluid navbar_div pt-2 ">
        <div class="row d-flex justify-content-evenly">
            <div class="col-md-12 col-lg-12 col-xl-3">
                <div class="row d-flex justify-content-start align-items-center">
                    <div class="col-10 row d-flex justify-content-start">
                        <!-- <h1>Logo</h1> -->
                        <img src="images/Screenshot_2024-12-18_000219-removebg-preview.png" alt=""
                            style="width: 150px;">
                    </div>
                    <div class="col-2 d-flex justify-content-end align-items-center d-block d-xl-none">
                        <i class="bi bi-list fs-3" id="open_btn"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-9 d-none d-xl-block link_div">
                <div class="w-100 d-flex justify-content-end align-items-center">
                    <ul class="d-flex justify-content-end align-items-center ">
                        <li><a href="Index.php">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="courses.php">Course</a></li>
                        <!-- <li><a href="">Scholarships</a></li>
                        <li><a href="">Result</a></li>
                        <li><a href="">Test Series</a></li> -->
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="Register.php" class="btn btn-primary link_btn" style="border-radius: 25px; padding: 5px 25px; color: white;">Register</a></li>
                        <li><a href="Login.php" class="btn btn-outline-primary link_btn login_btn" style="border-radius: 25px; padding: 5px 25px; ">Login</a></li>
                        
                        <!-- <li><img src="images/OIP.jpg" alt="" style="width: 30px; height: 30px; border-radius: 25px;">Mr.Gourav</li>  -->

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- side navbar  -->
    <div class="side_nav shadow " id="side_nav">
        <div class="close_btn_div text-end  m-2 p-2">
            <i class="bi bi-x-lg fs-3  " id="menu_close_btn"></i>
        </div>
        <div class="w-100 p-4">
            <ul class=" ">
                <li><a href="Index.php">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="courses.php">Course</a></li>
                        <!-- <li><a href="">Scholarships</a></li>
                        <li><a href="">Result</a></li>
                        <li><a href="">Test Series</a></li> -->
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="Register.php" class="btn btn-primary link_btn" style="border-radius: 25px; padding: 5px 25px; color: white;">Register</a></li>
                        <li><a href="Login.php" class="btn btn-outline-primary link_btn login_btn" style="border-radius: 25px; padding: 5px 25px; ">Login</a></li>
                        
                <!-- <li><img src="images/OIP.jpg" alt="" style="width: 30px; height: 30px; border-radius: 25px;">Mr.Gourav</li>  -->

            </ul>
        </div>
    </div>