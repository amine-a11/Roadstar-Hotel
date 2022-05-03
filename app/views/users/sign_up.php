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
            <div class="step">
               <div class="bullet">
                  <span>5</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form action="<?php echo URLROOT ?>/users/sign_up" method="POST" enctype="multipart/form-data">
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
                    <option value="Afganistan">Afghanistan</option>
         <option value="Albania">Albania</option>
         <option value="Algeria">Algeria</option>
         <option value="American Samoa">American Samoa</option>
         <option value="Andorra">Andorra</option>
         <option value="Angola">Angola</option>
         <option value="Anguilla">Anguilla</option>
         <option value="Antigua & Barbuda">Antigua & Barbuda</option>
         <option value="Argentina">Argentina</option>
         <option value="Armenia">Armenia</option>
         <option value="Aruba">Aruba</option>
         <option value="Australia">Australia</option>
         <option value="Austria">Austria</option>
         <option value="Azerbaijan">Azerbaijan</option>
         <option value="Bahamas">Bahamas</option>
         <option value="Bahrain">Bahrain</option>
         <option value="Bangladesh">Bangladesh</option>
         <option value="Barbados">Barbados</option>
         <option value="Belarus">Belarus</option>
         <option value="Belgium">Belgium</option>
         <option value="Belize">Belize</option>
         <option value="Benin">Benin</option>
         <option value="Bermuda">Bermuda</option>
         <option value="Bhutan">Bhutan</option>
         <option value="Bolivia">Bolivia</option>
         <option value="Bonaire">Bonaire</option>
         <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
         <option value="Botswana">Botswana</option>
         <option value="Brazil">Brazil</option>
         <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
         <option value="Brunei">Brunei</option>
         <option value="Bulgaria">Bulgaria</option>
         <option value="Burkina Faso">Burkina Faso</option>
         <option value="Burundi">Burundi</option>
         <option value="Cambodia">Cambodia</option>
         <option value="Cameroon">Cameroon</option>
         <option value="Canada">Canada</option>
         <option value="Canary Islands">Canary Islands</option>
         <option value="Cape Verde">Cape Verde</option>
         <option value="Cayman Islands">Cayman Islands</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Chad">Chad</option>
         <option value="Channel Islands">Channel Islands</option>
         <option value="Chile">Chile</option>
         <option value="China">China</option>
         <option value="Christmas Island">Christmas Island</option>
         <option value="Cocos Island">Cocos Island</option>
         <option value="Colombia">Colombia</option>
         <option value="Comoros">Comoros</option>
         <option value="Congo">Congo</option>
         <option value="Cook Islands">Cook Islands</option>
         <option value="Costa Rica">Costa Rica</option>
         <option value="Cote DIvoire">Cote DIvoire</option>
         <option value="Croatia">Croatia</option>
         <option value="Cuba">Cuba</option>
         <option value="Curaco">Curacao</option>
         <option value="Cyprus">Cyprus</option>
         <option value="Czech Republic">Czech Republic</option>
         <option value="Denmark">Denmark</option>
         <option value="Djibouti">Djibouti</option>
         <option value="Dominica">Dominica</option>
         <option value="Dominican Republic">Dominican Republic</option>
         <option value="East Timor">East Timor</option>
         <option value="Ecuador">Ecuador</option>
         <option value="Egypt">Egypt</option>
         <option value="El Salvador">El Salvador</option>
         <option value="Equatorial Guinea">Equatorial Guinea</option>
         <option value="Eritrea">Eritrea</option>
         <option value="Estonia">Estonia</option>
         <option value="Ethiopia">Ethiopia</option>
         <option value="Falkland Islands">Falkland Islands</option>
         <option value="Faroe Islands">Faroe Islands</option>
         <option value="Fiji">Fiji</option>
         <option value="Finland">Finland</option>
         <option value="France">France</option>
         <option value="French Guiana">French Guiana</option>
         <option value="French Polynesia">French Polynesia</option>
         <option value="French Southern Ter">French Southern Ter</option>
         <option value="Gabon">Gabon</option>
         <option value="Gambia">Gambia</option>
         <option value="Georgia">Georgia</option>
         <option value="Germany">Germany</option>
         <option value="Ghana">Ghana</option>
         <option value="Gibraltar">Gibraltar</option>
         <option value="Great Britain">Great Britain</option>
         <option value="Greece">Greece</option>
         <option value="Greenland">Greenland</option>
         <option value="Grenada">Grenada</option>
         <option value="Guadeloupe">Guadeloupe</option>
         <option value="Guam">Guam</option>
         <option value="Guatemala">Guatemala</option>
         <option value="Guinea">Guinea</option>
         <option value="Guyana">Guyana</option>
         <option value="Haiti">Haiti</option>
         <option value="Hawaii">Hawaii</option>
         <option value="Honduras">Honduras</option>
         <option value="Hong Kong">Hong Kong</option>
         <option value="Hungary">Hungary</option>
         <option value="Iceland">Iceland</option>
         <option value="Indonesia">Indonesia</option>
         <option value="India">India</option>
         <option value="Iran">Iran</option>
         <option value="Iraq">Iraq</option>
         <option value="Ireland">Ireland</option>
         <option value="Isle of Man">Isle of Man</option>
         <option value="Italy">Italy</option>
         <option value="Jamaica">Jamaica</option>
         <option value="Japan">Japan</option>
         <option value="Jordan">Jordan</option>
         <option value="Kazakhstan">Kazakhstan</option>
         <option value="Kenya">Kenya</option>
         <option value="Kiribati">Kiribati</option>
         <option value="Korea North">Korea North</option>
         <option value="Korea Sout">Korea South</option>
         <option value="Kuwait">Kuwait</option>
         <option value="Kyrgyzstan">Kyrgyzstan</option>
         <option value="Laos">Laos</option>
         <option value="Latvia">Latvia</option>
         <option value="Lebanon">Lebanon</option>
         <option value="Lesotho">Lesotho</option>
         <option value="Liberia">Liberia</option>
         <option value="Libya">Libya</option>
         <option value="Liechtenstein">Liechtenstein</option>
         <option value="Lithuania">Lithuania</option>
         <option value="Luxembourg">Luxembourg</option>
         <option value="Macau">Macau</option>
         <option value="Macedonia">Macedonia</option>
         <option value="Madagascar">Madagascar</option>
         <option value="Malaysia">Malaysia</option>
         <option value="Malawi">Malawi</option>
         <option value="Maldives">Maldives</option>
         <option value="Mali">Mali</option>
         <option value="Malta">Malta</option>
         <option value="Marshall Islands">Marshall Islands</option>
         <option value="Martinique">Martinique</option>
         <option value="Mauritania">Mauritania</option>
         <option value="Mauritius">Mauritius</option>
         <option value="Mayotte">Mayotte</option>
         <option value="Mexico">Mexico</option>
         <option value="Midway Islands">Midway Islands</option>
         <option value="Moldova">Moldova</option>
         <option value="Monaco">Monaco</option>
         <option value="Mongolia">Mongolia</option>
         <option value="Montserrat">Montserrat</option>
         <option value="Morocco">Morocco</option>
         <option value="Mozambique">Mozambique</option>
         <option value="Myanmar">Myanmar</option>
         <option value="Nambia">Nambia</option>
         <option value="Nauru">Nauru</option>
         <option value="Nepal">Nepal</option>
         <option value="Netherland Antilles">Netherland Antilles</option>
         <option value="Netherlands">Netherlands (Holland, Europe)</option>
         <option value="Nevis">Nevis</option>
         <option value="New Caledonia">New Caledonia</option>
         <option value="New Zealand">New Zealand</option>
         <option value="Nicaragua">Nicaragua</option>
         <option value="Niger">Niger</option>
         <option value="Nigeria">Nigeria</option>
         <option value="Niue">Niue</option>
         <option value="Norfolk Island">Norfolk Island</option>
         <option value="Norway">Norway</option>
         <option value="Oman">Oman</option>
         <option value="Pakistan">Pakistan</option>
         <option value="Palau Island">Palau Island</option>
         <option value="Palestine">Palestine</option>
         <option value="Panama">Panama</option>
         <option value="Papua New Guinea">Papua New Guinea</option>
         <option value="Paraguay">Paraguay</option>
         <option value="Peru">Peru</option>
         <option value="Phillipines">Philippines</option>
         <option value="Pitcairn Island">Pitcairn Island</option>
         <option value="Poland">Poland</option>
         <option value="Portugal">Portugal</option>
         <option value="Puerto Rico">Puerto Rico</option>
         <option value="Qatar">Qatar</option>
         <option value="Republic of Montenegro">Republic of Montenegro</option>
         <option value="Republic of Serbia">Republic of Serbia</option>
         <option value="Reunion">Reunion</option>
         <option value="Romania">Romania</option>
         <option value="Russia">Russia</option>
         <option value="Rwanda">Rwanda</option>
         <option value="St Barthelemy">St Barthelemy</option>
         <option value="St Eustatius">St Eustatius</option>
         <option value="St Helena">St Helena</option>
         <option value="St Kitts-Nevis">St Kitts-Nevis</option>
         <option value="St Lucia">St Lucia</option>
         <option value="St Maarten">St Maarten</option>
         <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
         <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
         <option value="Saipan">Saipan</option>
         <option value="Samoa">Samoa</option>
         <option value="Samoa American">Samoa American</option>
         <option value="San Marino">San Marino</option>
         <option value="Sao Tome & Principe">Sao Tome & Principe</option>
         <option value="Saudi Arabia">Saudi Arabia</option>
         <option value="Senegal">Senegal</option>
         <option value="Seychelles">Seychelles</option>
         <option value="Sierra Leone">Sierra Leone</option>
         <option value="Singapore">Singapore</option>
         <option value="Slovakia">Slovakia</option>
         <option value="Slovenia">Slovenia</option>
         <option value="Solomon Islands">Solomon Islands</option>
         <option value="Somalia">Somalia</option>
         <option value="South Africa">South Africa</option>
         <option value="Spain">Spain</option>
         <option value="Sri Lanka">Sri Lanka</option>
         <option value="Sudan">Sudan</option>
         <option value="Suriname">Suriname</option>
         <option value="Swaziland">Swaziland</option>
         <option value="Sweden">Sweden</option>
         <option value="Switzerland">Switzerland</option>
         <option value="Syria">Syria</option>
         <option value="Tahiti">Tahiti</option>
         <option value="Taiwan">Taiwan</option>
         <option value="Tajikistan">Tajikistan</option>
         <option value="Tanzania">Tanzania</option>
         <option value="Thailand">Thailand</option>
         <option value="Togo">Togo</option>
         <option value="Tokelau">Tokelau</option>
         <option value="Tonga">Tonga</option>
         <option value="Trinidad & Tobago">Trinidad & Tobago</option>
         <option value="Tunisia">Tunisia</option>
         <option value="Turkey">Turkey</option>
         <option value="Turkmenistan">Turkmenistan</option>
         <option value="Turks & Caicos Is">Turks & Caicos Is</option>
         <option value="Tuvalu">Tuvalu</option>
         <option value="Uganda">Uganda</option>
         <option value="United Kingdom">United Kingdom</option>
         <option value="Ukraine">Ukraine</option>
         <option value="United Arab Erimates">United Arab Emirates</option>
         <option value="United States of America">United States of America</option>
         <option value="Uraguay">Uruguay</option>
         <option value="Uzbekistan">Uzbekistan</option>
         <option value="Vanuatu">Vanuatu</option>
         <option value="Vatican City State">Vatican City State</option>
         <option value="Venezuela">Venezuela</option>
         <option value="Vietnam">Vietnam</option>
         <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
         <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
         <option value="Wake Island">Wake Island</option>
         <option value="Wallis & Futana Is">Wallis & Futana Is</option>
         <option value="Yemen">Yemen</option>
         <option value="Zaire">Zaire</option>
         <option value="Zambia">Zambia</option>
         <option value="Zimbabwe">Zimbabwe</option>                    </select>                        
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
                     <button class="next-3 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <input type="file" name="imageFile">
                  <div class="field btns">
                     <!-- <button class="submit">Submit</button> -->
                     <button type="submit" name="submit">Submit</button>
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
const nextBtnFourth = document.querySelector(".next-3");
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
nextBtnFourth.addEventListener("click",(e)=>{
   if(stepValid()){
      e.preventDefault();
      slidePage.style.marginLeft = "-100%";
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