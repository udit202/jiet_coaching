<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="CSS/AdminDashboard.css">  
</head>
<body>
    <div class="container-fluid pt-2">
        <div class="top_menu">
            <div class="logo">
                <img src="images/8867.Microsoft_5F00_Logo_2D00_for_2D00_screen.jpg" alt="" class="mx-2" style="width: 50PX" />
            </div>

            <div class="top_menu_list">
                <ul class="my-2 mx-3 menu_bars">

                    <li class="ms-3  ">
                        <i class="bi bi-list menu_open_btn"></i>
                    </li>


                </ul>
            </div>
        </div>
        <div class="dash_layout">
            <div class="sidemenu">
                <div class="mt-2 sideblock">
                    <div class="mt-2 text-center">
                        <div class="text-end w-100 menu_close_btn">
                            <i class="bi bi-x-lg close_me"></i>
                        </div>
                        <img src="images/logo.png" alt="" class="mx-2" style="width: 140PX;border-radius:25px;" />
                        <!-- <h2 style="color:white;font-family:Algerian;">Logo</h2> -->
                    </div>
                   <h6 class="text-center text-white">Admin</h6>
                    <ul class="mt-4">
                        
                        <hr style="color:white;" />
                        <li class="drop_btn">
                            <a href=""><span><i class="bi bi-calendar2-plus-fill px-2"></i>Dashbaoard</span><span></span></a>

                        </li>
                        <hr style="color:white;" />
                        <li class="drop_btn">
                            <a href=""><span><i class="bi bi-calendar2-plus-fill px-2"></i>Requests</span><span></span></a>

                        </li>
                        <hr style="color:white;" />
                        <li class="drop_btn">
                            <a href=""><span><i class="bi bi-calendar2-plus-fill px-2"></i>Verified</span><span></span></a>

                        </li>
                        <hr style="color:white;" />
                        <li class="drop_btn">
                            <a href=""><span><i class="bi bi-calendar2-plus-fill px-2"></i>users</span><span></span></a>

                        </li>
                        <hr style="color:white;" />
                        <li class="drop_btn">
                            <a href=""><span><i class="bi bi-calendar2-plus-fill px-2"></i>Generals</span><span></span></a>
                        </li>
                        
                        <hr style="color:white;" />
                        <li class="drop_btn">
                            <a href="" class="btn btn-danger "><span><i class="bi bi-box-arrow-right px-2"></i>Log-Out</span><span></span></a>

                        </li>

                    </ul>
                </div>

            </div>
            <div class="containt_div">
                <div class="main">
                    <div class="pages">
                        <div class="px-3">