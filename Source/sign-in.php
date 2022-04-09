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
    <!--Main CSS File-->
    <link rel="stylesheet" href="../Style/sign-in-style.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="../Style/normalize.css">
</head>
<body>
    <div class="content">
        <a href="../Source/main.php" class="logo"><img src="../images/logo.png" alt="LOGO"></a>
        <div class="title">
            Sign in to to RoadStar Hotel
        </div>
        <div class="sign-in">
            <form action="" method="post">
                <div class="field">
                    <label for="user-name"><i class="fa-solid fa-user"></i>Username or email address</label>
                    <input type="text" id="user-name" required name="Username">
                </div>
                <div class="field">
                    <label for="pswd"><i class="fa-solid fa-lock"></i> Password</label>
                    <input type="password" id="pswd" required maxlength="50" name="Password">
                </div>
                <input type="submit" value="Sign in" class="sign-in-button">
            </form>
        </div>
        <div class="sign-up">
            New to RoadStar Hotel? <a href="sign-up.php" target="_blank" title="Click here to create a new account !"> create an account</a>
        </div>
    </div>
</body>
</html>