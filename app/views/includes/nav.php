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
                <!-- <i class="fa-solid fa-user"></i> -->
                <?php if(isset($_SESSION['user_id'])): ?>
                    <?php if(file_exists("C:/wamp64/www/Roadstar-Hotel/public/images/clientsImages/".$_SESSION['user_id'].".jpg")): ?>
                        <a href="<?php echo URLROOT ?>/<?php echo ($_SESSION['role']=='client')?"client_account/client_dashbord":"admin_account/statistics" ; ?>"><img style="border-radius:50%;width:10vh;height:10vh;overflow:hidden" src="<?php echo URLROOT ?>/public/images/clientsImages/<?php echo $_SESSION['user_id'] ?>.jpg" alt=""></a>
                    <?php else :?>
                        <a href="<?php echo URLROOT ?>/<?php echo ($_SESSION['role']=='client')?"client_account/client_dashbord":"admin_account/statistics" ; ?>"><i class="fa-solid fa-user"></i></a>
                    <?php endif; ?>
                <?php else : ?>
                    <a href="<?php echo URLROOT ?>/users/sign_in"><i class="fa-solid fa-user"></i></a>
                <?php endif; ?>
                

                
</div>
<!----------------------------------------------------End nav-------------------------------------------------->
