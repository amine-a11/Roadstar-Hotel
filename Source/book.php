<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../Style/main-style.css">
    <link rel="stylesheet" href="../Style/book-style.css">
    <link rel="stylesheet" href="../Style/all.min.css">
    <link rel="stylesheet" href="../Style/normalize.css">
    <script src="../js/book-script.js" defer></script>
    <title>Book Your Room</title>
</head>

<body>
    <header>
        <!-- logo mail call -->
        <nav>
            <div class="icons">
                <a href="mailto:mohamedaminehajji11@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                <a href="#"><i class="fa-solid fa-phone"></i></a>
            </div>
        </nav>
        <div class="logo"><a href="main.php"><img src="../images/logo.png" alt="logo"></a></div>
    </header>
    <!-- from contains :
        -check-in check-out date ✅
        -number of adults and children in each room ✅
        -next page button ✅ 
    -->
    <form action="#">
        <div class="progressbar">
            <div class="progress-step progress-step-active" data-title="intro"></div>
            <div class="progress-step" data-title="select Room"></div>
            <div class="progress-step" data-title="your deatails"></div>
            <div class="progress-step" data-title="confirmation"></div>
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
                        <input type="date" id="check-in-calender" onchange="handlecod()" required>
                    </div>
                </div>

                <!-- check-out -->
                <div class="checkOut">
                    <div class="co">
                        CHECK-OUT <span>DATE</span>
                    </div>
                    <div class="cod">
                        <input type="date" id="check-out-calender" onchange="handlecid()" required>
                    </div>
                </div>

            </div>

            <!-- number of nights ((check-out)-(check-in)) -->
            <div class="nights">
                YOUR ARE BOOKING <span id="nb-of-nights">0</span> NIGHTS
            </div>

            <!-- container2 for the number of adults and children in each room-->
            <div class="container2">
                <button type="button" class="show" id="add-new-room" onclick="addRoom()">+ ADD ANOTHER ROOM</button>
                <button type="button" class="hide" id="remove-room" onclick="removeRoom()">- REMOVE ROOM</button>
                <!-- class room represents one room -->
                <div class="room" id="room1">
                    <span id="room-nb">ROOM 1</span>

                    <!-- adults -->
                    <div class="adult">
                        <div class="client">
                            <div class="adu">ADULTS</div>
                            <div class="years">(12 YEARS AND ABOVE)</div>
                        </div>
                        <div class="nb-of-adu">
                            <button class="decrease" id="room1-decrease" type='button'
                                onclick="stepper(this)">-</button>
                            <input type="number" id="room1-nb-of-adu-value" value="1" min="1" max="8" readonly>
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
            <hr>
            <button type="button" class="next-button">FIND A ROOM</button>
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
                    <h2>SELECT ROOM</h2>
                    <span>Found <span id="nb-of-room-found">N</span> ROOMS</span>
                </div>
                <div class="edit-order-of-rooms">

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
                </div>
            </div>
            <hr>
            <div class="rooms">
                <div class="norooms">
                    THERE IS NO AVAILABILITY, PLEASE SELECT MODIFY TO CHANGE YOUR DATES.
                </div>
                <button type="button" class="next-button" onclick="fillBookingSummary()">this button is just to pass to the next step for now</button>
                
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
                    <span class="date-span">test</span>
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
                <div class="info-row">
                    <span>PACKAGE</span>
                    <span>-</span>
                </div>
                <div class="info-row">
                    <span>TOTAL PRICE INCL. TAX</span>
                    <span>free for now</span>
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
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="tunisia">Tunisia</option>
                            </select>                        
                        </div>
                        <div class="one-data">
                            <label for="firstName">FIRST NAME*</label>
                            <input name="firstName" id="firstName" type="text" required>
                        
                        </div>
                        <div class="one-data">
                            <label for="city">CITY*</label>
                            <input name="city" id="city" type="text" required>
                        
                        </div>
                        <div class="one-data">
                            <label for="lastName">LAST NAME*</label>
                            <input name="lastName" id="lastName" type="text" required>
                        
                        </div>
                        <div class="one-data">
                            <label for="address1">ADDRESS1*</label>
                            <input name="address1" id="address1" type="text" required>
                        
                        </div>
                        <div class="one-data">
                            <label for="email">EMAIL*</label>
                            <input name="email" id="email" type="email" required>
                        
                        </div>
                        <div class="one-data">
                            <label for="address2">ADDRESS2</label>
                            <input name="address2" id="address2" type="text">
                        
                        </div>
                        <div class="one-data">
                            <label for="confirmEmail">CONFIRM EMAIL*</label>
                            <input name="confirmEmail" id="confirmEmail" type="text" required>
                        
                        </div>
                        <div class="one-data">
                            <label for="zipCode">ZIP CODE OR POST CODE</label>
                            <input name="zipCode" id="zipCode" type="text">
                        
                        </div>
                        <div class="one-data">
                            <label for="phone">TELEPHONE NUMBER*</label>
                            <input name="phone" id="phone" type="text" required>
                        
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
            <button type="button" class="next-button" onclick="fillBookingSummary()">CREDIT CARD DETAILS</button>

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
                <div class="info-row">
                    <span>PACKAGE</span>
                    <span></span>
                </div>
                <div class="info-row">
                    <span>TOTAL PRICE INCL. TAX</span>
                    <span>free for now</span>
                </div>
            </div>

            <hr>

            <div class="container6">
                <div class="payment-heading">
                    <span>PAYMENT METHOD</span>
                    <span id="secure">SECURE CHECKOUT  <i class="fa-solid fa-lock"></i></span>
                </div>
                <div class="cards">
                    <img src="../images/cards_logo.jpg" alt="cards" width="250px">
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
            <button type="button" class="next-button">CONFIRM BOOKING</button>
        </div>
        <div class="form-step">
            <h1 style="margin:500px;">something</h1>
        </div>
    </form>

<!-------------------------------------------------Start Footer--------------------------------------------->
<?php
    require "../Source/footer.php"
?>
<!------------------------------------------------------End Footer-------------------------------------------------->
<div class="back-to-top">
    &#8593;	
</div>

</body>

</html>