<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>RoadStar Hotel</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Main CSS File-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/main-style.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!-- sweet alert -->
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js"></script>
    
</head>
<body>
    <?php
    if(isset($_GET['accountcreated'])){
        if($_GET['accountcreated']=='true'){
            echo "<script>Swal.fire('Good job!','Congratulations, your account has been successfully created.','success')</script>";
        }
    }
    ?>
    <!---------------------------------------------------------Start Header---------------------------------------->
    <header>
    <?php
        include '../app/views/includes/nav.php';
    ?> 
            <div class="home-title">Where Home Feels Like an Escape </div>
        <video autoplay muted loop class="background-video">
            <source src="<?php echo URLROOT ?>/public/videos/cover.mp4" type="video/mp4">
            Your browser does not support the video element.
        </video>
        
    </header>
    <!----------------------------------------------------End Header------------------------------------------------------>
    <!-------------------------------------Start Collection-1---------------------------------------------------------------->
    <div class=" content collection-1">
        <div class="container">
            <div class="description reveal">
                <div class="title">Step Into the World of <span> RoadStar Collection</span> </div>
                <p>Tucked away at your own wellness retreat in the Alps or toasting to moments with family while overlooking a shimmering Mediterranean Sea, our secluded escapes are designed to feel like home. </p>
                <p>Look beyond our highly curated ski chalets, retreats, spas and villas and you’ll find a collection of people with an unwavering set of standards.</p>
                <p>Your in-house team will be there to offer highly personalised experiences in utter comfort and privacy. This is life savoured to the fullest.</p>
            </div>
            <div class="description-grid">
                <div class="class-one reveal">
                    <img src="<?php echo URLROOT ?>/public/images/Why.jpg" alt="">
                    <div class="title">Why RoadStar Collection? </div>
                    <p>Wherever in the world you’re exploring, if there’s RoadStar’s name on the door, you can expect our signature services and exceptionally high standards.</p>

                </div>
                <div class="class-two reveal">
                    <img src="<?php echo URLROOT ?>/public/images/Our_Roots.jpg" alt="">
                    <div class="title">Our Roots </div>
                    <p>Many of you will know us from our beginnings at RoadStar Gstaad: our award-winning, 5-star superior hotel in Switzerland. Now, we’re found in exclusive destinations across Europe.</p>

                </div>
                <div class="class-three reveal">
                    <img src="<?php echo URLROOT ?>/public/images/Sustainable_Living.jpg" alt="">
                    <div class="title"> Sustainable Living </div>
                    <p>A tree is planted for every night you stay with us. Plus, you will find biodegradable and sustainable materials used throughout. RoadStar’s properties enhance natural habitats and never disrupt them.</p>

                </div>

            </div>
            <div class="parent-explore-more reveal">
                <a href="collection.html" class="explore-more" title="Discover our collection">
                    <span class="arrow"> &#10132; </span>
                    <span class="link">Explore more</span>
    
                </a>
            </div>
            


        </div>
        
    </div>
    <!--------------------------------------------------------End Collection-1----------------------------------------->
    <!--Collection-->

    <!---->
    <!--Start Services-->
    <div class="content services reveal">
        <div class="container">
            <div class="description reveal">
                <div class="title">The RoadStar <span> Services</span>  </div>
                <p>We’re known for our world-class service, surpassing ‘luxury’ to offer highly personalised experiences in utter seclusion. Not only do we get to know and anticipate your needs, but we’ll delight you with surprises along the way.</p>
            </div>
            <div class="description-grid">
                <div class="class-one reveal">
                    <img src="<?php echo URLROOT ?>/public/images/Private_Concierge.jpg" alt="">
                    <div class="title">Private Concierge                     </div>
                    <p>Helicopter transfers, Michelin star chefs and 24/7 service staff can be arranged by our in-house teams to personalise each experience. Consider it handled, however spontaneous the idea.</p>

                </div>
                <div class="class-two reveal">
                    <img src="<?php echo URLROOT ?>/public/images/Health__Wellness.jpg "alt="">
                    <div class="title">Health & Wellness  </div>
                    <p>Indulge in personalised treatments with state-of-the-art amenities and lifestyle wellness treatments at our leading Swiss clinic and renowned spas. </p>

                </div>
                <div class="class-three reveal">
                    <img src="<?php echo URLROOT ?>/public/images/Personalised_Experiences.jpg" alt="">
                    <div class="title">Personalised Experiences & Events                     </div>
                    <p>We can map-out the perfect day for your group based on your interests. Be it for business or pleasure. After all, no-one knows these locations like we do.</p>

                </div>

            </div>
            <div class="parent-explore-more reveal">
                <a href="services.html" class="explore-more" title="Discover our services">
                    <span class="arrow">&#10132;</span>
                    <span class="link">Explore more</span>
    
                </a>
            </div>
            

        </div>
        
    </div>

    <!---------------------------------------------------End Services------------------------------------------------------>



    <!-----------------------------------------------Start Get In Touch----------------------------------------------------->
    <div class="get-in-touch">
        <div class="container reveal">
            <div class="title">Get in Touch </div>
            <p>
                Stretching from the Alps to the Mediterranean, our Collection has a stylishly curated space for every need, come winter or summer. Speak to the reservation team to find the right dates and destination for your Ultima experience.
            </p>
            <a href="mailto:roadstar@collection.com" class="contact-us">
                <span class="arrow">
                    &#10132;
                </span>
                <span class="link"> Contact Us</span>
            </a>
        </div>
        
    </div>


    <!---------------------------------------------------End Get In touch--------------------------->
    <!---------------------------------------Start Awards---------------------------------->
    <div class="product awards"> 
        <div class="container">
        <div class="product-category reveal">Awards <br><span>RoadStar Collection</span></div>
        <button class="pre-btn "><img src="<?php echo URLROOT ?>/public/images/arrow.png" alt=""></button>
        <button class="nxt-btn "><img src="<?php echo URLROOT ?>/public/images/arrow.png" alt=""></button>
        <div class="product-container reveal">


            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>RoadStar Gstaad, World's Best Inspired Design Hotel 2021</p>
                <p>World Boutique Hotel Awards</p>
            </div>

            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>RoadStar Gstaad, Luxury Boutique Hotel 2021</p>
                <p>iLuxury Awards</p>
            </div>

            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>RoadStar Gstaad, Best Luxury Hotel Spa & Wellness in Switzerland 2021</p>
                <p>International Spa & Beauty</p>
            </div>

            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>RoadStar Gstaad, Best Luxury Hotel Spa & Wellness in Switzerland 2021</p>
                <p>International Spa & Beauty </p>
            </div>

            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>RoadStar Gstaad, World's Best Inspired Design Hotel 2021</p>
                <p>World Boutique Hotel Awards</p>
            </div>

            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>Most Innovative Luxury Hospitality Group 2020</p>
                <p>LUXLife Magazine</p>
            </div>

            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>Hotellerie suisse</p>
                <p>5-Star Superior Hotel Ultima Gstaad 2020-2023</p>
            </div>

            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>Influencer Awards Monaco</p>
                <p>Best Luxury Hospitality Group of the Year 2019</p>
            </div>

            <div class="product-card">
                <i class="fa-solid fa-award"></i>
                <p>World Travel Awards</p>
                <p>Switzerland’s Leading Boutique Hotel 2019</p>
            </div>
         
        </div>
    </div>
