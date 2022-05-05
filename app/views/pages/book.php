<?php session_start();?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/main-style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/book-style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/book-script.js" defer></script>
    <title>Book Your Room</title>
</head>

<body>
    <header>
        <!-- logo mail call -->
        <nav>
            <div class="icons">
                <a></a>
            </div>
        </nav>
        <div class="logo"><a href="main.php"><img src="<?php echo URLROOT ?>/public/images/logo.png" alt="logo"></a></div>
    </header>
    <!-- from contains :
        -check-in check-out date ✅
        -number of adults and children in each room ✅
        -next page button ✅ 
    -->
    <form action="<?php echo URLROOT ?>/pages/bookroom" method="POST">
        <div class="progressbar">
            <div class="progress-step progress-step-active" data-title="intro"></div>
            <div class="progress-step" data-title="select Room"></div>
            <div class="progress-step" data-title="your deatails"></div>
        </div>
<!-------------------------------form step-1  ------------------------------------------------------------------>
        <div class="form-step form-step-active">
            <h1>BOOK A ROOM</h1>

            <!-- check-in check-out date  -->
            <div class="container1">

                <!-- check-in -->
                <!-- 
                    ci=check-in
                    co=check-out
                    cid=check-in-date
                    cod=check-out-date
                 -->
                <div class="checkIn">
                    <div class="ci">
                        CHECK-IN <span>DATE</span>
                    </div>
                    <div class="cid">
                        <input type="date" name="check-in-calender" id="check-in-calender" onchange="handlecod()" required>
                    </div>
                </div>

                <!-- check-out -->
                <div class="checkOut">
                    <div class="co">
                        CHECK-OUT <span>DATE</span>
                    </div>
                    <div class="cod">
                        <input type="date" name="check-out-calender" id="check-out-calender" onchange="handlecid()" required>
                    </div>
                </div>

            </div>

            <!-- number of nights ((check-out)-(check-in)) -->
            <div class="nights">
                YOUR ARE BOOKING <span id="nb-of-nights">1</span> NIGHTS
            </div>

            <!-- container2 for the number of adults and children in each room-->
            <div class="container2">
                <!-- <button type="button" class="show" id="add-new-room" onclick="addRoom()">+ ADD ANOTHER ROOM</button>
                <button type="button" class="hide" id="remove-room" onclick="removeRoom()">- REMOVE ROOM</button> -->
                <!-- class room represents one room -->
                <div class="room" id="room1">
                    <span id="room-nb">ROOM</span>

                    <!-- adults -->
                    <div class="adult">
                        <div class="client">
                            <div class="adu">ADULTS</div>
                            <div class="years">(12 YEARS AND ABOVE)</div>
                        </div>
                        <div class="nb-of-adu">
                            <button class="decrease" id="room1-decrease" type='button'
                                onclick="stepper(this)">-</button>
                            <input type="number" id="room1-nb-of-adu-value" value="1" min="1" max="4" readonly>
                            <button class="increase" id="room1-increase" type='button'
                                onclick="stepper(this)">+</button>
                        </div>
                    </div>

                    <!-- children  -->
                    <div class="young">
                        <div class="client">
                            <div class="chi">CHILDREN</div>
                            <div class="years">(0-11 YEARS)</div>
                        </div>
                        <div class="nb-of-chi">
                            <button class="decrease" id="room1-decrease" type='button'
                                onclick="stepper(this)">-</button>
                            <input type="number" id="room1-nb-of-chi-value" value="0" min="0" max="4" readonly>
                            <button class="increase" id="room1-increase" type='button'
                                onclick="stepper(this)">+</button>
                        </div>
                    </div>

                </div>

            </div>
            <input type="hidden" name="nb_of_adult" id="nb_of_adult" value="1">
            <input type="hidden" name="nb_of_children" id="nb_of_children" value="1">
            <input type="hidden" name="nb_of_rooms" id="nb_of_rooms" value="1">

            <hr>
            <button type="button" class="next-button" onclick="getAvailableRooms()">FIND A ROOM</button>
        </div>


<!--------------------------------------------form step-2 Select room ------------------------------------------------->

        <div class="form-step">
            <div class="container3">
                <div class="seeInfo">
                    Booking Info<i class="fa-solid fa-plus"></i>
                </div>
                <div class="bookingInfo">
                    <div>
                        <i class="fa-solid fa-calendar-days"></i>
                        <span id="cid-cod"></span>
                    </div>
                    <div>
                        <i class="fa-solid fa-user"></i>
                        <span id="nb-adu-child"></span>
                    </div>
                    <div>
                        <i class="fa-solid fa-bed"></i>
                        <span id="nbOfRooms"></span>
                    </div>
                    <div>
                        <a class="prev-button">MODIFY BOOKING</a>
                    </div>
                </div>
            </div>
            <div class="container4">
                <div class="room-found">
                    <h2>SELECT ROOM PLEASE:</h2>
                    <!-- <span>Found <span id="nb-of-room-found">N</span> ROOMS</span> -->
                </div>
                <!-- <div class="edit-order-of-rooms">

                    <div class="dropdown" data-dropdown>
                        <button class="link" type="button" data-dropdown-button>FILTER BY<i class="fa-solid fa-filter"></i></button>
                        <div class="dropdown-menu">
                            empty for now
                        </div>
                    </div>
                    <div class="dropdown" data-dropdown>
                        <button class="link" type="button" data-dropdown-button>SORT BY<i class="fa-solid fa-arrow-down-short-wide"></i></button>
                        <div class="dropdown-menu">
                            empty for now
                        </div>
                    </div>
                </div> -->
            </div>
            <hr>
            <div class="rooms">
            </div>
            <input type="hidden" id="room_number_hidden" name="room_number" value="-1">    
            </div>
        </div>

