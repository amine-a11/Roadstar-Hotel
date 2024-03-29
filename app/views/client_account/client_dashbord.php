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
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/client-dashbord-include-style.css">
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
                    <!-- <button class="picture" >
                        <i class="fa-solid fa-user"></i>
                    </button> -->
                    <?php if(file_exists("C:/wamp64/www/Roadstar-Hotel/public/images/clientsImages/".$_SESSION['user_id'].".jpg")): ?>
                        <a href="<?php echo URLROOT ?>/client_account/client_dashbord"><img style="border-radius:50%;width:10vh;height:10vh;overflow:hidden;" src="<?php echo URLROOT ?>/public/images/clientsImages/<?php echo $_SESSION['user_id'] ?>.jpg" alt=""></a>
                    <?php else :?>
                        <a class="picture" href="<?php echo URLROOT ?>/client_account/client_dashbord"><i class="fa-solid fa-user"></i></a>
                    <?php endif; ?>

                    
                    <!-- <button><i class="fa-solid fa-angle-down"></i></button> -->
                    <!--The profil information-->

                </div>
                <div class="information">
                    <div class="name"><?php echo $_SESSION["user_fname"]." ".$_SESSION["user_lname"] ;?></div>
                    <div class="country"><?php echo $_SESSION['country'] ?></div>
                </div>
            </div>
            <a href="<?php echo URLROOT ?>/users/logout" class="log-out"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
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
                <div class="button-aside"><a href="<?php echo URLROOT ?>/pages/book"  class="button-aside-content">Book now</a></div>
                    <div class="button-aside"><a href="<?php echo URLROOT ?>/client_account/claim" class="button-aside-content">Claim</a></div>
                    <div class="button-aside drop">
                        <a href=""  class="button-aside-content">History</a>
                        <button class="drop-down"><i class="fa-solid fa-plus"></i></button>    
                    </div>
                    
                <div class="button-aside-hide ">
                    <div class="button-aside">
                        <a href="<?php echo URLROOT ?>/client_account/history_booking"  class="button-aside-content">Booking history</a>
                    </div>
                    <div class="button-aside">
                        <a href="<?php echo URLROOT ?>/client_account/history_claims"  class="button-aside-content">Claims history</a>
                    </div>
                </div>
                <div class="button-aside"><a href="<?php echo URLROOT ?>/client_account/client_dashbord"  class="button-aside-content">Back to menu</a></div>
            </aside>
        <!------------------------------------------------end side bar---------------------------------------------------------------------->

    

<!----------------------------------- Start Settings ----------------------------------------->
<div class="profil-settings">
    <div class="heading">
        <button class="picture">
            <i class="fa-solid fa-user"></i>
        </button>
        <div class="information">
            <div class="name"><?php echo $_SESSION["user_fname"]." ".$_SESSION["user_lname"] ;?></div>
        </div>
    </div>
    <?php if (!empty($data['error'])){?>

        <div class="error"><i class="fa-solid fa-circle-exclamation"></i><?php echo $data['error'];?></div>
        <?php } ?>

    <?php $tab = array($_SESSION["user_fname"]);?>
    <form action="<?php echo URLROOT . "/Client_account/client_dashbord"?>" method="POST" class="form-content">
        <input type="email" name="email" class="email" value="<?php echo $_SESSION["email"];?>" readonly>
        <input type="password" name="oldpassword" class="password" value=""  placeholder="Old password">
        <input type="password" name="newpassword" class="password" value=""  placeholder="New password">
        <input type="password" name="cnewpassword" class="password" value=""  placeholder="Confirm new password">
        <div class="buttons">
            <button class="save">Update</button>
            <!-- <a href="<?php echo URLROOT ?>/client_account/client_dashbord/updatePassword" class="save">Save</a> -->
            <input type="submit" name="save" value="Save" class="save">
        </div>
    </form>

</div>
<button class="settings">
    <i class="fa-solid fa-gear"></i>
</button>
<!-- ----------------------------The include---------------------- -->
<?php include "client_dashbord_include.php"?>
<!-----------------------------------End Settings--------------------------------------------->

<script src="<?php echo URLROOT ?>/public/js/client-dashbord-script.js"></script>

</body>
</html>