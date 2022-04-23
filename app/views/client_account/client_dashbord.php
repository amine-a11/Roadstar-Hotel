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
                    <div class="name">Mehrez Bey</div>
                    <div class="country">Tunisia</div>
                </div>
            </div>
            <button class="log-out"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
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
                <div class="button-aside"><a href=""  class="button-aside-content">Book now</a></div>
                    <div class="button-aside"><a href=""  class="button-aside-content">Cancel reservation</a></div>
                    <div class="button-aside"><a href="<?php echo URLROOT ?>/client_account/claim" class="button-aside-content">Claim</a></div>
                    <div class="button-aside drop">
                        <a href=""  class="button-aside-content">History</a>
                        <button class="drop-down"><i class="fa-solid fa-plus"></i></button>    
                    </div>
                    
                <div class="button-aside-hide ">
                    <div class="button-aside">
                        <a href="claim.php"  class="button-aside-content">Booking history</a>
                    </div>
                    <div class="button-aside">
                        <a href="claim.php"  class="button-aside-content">Claims history</a>
                    </div>
                </div>
            </aside>
        <!------------------------------------------------end side bar---------------------------------------------------------------------->

    

<!----------------------------------- Start Settings ----------------------------------------->
<div class="profil-settings">
    <div class="heading">
        <button class="picture">
            <i class="fa-solid fa-user"></i>
        </button>
        <div class="information">
            <div class="name">Mehrez Bey</div>
        </div>
    </div>
    <form action="" method="post" class="form-content">
        <input type="text" name="first-name" class="first-name" value="Mehrez" readonly>
        <input type="text" name="last-name" class="last-name" value="Bey" readonly>
        <input type="tel" name="phone-number" class="phone-number" value="99999999" readonly>
        <input type="email" name="email" class="email" value="mehrezbey@gmail.com" readonly>
        <input type="password" name="password" class="password" value="motdepasse" readonly>
        <div class="buttons">
            <button class="update">Update</button>
            <button type="submit" class="save">Save</button>
        </div>

    </form>


</div>
<button class="settings">
    <i class="fa-solid fa-gear"></i>
</button>
<!-----------------------------------End Settings--------------------------------------------->


<script src="<?php echo URLROOT ?>/public/js/client-dashbord-script.js"></script>

</body>
</html>