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
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-dashbord-update-rooms-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/admin-client.js" defer></script>
    <!---->
<body>

<?php

    include "admin_dashbord.php";
?>
<div class="update">
    <div class="heading">Update room</div>
    <form
    action="<?php echo URLROOT; ?>/admin_account/update_room/<?php echo $data['room']->room_nb ?>" method="POST">
        <div class="row">
        <div class="label"><label for="roomnb">Room number</label></div>
            <input type="number" name="number" id="roomnb" readonly value="<?php echo $data['room']->room_nb ?>">
        </div>
        <div class="row">
            <div class="label"><label for="roomtype">Room type</label></div>
            <select name="type" id="roomtype">
                <optgroup label="Current Type: <?php echo $data['room']->room_type ?>">
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="double-double">Double-Double</option>
                </optgroup>
            </select>
        </div>
        <div class="row">
            <div class="label"><label>Room availability</label></div>
            <?php if(strcmp($data['room']->status,'available')== 0) {?>
                <input class="radio" type="radio" name="status" id="av" value="available" checked>
                <label for="av">Available</label>

                <input class="radio" type="radio" name="status" id="notav" value="not_available">
                <label for="notav">Not Available</label>

            <?php }
            else {?>
                <input class="radio" type="radio" name="status" id="av" value="available" >
                <label for="av">Available</label>
                <input class="radio" type="radio" name="status" id="notav" value="not_available" checked>
                <label for="notav">Not Available</label>
                <?php }?>  
        </div>
        <div class="row">
            <div class="label"><label for="roomcost">Cost per night</label></div>
            <input type="number" name="cost" id="roomcost" value="<?php echo $data['room']->cost_per_night ?>">
        </div>
        <div class="row">
            <div class="label"><label for="roomview">Room view</label></div>
            <input type="text" name="view" id="roomview" readonly value="<?php echo $data['room']->view ?>">
        </div>
        <div class="row">
        <div class="label"><label for="roomocc">Room occupancy</label></div>
            <input type="number" name="occupancy" id="roomocc"  value="<?php echo $data['room']->occupancy?>" max="4" min="1">
        </div>

        <button class="submit" name="submit" type="submit">Submit</button>
    </form>

</div>
</body>
</html>