<!------------------------------------------- form step-3 user info ------------------------------------------>

        <div class="form-step">
            <div class="page-title">
                <h2>YOUR DETAILS</h2>
            </div>
            <div class="container5">
                <div class="info-row">
                    <span>BOOKING SUMMARY</span>
                </div>
                <div class="info-row">
                    <span>DATE</span>
                    <span class="date-span"></span>
                </div>
                <div class="info-row">
                    <span>NUMBER OF NIGHTS</span>
                    <span class="nb-of-nights-span">test</span>
                </div>
                <div class="info-row">
                    <span>GUESTS</span>
                    <span class="guests-span">test</span>
                </div>
                <div class="info-row">
                    <span>ROOMS</span>
                    <span class="room-info-span">-</span>
                </div>
                <!-- <div class="info-row">
                    <span>PACKAGE</span>
                    <span>-</span>
                </div> -->
                <div class="info-row">
                    <span>TOTAL PRICE INCL. TAX</span>
                    <span class="total_price">free for now</span>
                </div>
            </div>
            <hr>

            <div class="accordion">

                <div class="accordion-item">
                    <button class="accordion-header" type="button">
                        <strong>RESERVATION INFORMATION</strong>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <div class="accordion-body">
                        <div class="one-data">
                            <label for="title">TITLE*</label>
                            <select name="title" id="title" aria-readonly="true" required>
                                <option value="MR.">MR.</option>
                                <option value="MRS.">MRS.</option>
                                <option value="MS.">MS.</option>
                            </select>
                        
                        </div>
                        <div class="one-data">
                            <label for="country">COUNTRY OF RESIDENCE*</label>
                            <select name="country" id="country" required>
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
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>                        
                        </div>
                        <div class="one-data">
                            <label for="firstName">FIRST NAME*</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="firstName" id="firstName" type="text" value="<?php echo $_SESSION['user_fname']; ?>" required>
                            <?php else : ?>
                                <input name="firstName" id="firstName" type="text"  required>
                            <?php endif; ?>

                        </div>
                        <div class="one-data">
                            <label for="city">CITY*</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="city" id="city" type="text" value="<?php echo $_SESSION['city'];  ?>" required>
                            <?php else : ?>
                                <input name="city" id="city" type="text" required>
                            <?php endif; ?>
                        
                        </div>
                        <div class="one-data">
                            <label for="lastName">LAST NAME*</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="lastName" id="lastName" type="text" value="<?php echo $_SESSION['user_lname']; ?>" required>
                            <?php else : ?>
                                <input name="lastName" id="lastName" type="text" required>
                            <?php endif; ?>
                        
                        </div>
                        <div class="one-data">
                            <label for="address1">ADDRESS1*</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="address1" id="address1" type="text" value="<?php echo $_SESSION['address'] ?>" required>
                            <?php else : ?>
                                <input name="address1" id="address1" type="text" required>
                            <?php endif; ?>
                        
                        </div>
                        <div class="one-data">
                            <label for="email">EMAIL*</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="email" id="email" type="email" value="<?php echo $_SESSION['email'] ?>" required>
                            <?php else : ?>
                                <input name="email" id="email" type="email" required>
                            <?php endif; ?>
                        
                        </div>
                        <div class="one-data">
                            <label for="address2">ADDRESS2</label>
                            <input name="address2" id="address2" type="text">
                        
                        </div>
                        <div class="one-data">
                            <label for="confirmEmail">CONFIRM EMAIL*</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="confirmEmail" id="confirmEmail" value="<?php echo $_SESSION['email'] ?>" type="text" required>
                            <?php else : ?>
                                <input name="confirmEmail" id="confirmEmail" type="text" required>
                            <?php endif; ?>
                        
                        </div>
                        <div class="one-data">
                            <label for="zipCode">ZIP CODE OR POST CODE</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="zipCode" id="zipCode" value=<?php echo $_SESSION['zipcode'];  ?> type="text">
                            <?php else : ?>
                                <input name="zipCode" id="zipCode"  type="text">
                            <?php endif; ?>
                        
                        </div>
                        <div class="one-data">
                            <label for="phone">TELEPHONE NUMBER*</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="phone" id="phone" type="text" value=<?php echo $_SESSION['phone_number']; ?> required>
                            <?php else : ?>
                                <input name="phone" id="phone" type="text"  required>
                            <?php endif; ?>
                        
                        </div>
                        <div class="one-data">
                            <label for="age">Age*</label>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <input name="age" id="age" type="number" value=<?php echo $_SESSION['age']; ?> required>
                            <?php else : ?>
                                <input name="age" id="age" type="number" required>
                            <?php endif; ?>
                        
                        </div>

                    </div>
                </div>

                <hr>

                <div class="accordion-item">
                    <button class="accordion-header" type="button">
                        <strong>FLIGHT INFORMATION</strong>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <div class="accordion-body">
                        <div class="one-data flightTitle">FLIGHT ARRIVAL DETAILS</div>
                        <div class="one-data flightTitle">FLIGHT DEPARTURE DETAILS</div>
                        <div class="one-data">
                            <label for="arrivalFlightNumber">FLIGHT NUMBER</label>
                            <input name="arrivalFlightNumber" id="arrivalFlightNumber" type="text">
                        </div>

                        <div class="one-data">
                            <label for="departureFlightNumber">FLIGHT NUMBER</label>
                            <input name="departureFlightNumber" id="departureFlightNumber" type="text">
                        </div>

                        <div class="one-data">
                            <label for="arrivalDateTime">DATE-TIME</label>
                            <input name="arrivalDateTime" id="arrivalDateTime" type="datetime-local">
                        </div>

                        <div class="one-data">
                            <label for="departureDateTime">DATE-TIME</label>
                            <input name="departureDateTime" id="departureDateTime" type="datetime-local">
                        </div>

                    </div>
                </div>

                <hr>

                <div class="accordion-item">
                    <button class="accordion-header" type="button">
                        <strong>SPECIAL REQUESTS</strong>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <div class="accordion-body">
                        <div class="one-data">
                            <label for="additionalReq">ADDITIONAL REQUESTS</label>
                            <textarea name="additionalReq" id="additionalReq" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>

                <hr>

            </div>
            <button type="button" class="next-button" >CREDIT CARD DETAILS</button>

        </div>
