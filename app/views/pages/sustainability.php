<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>RoadStar Hotel | Sustainability</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Main CSS File-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/main-style.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!--Sustainability Style file-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/sustainability-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/sustainability.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>

</head>
<body>
<!---------------------------------------------------------Start Header---------------------------------------->
<header>
        <?php
            include "../app/views/includes/nav.php"
        ?>
        <div class="home-title">Rooted in Sustainability</div>

    
</header>

<!----------------------------------------------------End Header------------------------------------------------------->

    <!-----------------------------------------------------Start General Description------------------------------------------->
    <div class="general-description reveal">
        <div class="container">
            <div class="title">
                Supporting Local<span> Causes & Communities </span>
            </div>
            <p>
                Our properties are designed to feel like worlds of their own, yet we play an important role in the communities in which we belong. By developing sustainability initiatives that our close to the hearts of our colleagues, clients, and communities, we hope to bring about real change each time that you stay with us. 
            </p>
            <a href="<?php echo URLROOT ?>/public/docs/Sustainability.pdf" class="pledge">
                <span class="arrow">
                    &#10132;
                </span>
                <span class="link"> Our 2022 Pledge</span>
            </a>
        </div>
    </div>

    <!-----------------------------------------------------End General Description------------------------------------------->
<!----------------------------------------------------Start Tree--------------------------------------------------------->
<div class="tree-content grid-content reveal">
    <div class="container">
        <div class="content">
            <div class="title">
                A Tree Planted for Each Night You Stay with Us
            </div>
            <p>Our commitment to sustainability starts at the beginning. We use local resources to thoughtfully create each of our properties, such as woods in high supply from nearby forests, produce from locally owned businesses and solar panels for renewable energy.            </p>
            <p>And, by working in collaboration with One Tree Planted, we have committed to planting over 10,000 trees in 2021. It all makes indulging yourself in any one of Ultima Collection’s properties feel even better. You can take an active role and let us know exactly how many trees you would like planted in your name and we will take care of it.</p>
        </div>
        <div class="image"><img src="<?php echo URLROOT ?>/public/images/tree.jpg" alt="Woods"></div>
        
    </div>
</div>
<!----------------------------------------------------end Tree--------------------------------------------------------->
<!-- /*------------------------- Start forest background-------------------------*/------------------------------------->
<!-- <div class="forest-background">
    <img src="../images/woodbackground.jpg" alt="">
</div> -->
<!--/*------------------------- End forest background-------------------------*/----------------------------------- -->
<!--------------------------------------Start Ocean Content----------------------------------------------->
<div class="ocean-content grid-content reveal">
    <div class="container">
        <div class="content">
            <div class="title">
                1KG of Ocean Plastic Removed for Every $1 Donated
            </div>
            <p>Alongside rising sea levels and temperatures, plastic pollution is a major threat to our marine ecosystems and the exquisite creatures populating it. At our properties where idyllic blue waters an inescapable sights, we’re inviting you to envision a world without them.
            </p>
            <p>Our partnership with Oceanic Global will help to reverse this damage by inviting you to donate either $100, $500, $1,000, or a value of your choice, to fund ocean clean-ups, which will help rid waters of plastic and other pollutants discarded by humans every day. It means that your stay will help to create healthier marine ecosystems and, ultimately, a happier planet.
            </p>
        </div>
        <div class="image"><img src="<?php echo URLROOT ?>/public/images/ocean.jpg" alt=""></div>
        
    </div>
</div>

<!--------------------------------------End Ocean Content----------------------------------------------->
<!---------------------------------------------------Start The-collection----------------------------------------------------->
<div class="content the-collection reveal">
    <div class="container">
        <div class="description reveal">
            <div class="title"> A Home for Every  <span>Reason & Season</span>     </div>
            <p>Stretching from the Alps to the Mediterranean, our Collection has a stylishly curated space for every need, come winter or summer. Speak to the reservation team today to find the right dates and destination for your Ultima experience. </p>
        </div>
        <div class="hotels">
            <div class="hotel reveal">
                <div class="hotel-pic">
                    <img src="<?php echo URLROOT ?>/public/images/hotel1.jpg" alt="">
                </div>
                <div class="hotel-prop">
                    <div>
                        Switzerland
                    </div>
                    <div>
                        <img src="<?php echo URLROOT ?>/public/images/icons/Chalet.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Bedrooms_16.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Spa_1000.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Ski.svg" alt="">
                    </div>
                </div>
                <div class="hotel-name">Ultima Crans-Montana</div>
            </div>
            <div class="hotel reveal">
                <div class="hotel-pic">
                    <img src="<?php echo URLROOT ?>/public/images/hotel2.png" alt="">
                </div>
                <div class="hotel-prop">
                    <div>
                        Greece
                    </div>
                    <div>
                        <img src="<?php echo URLROOT ?>/public/images/icons/home-icon.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Bedrooms_6.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Spa_60.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/water.svg" alt="">
                    </div>
                </div>
                <div class="hotel-name">Ultima Corfu</div>
            </div>
            <div class="hotel reveal">
                <div class="hotel-pic">
                    <img src="<?php echo URLROOT ?>/public/images/hotel3.jpg" alt="">
                </div>
                <div class="hotel-prop">
                    <div>
                        France
                    </div>
                    <div>
                        <img src="<?php echo URLROOT ?>/public/images/icons/Chalet.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Bedrooms_8.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Space_156.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Helipad.svg" alt="">
                    </div>
                </div>
                <div class="hotel-name">Ultima Megeve</div>
            </div>
            <div class="hotel reveal">
                <div class="hotel-pic">
                    <img src="<?php echo URLROOT ?>/public/images/hotel4.jpg" alt="">
                </div>
                <div class="hotel-prop">
                    <div>
                        Switzerland
                    </div>
                    <div>
                        <img src="<?php echo URLROOT ?>/public/images/icons/home-icon.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/bed-icon-1-4.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/Spa_1000.svg" alt="">
                        <img src="<?php echo URLROOT ?>/public/images/icons/people-icon.svg" alt="">
                    </div>
                </div>
                <div class="hotel-name">Ultima Gstaad</div>
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------------End Home-------------------------------------------------->
 <!-------------------------------------------------Start Footer--------------------------------------------->
 <?php
        include "../app/views/includes/footer.php"
    ?>
<!------------------------------------------------------End Footer-------------------------------------------------->
<?php
    include "../app/views/includes/go-to-top.php"
?>




    
</body>
</html>