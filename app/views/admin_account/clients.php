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
    <!-- main style -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-dashbord-clients-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/admin-client.js" defer></script>
    <!---->
<body>
<body>

<?php
// if(session_status() == PHP_SESSION_NONE){
//     session_start();
// }
    include "admin_dashbord.php";
?>
<div class="clients">
    <?php foreach($data['client'] as $client) : ?>
        <div class="client">
            <div class="heading">
            <?php if(file_exists("C:/wamp64/www/Roadstar-Hotel/public/images/clientsImages/".$client->user_id.".jpg")): ?>
                <a class="picture" style="overflow: hidden;" href="<?php echo URLROOT ?>/admin_account/clients"><img style="border-radius:50% !important;width:min(10vw,80px); overflow:hidden;" src="<?php echo URLROOT ?>/public/images/clientsImages/<?php echo $client->user_id?>.jpg" alt=""></a>
            <?php else : ?>
                    <div class="picture">
                        <i class="fa-solid fa-user"></i>
                    </div>
            <?php endif; ?>
            </div>
            <div class="information">
                <div class="name"><?php echo $client->user_fname ." ". $client->user_lname?></div>
                <div class="country"><?php echo $client->country?></div>
                <a class="mail" href="mailto:<?php echo $client->email?>"><?php echo $client->email?></a>
            </div>
            <div class="buttons">
                
                <form class="Imyform" action="<?php echo URLROOT . "/admin_account/getUserInfo/" . $client->user_id ?>" >
                    <input type="submit" name="userinfo" value="userInfo" class="userInfo">
                </form>
                <form class="Dmyform" action="<?php echo URLROOT . "/admin_account/delete/" . $client->user_id ?>" >
                    <input type="submit" name="delete" value="Delete" class="delete">
                </form>
            </div>
        </div>
        <?php endforeach; ?>
</div>
</body>
</html>