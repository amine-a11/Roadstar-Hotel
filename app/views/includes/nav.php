<!---------------------------------------------------------Start nav---------------------------------------->
<?php session_start();?>
<div class="fixed-nav change-status">
                <a href="<?php echo URLROOT ?>/public/main" class="logo">
                    <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="Logo">
                    <div>RoadStar <br> Hotel</div>
                </a>
                <div class="bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav>
                    <li><a href="<?php echo URLROOT ?>/pages/about_us">About Us</a></li>
                    <li><a href="<?php echo URLROOT ?>/pages/services">Signature Services</a></li>
                    <li><a href="<?php echo URLROOT ?>/pages/sustainability">Sustainability</a></li>
                    <div class="book">
                        <a href="<?php echo URLROOT ?>/pages/book"> <span>&#10132;</span> Book now</a>
                    </div>
                </nav>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <div class="book">
                        <a class="logout" href="<?php echo URLROOT ?>/users/logout">log-out</a>
                    </div>
                <?php else : ?>
                    <a href="<?php echo URLROOT ?>/users/sign_in"><i class="fa-solid fa-user"></i></a>
                <?php endif; ?>
                

                
</div>
<!----------------------------------------------------End nav-------------------------------------------------->
