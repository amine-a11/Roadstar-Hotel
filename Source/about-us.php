<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>About Us | RoadStar Hotel</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="../Style/all.min.css">
    <!--Main CSS File-->
    <link rel="stylesheet" href="../Style/main-style.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="../Style/normalize.css">
    <!--About-us Style File-->
    <link rel="stylesheet" href="../Style/about-us-style.css">
    <!-- script -->
    <script src="../js/about-us-script.js" defer></script>
    <script src="../js/Reveal-On-Scroll.js" defer></script>
</head>
<body>
    <!---------------------------------------------------------Start Header---------------------------------------->
    <header>
        <img src="../images/about-us.jpg" alt="" class="background-video">
        <?php
        include "../Source/nav.php"
        ?>
        <div class="home-title">About Us<div>Multi-Award-Winning Luxury Hospitality Brand </div></div>
    </header>

<!----------------------------------------------------End Header------------------------------------------------------->
<!----------------------------------------Start General Descritption ------------------------------>
<div class="general-description reveal">
    <div class="container">
        <div class="title">
            RoadStar Collection
        </div>
        <p>
          <span>  We own and curate </span>ultra-luxury homes in exclusively prime locations — where properties are extraordinarily rare, and the world’s most sophisticated clients want to come and stay. 
        </p>
        <p>Since 2016, we’ve grown from our roots as an award-winning hotel in Gstaad, Switzerland, to include a wider collection of chalets and waterfront retreats that stretch from the Alps to the Mediterranean. And, while we evolve to the changing needs of our guests, we’ve kept true to our signature RoadStar experience. You will come to expect exceptionally high service from our in-house teams, as well as the utmost comfort and discretion.  </p>
    <p>Wellbeing and sustainability are also at the core of our DNA. Each property has access to its own extensive, state-of-the-art wellness amenities and has been artistically curated to reflect its natural surroundings. </p>
    </div>
</div>
<!----------------------------------------End General Descritption ------------------------------>

<!---------------------------------------------Start Grid Descritpion----------------------------------------- -->
<div class="description-grid">
    <div class="container">
        <div class="mission reveal">
            <img src="../images/mission.jpeg" alt="mission">
            <div class="description">
                <div class="title">Mission</div>
                <p>We are on a mission to continuously elevate the traditional hospitality sector and set the trend in tailored, luxury living. It’s the service of a 5-star superior hotel, served to you in utter privacy.           
                 </p>
            </div>
        </div>

        <div class="vision reveal">
            <div class="description">
                <div class="title">Vision                </div>
                <p>Our vision is to create properties rich in character in the world’s most exclusive and desirable destinations.
  Plus, our commitment to sustainability starts at the beginning. We use local resources to thoughtfully create each of our properties, such as woods in high supply from nearby forests, produce from locally owned businesses and solar panels for renewable energy.
                </p>
            </div>
            <img src="../images/vision.jpg" alt="vision">

        </div>

        <div class="values reveal">
            <img src="../images/values.png" alt="values">
            <div class="description">
                <div class="title"> Values </div>
                <p>Authenticity, sustainability, and a personalised service lie at the core of our identity.
                    Each of our staff is handpicked because of their unwavering standards, whether it’s a trailblazing chef from a renowned restaurant or a wellness coach that’s perfectly suited to you.
                </p>
            </div>
        </div>
    </div>
</div>

<!---------------------------------------------Start Grid Descritpion----------------------------------------- -->


<!---------------------------------------------------Start The-collection----------------------------------------------------->
<div class="content the-collection">
    <div class="container">
        <div class="description reveal">
            <div class="title"> A Home for Every  <span>Reason & Season</span>     </div>
            <p>Stretching from the Alps to the Mediterranean, our Collection has a stylishly curated space for every need, come winter or summer. Speak to the reservation team today to find the right dates and destination for your Ultima experience. </p>
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
                <div class="hotel-name">Ultima Crans-Montana</div>
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
                <div class="hotel-name">Ultima Corfu</div>
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
                <div class="hotel-name">Ultima Megeve</div>
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
                <div class="hotel-name">Ultima Gstaad</div>
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------------End Home-------------------------------------------------->
<!-------------------------------------------------Start Footer--------------------------------------------->
<?php
    include "../Source/footer.php"
?>
<!------------------------------------------------------End Footer-------------------------------------------------->

<?php
    include "go-to-top.php"
?>

</body>
<script src="../js/main-script.js"></script>

</html>