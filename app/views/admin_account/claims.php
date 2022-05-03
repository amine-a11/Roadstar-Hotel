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
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-dashbord-complaints-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/admin-claims.js" defer></script>
    <!---->
<body>
<body>

<?php
    include "admin_dashbord.php";
?>
<div class="complaints">
        <?php foreach($data['complaint'] as $complaint) : ?>
            <div class="complaint">
                <div class="user">
                    <div class="picture">
                    <?php if(file_exists("C:/wamp64/www/Roadstar-Hotel/public/images/clientsImages/".$complaint->user_id.".jpg")): ?>
                        <a class="picture" href="<?php echo URLROOT ?>/admin_account/clients"><img style="border-radius:50%;width:10vh;" src="<?php echo URLROOT ?>/public/images/clientsImages/<?php echo $complaint->user_id?>.jpg" alt=""></a>
                    <?php else : ?>
                        <div class="picture">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="details">
                            <div class="name"><?php echo $complaint->user_fname ." ".$complaint->user_lname?></div>
                            <div class="date"><?php echo $complaint->Date?></div>
                    </div>
                </div>
                <div class="content">
                    <?php echo $complaint->content?>
                </div>
                <div class="buttons">
                    <form class="Dforms" action="<?php echo URLROOT . "/admin_account/deleteComplaint/" . $complaint->id_complaint ?>" method="POST">
                        <input type="submit" name="delete" value='&times;' class="delete">
                    </form>
                    <a href="mailto:<?php echo $complaint->email?>"><i class="fa-solid fa-reply"></i></a>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
</div>

</body>
</html>