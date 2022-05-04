<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>Admin Dashbord | Reservations</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!--client-dashbord Style File-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/client-dashbord-style.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/client-dashbord-reservations-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/admin-client.js" defer></script>
    <!---->
<body>

<?php
    include "client_dashbord.php";
?>
<div class="reservations">
<table>

<thead>
    <tr>
        <th> Number</th>
        <th> Checkin Date</th>
        <th>Checkout Date</th>
        <th>Number Of Adults</th>
        <th>Number Of children</th>
        <th>Price</th>

        
        
    </tr>
</thead>
<tbody>
    <?php foreach($data['reservation'] as $reservation) : ?>
        
        <tr class="is<?php echo(date("Y-m-d") >= $reservation->checkout_date);?>">
            <td><?php echo $reservation->room_nb?></td>
            <td><?php echo $reservation->checkin_date?></td>
            <td><?php echo $reservation->checkout_date?></td>
            <td><?php echo $reservation->nb_of_adult?></td>
            <td><?php echo $reservation->nb_of_children?></td>
            <td><?php echo $reservation->price?>$</td>

        </tr>
    <?php endforeach; ?>
</tbody>

</table>

</div>
    
</body>
</html>