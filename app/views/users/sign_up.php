<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/sign-up-style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="left-container">
        <div class="welcom">
            A few clicks away from Roadstar-hotel
        </div>
        <img src="<?php echo URLROOT ?>/public/images/undraw_travel_booking.svg" alt="">
    </div>
    <div class="right-container">
        <div class="title">Register</div>
        <div class="text">Let's get you all set up so you can verify your personal account and begin setting up your profile.</div>
        <form action="<?php echo URLROOT ?>/users/sign_up" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <label for="firstName">First Name</label>
                    <input type="text" id="FirstName" name="FirstName" Required>
                </div>
                <div class="input-box">
                    <label for="LastName">Last Name</label>
                    <input type="text" name="LastName" id="LastName" Required>
                </div>
                <div class="input-box">
                    <label for="Country">Country</label>
                    <select name="Country" id="Country" required>
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                    </select>                        
                </div>
                <div class="input-box">
                    <label for="City">City</label>
                    <input type="text" name="City" id="City" Required>
                </div>
                <div class="input-box">
                    <label for="PhoneNumber">PhoneNumber</label>
                    <input type="tel" name="PhoneNumber" id="PhoneNumber"  Required>
                </div>
                <div class="input-box">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email" Required>
                </div>
                <div class="input-box">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password" Required>
                </div>                
                <div class="input-box">
                    <label for="Cpassword">Confirm Password</label>
                    <input type="password" name="Cpassword" id="Cpassword" Required>
                </div>
                <div class="input-box">
                    <label for="Address">Address</label>
                    <input type="text" name="Address" id="Address" Required>
                </div>
            </div>
            <div class="agree-class">
                <input type="checkbox" name="agree" id="agree">
                <label for="agree">I agree to all <a href="#">Privacy Policy</a></label>
            </div>
            <div class="register">
                <input type="submit" value="Create Account">
            </div>
            <div class="have-account">
                Already have an account?<a href="<?php echo URLROOT ?>/users/sign_in">Log in</a>
            </div>
        </form>
    </div>
</body>
</html>