<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>Client space | History of Complaints</title>
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

    <style>
        .content{
            overflow: auto;
            max-height:500px;

        }
        .container-item{
            padding:20px;
            border-bottom:5px solid black;
            /* overflow:auto; */
        }
        .container-item .date-claim{
            font-weight:bold;
            font-size:18px;
            display:flex;
            justify-content:flex-end;
            text-decoration:underline;
        }
        .container-item .content-claim{
            margin-top:10px;
            letter-spacing:1.1px;
            font-size:20px;
        }
        .container-item .content-claim::first-line{
            margin-left:10px;
        }
    </style>
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
            <div class="title">complaint-history space</div>
        </div>
    </div>

    <div class="content">
        <div class="profil">
            <button class="picture" >
                <i class="fa-solid fa-user"></i>
            </button>
            <div class="information">
                <?php echo $_SESSION["user_fname"]." ".$_SESSION["user_lname"] ;?>
            </div>
        </div>
        <?php if(empty($data['complaint'])) {?>
            <div class="not-found"><i class="fa-solid fa-circle-exclamation"></i> No Claims Found</div>
        <?php } ?>
            <?php foreach($data['complaint'] as $complaint): ?>
                <div class="container-item">
                    <div class="date-claim">
                        <?php echo ($complaint->Date) ;?>
                    </div>
                    <div class="content-claim">
                        <?php echo $complaint->content; ?>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>


<script src="<?php echo URLROOT ?>/public/js/client-dashbord-script.js"></script>
</body>
</html>


