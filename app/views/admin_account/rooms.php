<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>Admin Dashbord | Rooms</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!--client-dashbord Style File-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/client-dashbord-style.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-dashbord-rooms-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/admin-client.js" defer></script>
    <!---->
<body>

<?php
// if(session_status() == PHP_SESSION_NONE){
//     session_start();
// }
    include "admin_dashbord.php";
?>
    <table class="rooms">

            <thead>
                <tr>
                    <th> Number</th>
                    <th class="picture"> Picture</th>
                    <th> Type</th>
                    <th>Status</th>
                    <th>Cost</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['room'] as $room) : ?>
                    <tr class="<?php echo $room->status?>">
                        <td><?php echo $room->room_nb?></td>
                        <td > <img src="<?php echo URLROOT ?>/public/images/roomImages/room<?php echo $room->room_nb?>/room<?php echo $room->room_nb?>.jpg" alt="room image"></td>
                        <td><?php echo $room->room_type?></td>
                        <td><?php echo $room->status?></td>
                        <td><?php echo $room->cost_per_night?>$</td>
                        <td><?php echo $room->view?></td>
                        <td><a href="<?php echo URLROOT."/admin_account/update_room/" .$room->room_nb?>"><i class="fa-solid fa-wrench"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        
    </table>
    <button class="settings" >
       <a href="<?php echo URLROOT."/admin_account/add_room"?>"><i class="fa-solid fa-plus"></i></a> 
    </button>
</body>
</html>