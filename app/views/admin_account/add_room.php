<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>Admin Dashbord | Update Room</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!--client-dashbord Style File-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/client-dashbord-style.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-dashbord-add-rooms-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/admin-client.js" defer></script>
    <!---->
<body>

<?php

    include "admin_dashbord.php";
?>
<div class="add">
    <div class="heading">add room</div>
    <form
    action="<?php echo URLROOT; ?>/admin_account/add_room" method="POST">
        <div class="row">
        <div class="label"><label for="roomnb">Room number</label></div>
            <input type="number" name="number" id="roomnb" ?>
        </div>
        <div class="row">
            <div class="label"><label for="roomtype">Room type</label></div>
            <select name="type" id="roomtype">
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="double-double">Double-Double</option>
                    <option value="quad">Quad</option>
                    <option value="triple">Triple</option>
                    <option value="twin">Twin</option>
            </select>
        </div>
        <div class="row">
            <div class="label"><label>Room availability</label></div>
                <input class="radio" type="radio" name="status" id="av" value="available" checked>
                <label for="av">Available</label>

                <input class="radio" type="radio" name="status" id="notav" value="not_available">
                <label for="notav">Not Available</label>
        </div>

        <div class="row">
            <div class="label"><label for="roomcost">Cost per night</label></div>
            <input type="number" name="cost" id="roomcost" >
        </div>
        <div class="row">
            <div class="label"><label for="roomview">Room view</label></div>
            <input type="text" name="view" id="roomview" >
        </div>
        <div class="row">
            <div class="label"><label for="roomocc">Room occupancy</label></div>
            <input type="number" name="occupancy" id="roomocc" max="4" min="1">
        </div>

        <button class="submit" name="submit" type="submit">Submit</button>
    </form>

</div>
</body>
</html>