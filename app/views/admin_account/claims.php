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
    <!---->
<body>
<body>

<?php
// if(session_status() == PHP_SESSION_NONE){
//     session_start();
// }
    include "admin_dashbord.php";
?>
<div class="complaints">
    <?php foreach($data['complaints'] as $complaints) : ?>
        <div class="complaint">
            <div class="heading">
                <div class="picture">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="information">
                <div class="name"><?php echo $client->user_fname ." ". $client->user_lname?></div>
                <div class="country"><?php echo $client->country?></div>
                <a class="mail" href="mailto:<?php echo $client->email?>"><?php echo $client->email?></a>
            </div>
            <div class="buttons">
                <a href="" class="update">Update</a>
                <form action="<?php echo URLROOT . "/admin_account/delete/" . $client->user_id ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="delete">
                </form>
            </div>
        </div>
        <?php endforeach; ?>
</div>
</body>
</html>