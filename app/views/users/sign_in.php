<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>Sign In</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!--Main CSS File --> 
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/main-style.css">
    <!--CSS File-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/sign-in-style.css">
    <!-- js -->
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js"></script>
</head>
<body>
     <?php
     if($data){
         if($data['loginError']!=''){
             $e=$data['loginError'];
             echo "<script>Swal.fire({icon: 'error',title: 'Oops...',text:'$e'});</script>";
         }
     }
     ?>
    <div class="sign-in">
        <div class="container">
            <div class="aside-image .image">
                <img src="<?php echo URLROOT ?>/public/images/hotel2.png" alt="Hotel">
            </div>

            <div class="sign-in-form">
                <a href="<?php echo URLROOT ?>/index/main" class="logo-heading" title="Back to the main page">
                    <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="Logo">
                    <div>RoadStar Hotel</div>
                </a>
                <div class="sign-in-content">
                    <div class="title">
                        Login
                    </div>

                    <div class="description">
                        <div class="min-title">
                            Login To Your Account
                        </div>
                        
                        <div class="text">
                            Thank you for get back to RoadStar Hotel, let's our the best recommendation for you
                        </div>

                        <form action="<?php echo URLROOT ?>/users/sign_in" method="POST">

                            <!-- still Control-->
                            <div class="user-name-field field">
                                <label for="user-name" class="user-name">Username</label>
                                <input type="text" placeholder="Email" id="user-name" required name="user-name">
                            </div>

                            <div class="password-field field">
                                <label class="password" for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="password" required>
                            </div>

                            <input type="submit" value="Sign In" class="sign-in-button">

                            <div class="to-sign-up">
                                Don't have an account yet? <a href="<?php echo URLROOT ?>/users/sign_up" target="_blank" title="create an account">Join RoadStar Hotel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>