<!------------------------------------------ form-step-3 ---------------------------------------------->
        <div class="form-step">
            <div class="page-title">
                <h2>PAYMENT</h2>
            </div>

            <div class="container5">
                <div class="info-row">
                    <span>BOOKING SUMMARY</span>
                </div>
                <div class="info-row">
                    <span>DATE</span>
                    <span class="date-span"></span>
                </div>
                <div class="info-row">
                    <span>NUMBER OF NIGHTS</span>
                    <span class="nb-of-nights-span"></span>
                </div>
                <div class="info-row">
                    <span>GUESTS</span>
                    <span class="guests-span"></span>
                </div>
                <div class="info-row">
                    <span>ROOMS</span>
                    <span class="room-info-span"></span>
                </div>
                <!-- <div class="info-row">
                    <span>PACKAGE</span>
                    <span></span>
                </div> -->
                <div class="info-row">
                    <span>TOTAL PRICE INCL. TAX</span>
                    <span class="total_price">free for now</span>
                </div>
                <input type="hidden" name="price" id="price">
            </div>

            <hr>

            <div class="container6">
                <div class="payment-heading">
                    <span>PAYMENT METHOD</span>
                    <span id="secure">SECURE CHECKOUT  <i class="fa-solid fa-lock"></i></span>
                </div>
                <div class="cards">
                    <img src="<?php echo URLROOT ?>/public/images/cards_logo.jpg" alt="cards" width="250px">
                </div>
                <div class="container7">
                    <div class="one-data">
                        <label for="cardNumber">CARD NUMBER*</label>
                        <input name="cardNumber" id="cardNumber" type="text" required>
                    </div>

                    <div class="month-year">
                        <div class="month-data">

                            <label for="month">MONTH*</label>
                            <select name="month" id="month" type="text" required>
                                <option value="JAN">JAN.</option>
                                <option value="FEB">FEB.</option>
                                <option value="MAR">MAR.</option>
                                <option value="APR">APR.</option>
                                <option value="MAY">MAY.</option>
                                <option value="JUN">JUN.</option>
                                <option value="JUL">JUL.</option>
                                <option value="AUG">AUG.</option>
                                <option value="SEP">SEP.</option>
                                <option value="OCT">OCT.</option>
                                <option value="NOV">NOV.</option>
                                <option value="DEC">DEC.</option>
                            </select>
                        </div>

                        <div class="year-data">
                            <label for="year">YEAR*</label>
                            <select name="year" id="year" required>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                    </div>

                    <div class="one-data">
                        <label for="nameOfCard">NAME ON CARD*</label>
                        <input name="nameOfCard" id="nameOfCard" type="text" required>
                    </div>

                    <div class="one-data">
                        <label for="securityCode">SECURITY CODE*</label>
                        <input name="securityCode" id="securityCode" type="text" required>
                    </div>

                </div>
            </div>
            <hr>
            <button type="submit" class="next-button">CONFIRM BOOKING</button>
        </div>
    </form>

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