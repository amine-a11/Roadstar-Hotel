<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>Client space | Claim</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="../Style/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="../Style/normalize.css">
    <!--client-dashbord Style File-->
    <link rel="stylesheet" href="../Style/client-dashbord-style.css">
    <!-- script -->
    <script src="../js/Reveal-On-Scroll.js" defer></script>
    <!--Claim style-->
    <link rel="stylesheet" href="../Style/client-dashbord-claim-style.css">
</head>
<body>
    
    <?php
        include "../Source/client-dashbord.php";
    ?>
    
    <div class="claiming-space">
        <div class="heading">
            <div class="left-part">
                <i class="fa-solid fa-bell-exclamation"></i>
            </div>
            <div class="right-part">
                <div class="title">complaint space</div>
                <div class="description">Express yourself</div>
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
                <textarea name="" id="" cols="30" rows="10" placeholder="Express yourself!" autofocus  style="resize: none;"></textarea>
                <input type="submit" value="Send">
            </form>
        </div>
    </div>

    <script src="../js/client-dashbord-script.js"></script>
</body>
</html>