</div>
    <!---------------------------------------End Awards---------------------------------->
    <!--------------------------------------------------In The Press---------------------------------------------->
    <div class="product press reveal"> 
        <div class="container">
        <div class="product-category">In The <span>Press</span></div>
        <button class="pre-btn"><img src="<?php echo URLROOT ?>/public/images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="<?php echo URLROOT ?>/public/images/arrow.png" alt=""></button>
        <div class="product-container press">

            <div class="product-card">
                <div>
                    <img src="<?php echo URLROOT ?>/public/images/press1.jpg" alt="">
                    <p>RoadStar Hotel</p>
                </div>
                <p>"The Ultima Group is at the forefront of several major trends that are currently reshaping the sector in the high-end alternative accommodation market"</p>
            </div>

            <div class="product-card">
                <div>
                    <img src="<?php echo URLROOT ?>/public/images/press2.jpg" alt="">
                    <p>RoadStar Hotel</p>
                </div>
                <p>"The Epitome of Luxury Travel"</p>
            </div>

            <div class="product-card">
                <div>
                    <img src="<?php echo URLROOT ?>/public/images/press3.jpg" alt="">
                    <p>RoadStar Hotel</p>
                </div>
                <p>"Ultima Collection is reshaping luxury travel with exclusive-use chalets, villas and properties that have been designed to bridge the gap between luxury hotels and real estate through their combination of service, privacy and comfort"</p>
            </div>
        </div>
    </div>
</div>
    
    <!--------------------------------------------------In The Press---------------------------------------------->
    <!-------------------------------------------------Start Footer--------------------------------------------->
    <?php
        include '../app/views/includes/footer.php';
    ?>
    <!------------------------------------------------------End Footer-------------------------------------------------->
    <?php
        include '../app/views/includes/go-to-top.php';
    ?>

    <script src="<?php echo URLROOT ?>/public/js/main-script.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js"></script>
</body>
</html>
