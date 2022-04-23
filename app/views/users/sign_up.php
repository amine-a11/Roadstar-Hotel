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
<div class="container">
         <header>Signup Form</header>
         <div class="progress-bar">
            <div class="step">
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form action="<?php echo URLROOT ?>/users/sign_up" method="POST">
               <div class="page slide-page">
                  <div class="field">
                     <label for="firstName">First Name</label>
                     <input type="text" id="FirstName" name="FirstName" Required> 
                  </div>
                  <div class="field">
                    <label for="LastName">Last Name</label>
                    <input type="text" name="LastName" id="LastName" Required>
                  </div>
                  <div class="field">
                      <label for="Age">Age</label>
                      <input type="number" name="Age" id="Age" required>
                  </div>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="field">
                    <label for="Country">Country</label>
                    <select name="Country" id="Country" required>
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                    </select>                        
                  </div>
                  <div class="field">
                    <label for="City">City</label>
                    <input type="text" name="City" id="City" Required>
                  </div>
                  <div class="field">
                      <label for="ZipCode">Zip Code</label>
                      <input type="number" name="ZipCode" id="ZipCode" required>
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="field">
                    <label for="PhoneNumber">PhoneNumber</label>
                    <input type="tel" name="PhoneNumber" id="PhoneNumber"  Required>
                  </div>
                  <div class="field">
                    <label for="Address">Address</label>
                    <input type="text" name="Address" id="Address" Required>
                  </div>
                  <div class="field">
                      <label for="Gender">Gender</label>
                     <select name="Gender" id="Gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                     </select>

                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="field">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email" Required>
                </div>
                  <div class="field">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password" Required>
                  </div>
                  <div class="field">
                    <label for="Cpassword">Confirm Password</label>
                    <input type="password" name="Cpassword" id="Cpassword" Required>
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <button class="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script>
         const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressCheck = document.querySelectorAll(".step .check");
const pages = [...document.querySelectorAll(".page")];
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;
function stepValid() {
    const inputsValid = [...pages[current - 1].querySelectorAll("input")].every(input => input.reportValidity());
    return inputsValid;
}

nextBtnFirst.addEventListener("click", function (event) {
    if (stepValid()) {
        event.preventDefault();
        slidePage.style.marginLeft = "-25%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        current += 1;
    }
});
nextBtnSec.addEventListener("click", function (event) {
    if (stepValid()) {
        event.preventDefault();
        slidePage.style.marginLeft = "-50%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        current += 1;
    }
});
nextBtnThird.addEventListener("click", function (event) {
    if (stepValid()) {
        event.preventDefault();
        slidePage.style.marginLeft = "-75%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        current += 1;
    }
});
submitBtn.addEventListener("click", function () {
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current += 1;
    setTimeout(function () {
        alert("Your Form Successfully Signed up");
        location.reload();
    }, 800);
});

prevBtnSec.addEventListener("click", function (event) {
    event.preventDefault();
    slidePage.style.marginLeft = "0%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -= 1;
});
prevBtnThird.addEventListener("click", function (event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -= 1;
});
prevBtnFourth.addEventListener("click", function (event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-50%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -= 1;
});
      </script>
</body>
</html>