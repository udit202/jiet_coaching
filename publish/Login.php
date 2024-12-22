<?php
$title = "Login";
$css = '';
require 'sections/header.php';

?>
<style>
  .navbar_div ul>li>.link_btn:hover{
    color: white;
}
</style>
   <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-sm-6 col-md-4 my-5">
            <div class="form_container my-5 shadow rounded p-4">
                <div class="comapny_logo my-4 text-center">
                    <!-- <h3 class="text-center">Company Logo</h3> -->
                    <img src="images/Screenshot_2024-12-18_000219-removebg-preview.png" alt=""
                    style="width: 150px;">
                </div>
                <form >
                    <div class="mb-3 ">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                   
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-6"><a href="#">Forget Password</a></div>
                        <div class="col-6"><a href="#">New User Register?</a></div>
                      </div>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>                    
                   
                  </form>
            </div>
        </div>
    </div>
   </div>
   <?php
    
    $js='';
require 'sections/footer.php';
?>
