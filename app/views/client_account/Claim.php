<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>Client space | Claim</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!--client-dashbord Style File-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/client-dashbord-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <!---->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/client-dashbord-claim-style.css">
<body>
<body>

<?php
// if(session_status() == PHP_SESSION_NONE){
//     session_start();
// }
    include "client_dashbord.php";
?>

<div class="claiming-space">
    <div class="heading">
        <div class="left-part">
            <i class="fa-solid fa-file-circle-exclamation"></i>
        </div>
        <div class="right-part">
            <div class="title">complaint space</div>
        </div>
    </div>

    <div class="content">
        <div class="profil">
            <?php if(file_exists("C:/wamp64/www/Roadstar-Hotel/public/images/clientsImages/".$_SESSION['user_id'].".jpg")): ?>
                <a href="<?php echo URLROOT ?>/client_account/client_dashbord"><img style="border-radius:50%;width:9vh;height:9vh;margin-left:10px;" src="<?php echo URLROOT ?>/public/images/clientsImages/<?php echo $_SESSION['user_id'] ?>.jpg" alt=""></a>
            <?php else :?>
                <a class="picture" href="<?php echo URLROOT ?>/client_account/client_dashbord"><i class="fa-solid fa-user"></i></a>
            <?php endif; ?>

            <!-- <button class="picture" >
                <i class="fa-solid fa-user"></i>
            </button> -->
            <div class="information">
                <?php echo $_SESSION["user_fname"]." ".$_SESSION["user_lname"] ;?>
            </div>
        </div>
        <form action="" method="POST">
            <textarea name="complaint"  rows="5" placeholder="Express yourself !" autofocus  style="resize: none;"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
</div>

<script src="<?php echo URLROOT ?>/public/js/client-dashbord-script.js"></script>
</body>
</html>