<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>Sign In</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="../Style/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="../Style/normalize.css">
    <!--Main CSS File --> 
    <link rel="stylesheet" href="../Style/main-style.css">
    <!--CSS File-->
    <link rel="stylesheet" href="../Style/sign-in-style.css">
</head>
<body>
    <div class="sign-in">
        <div class="container">
            <div class="aside-image .image">
                <img src="../images/hotel2.png" alt="Hotel">
            </div>

            <div class="sign-in-form">
                <a href="main.php" class="logo-heading" title="Back to the main page">
                    <img src="../images/logo.png" alt="Logo">
                    <div>RoadStar Hotel</div>
                </a>
                <div class="sign-in-content">
                    <div class="title">
                        Login
                    </div>

                    <div class="description">
                        <div class="min-title">
                            Login To Your Account
                        </div>
                        
                        <div class="text">
                            Thank you for get back to RoadStar Hotel, let's our the best recommendation for you
                        </div>

                        <form action="" method="post">

                            <!-- still Control-->
                            <div class="user-name-field field">
                                <label for="user-name" class="user-name">Username</label>
                                <input type="text" placeholder="Email or Phone Number" id="user-name" required name="user name">
                            </div>

                            <div class="password-field field">
                                <label class="password" for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="password" required>
                            </div>

                            <input type="submit" value="Sign In" class="sign-in-button">

                            <div class="to-sign-up">
                                Don't have an account yet? <a href="sign-up.php" target="_blank" title="create an account">Join RoadStar Hotel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>