<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>Client space</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!--client-dashbord Style File-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/client-dashbord-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <!---->
</head>
<body>
    <!------------------------------------------------Start Header---------------------------------------------------------------------->
    <header>
        <div class="left-column">
            <a href="<?php echo URLROOT ?>/pages/main" class="logo">RoadStar Hotel</a>
        </div>
        <div class="right-column">
            <div class="profil-content">
                <div class="profil-picture">
                    <button class="picture" >
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <!-- <button><i class="fa-solid fa-angle-down"></i></button> -->
                    <!--The profil information-->

                </div>
                <div class="information">
                    <!-- <div class="name"><?php echo $_SESSION["user_fname"]." ".$_SESSION["user_lname"] ;?></div>
                    <div class="country"><?php echo $_SESSION['country'] ?></div> -->
                </div>
            </div>
            <button  class="log-out"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
        </div>
    </header>
        <!------------------------------------------------Start Header---------------------------------------------------------------------->
        <!------------------------------------------------Start side bar---------------------------------------------------------------------->
        <div class="bars">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <aside>
                <div class="button-aside"><a href="<?php echo URLROOT ?>/admin_account/clients"  class="button-aside-content">Clients</a></div>
                <div class="button-aside"><a href=""  class="button-aside-content">Rooms</a></div>
                <div class="button-aside"><a href="" class="button-aside-content">Reservations</a></div>
                <div class="button-aside"><a href="" class="button-aside-content">Claims</a></div>
                <div class="button-aside"><a href="" class="button-aside-content">Statistics</a></div>
                <div class="button-aside"><a href="<?php echo URLROOT ?>/admin_account/admin_dashbord"  class="button-aside-content">Back to menu</a></div>
            </aside>
        <!------------------------------------------------end side bar---------------------------------------------------------------------->

    
        <script src="<?php echo URLROOT ?>/public/js/client-dashbord-script.js"></script>

</body>
</html>