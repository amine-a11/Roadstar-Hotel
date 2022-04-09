<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <!--Web Icons -->
    <link rel="stylesheet" href="../Style/all.min.css">
    <!--Main CSS File-->
    <link rel="stylesheet" href="../Style/main-style.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="../Style/normalize.css">   
     <!-- services CSS file -->
     <link rel="stylesheet" href="../Style/services-style.css">
     <script src="../js/services-script.js" defer></script>
     <script src="../js/Reveal-On-Scroll.js" defer></script>
    <title>RoadStar Signature Services</title>
</head>
<body>
    <!---------------------------------------------------------Start Header---------------------------------------->
    <header>
        <?php
            require "../Source/nav.php"
        ?>
        <div class="background-image">
                <h1>RoadStar Signature Services</h1>
            </div>

</header>

<!----------------------------------------------------End Header------------------------------------------------------->
<!----------------------------------------------------set-the-frequency------------------------------------------------>
<div class="content reveal">
    <div class="container">
        <div class="description">
            <div class="title"><span>Set the Frequency</span> and Your In-House Team Will Follow</div>
            <p>You could be joining us at any one of our properties within the Collection, and you will experience the same signature services. It’s almost as if we become a part of the family — not only getting to know and anticipate your needs but delighting you with surprises along the way. It could be a chilled bottle of champagne after your afternoon swim or games set-out for the children while you’re enjoying some downtime in the spa.</p>
            <p>The possibilities are endless within an RoadStar Collection property.</p>
        </div>
    </div>
</div>

<!--------------------------------------------- image slider --------------------------------------->
<div class="container reveal" >
    <div class="slider">
        <div class="slides" id="slides">
            <span class="slider-img active-img">
                <img src="../images/slide_img1.jpg" alt=""> 
            </span>
            <span class="slider-img">
                <img src="../images/slide_img2.jpg" alt=""> 
            </span>
            <span class="slider-img">
                <img src="../images/slide_img3.jpg" alt=""> 
            </span>
        </div>
        <div class="move">
            <div class="prev" id="prev">
                <i class="fa-solid fa-arrow-left"></i>
            </div>
            <div class="next" id="next">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------Signature Services ----------------------------------------->
<div class="content reveal">
    <div class="container">
        <div class="container1">
            <div class="description class-1">
                <div class="title">Signature Services</div>
                <p>Staying with RoadStar, you can expect exceptionally high standards. These are the services you will receive, wherever in the world you join us.</p>
                <span>Luxury Concierge</span><br><br>
                <span>Private Chef</span><br><br>
                <span>Service Staff</span><br><br>
                <span>Daily Housekeeping</span><br><br>
                <span>Chauffeur</span><br><br>
                <span>Massage Therapists</span><br><br>
                <span>Private Fitness Coach & Physiotherapist</span><br><br>
            </div>
            <div class="class-2">
                <img src="../images/signature_services_img.jpeg" alt="">
            </div>
        </div>

    </div>
</div>

<!----------------------------------------------- the collection ----------------------------------------------->
<div class="content the-collection">
    <div class="container center">
        <div class="description reveal">
            <div class="title center-text"><span>The</span> Collection</div>
            <p>Our ultra-luxury private residences include villas, chalets and spas, as well as a 5-star superior hotel. Each one is chosen for its unique character and is designed impeccably in the signature RoadStar style. Browse our growing portfolio of destinations below.</p>
        </div>
        <div class="hotels">
            <div class="hotel reveal">
                <div class="hotel-pic">
                    <img src="../images/hotel1.jpg" alt="">
                </div>
                <div class="hotel-prop">
                    <div>
                        Switzerland
                    </div>
                    <div>
                        <img src="../images/icons/Chalet.svg" alt="">
                        <img src="../images/icons/Bedrooms_16.svg" alt="">
                        <img src="../images/icons/Spa_1000.svg" alt="">
                        <img src="../images/icons/Ski.svg" alt="">
                    </div>
                </div>
                <div class="hotel-name">RoadStar Crans-Montana</div>
            </div>
            <div class="hotel reveal">
                <div class="hotel-pic">
                    <img src="../images/hotel2.png" alt="">
                </div>
                <div class="hotel-prop"> 
                    <div>
                        Greece
                    </div>
                    <div>
                        <img src="../images/icons/home-icon.svg" alt="">
                        <img src="../images/icons/Bedrooms_6.svg" alt="">
                        <img src="../images/icons/Spa_60.svg" alt="">
                        <img src="../images/icons/water.svg" alt="">
                    </div>
                </div>
                <div class="hotel-name">RoadStar Corfu</div>
            </div>
            <div class="hotel reveal">
                <div class="hotel-pic">
                    <img src="../images/hotel3.jpg" alt="">
                </div>
                <div class="hotel-prop">
                    <div>
                        France
                    </div>
                    <div>
                        <img src="../images/icons/Chalet.svg" alt="">
                        <img src="../images/icons/Bedrooms_8.svg" alt="">
                        <img src="../images/icons/Space_156.svg" alt="">
                        <img src="../images/icons/Helipad.svg" alt="">
                    </div>
                </div>
                <div class="hotel-name">RoadStar Megeve</div>
            </div>
            <div class="hotel reveal">
                <div class="hotel-pic">
                    <img src="../images/hotel4.jpg" alt="">
                </div>
                <div class="hotel-prop">
                    <div>
                        Switzerland
                    </div>
                    <div>
                        <img src="../images/icons/home-icon.svg" alt="">
                        <img src="../images/icons/bed-icon-1-4.svg" alt="">
                        <img src="../images/icons/Spa_1000.svg" alt="">
                        <img src="../images/icons/people-icon.svg" alt="">
                    </div>
                </div>
                <div class="hotel-name">RoadStar Gstaad</div>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------Start Footer--------------------------------------------->
<?php
    require "../Source/footer.php"
?>
<!------------------------------------------------------End Footer-------------------------------------------------->
<?php
    require "go-to-top.php"
?>

</body>
</html>