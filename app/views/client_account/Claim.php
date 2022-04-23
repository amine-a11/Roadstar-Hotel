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
            <button class="picture" >
                <i class="fa-solid fa-user"></i>
            </button>
            <div class="information">
                Mehrez Bey
            </div>
        </div>
        <form action="" method="post">
            <textarea name="claim"  rows="5" placeholder="Express yourself !" autofocus  style="resize: none;"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
</div>

<script src="<?php echo URLROOT ?>/public/js/client-dashbord-script.js"></script>

</body>
</html>