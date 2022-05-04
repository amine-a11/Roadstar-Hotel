<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT ?>/public/images/logo.png" type="image/x-icon">
    <title>Client space | Claim</title>
    <!--Web Icons -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/all.min.css">
    <!--Normalize the elements-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/normalize.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-dashbord-clients-style.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/admin-dashbord-statistics-style.css">
    <!-- script -->
    <script src="<?php echo URLROOT ?>/public/js/Reveal-On-Scroll.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/sweetalert2@11.js" defer></script>
    <script src="<?php echo URLROOT ?>/public/js/chart.js"></script>
    
    <!---->
    </head>
<body>

<?php
// if(session_status() == PHP_SESSION_NONE){
//     session_start();
// }
    include "admin_dashbord.php";

?>

<div class="stats">
    <canvas id="myChart"></canvas>
    <canvas id="myChart2"></canvas>
</div>

</body>
<script>

let label=[];
let values=[];
let labelRoom=[];
let valuesRoom=[];
<?php foreach($data['label'] as $l): ?>
label.push(to_month(<?php echo $l ;?>));
<?php endforeach; ?>

<?php foreach($data['values'] as $l): ?>
values.push(<?php echo $l ;?>);
<?php endforeach; ?>


<?php foreach($data['labelRooms'] as $l): ?>
labelRoom.push('<?php echo $l ;?>');
<?php endforeach; ?>

<?php foreach($data['valueRooms'] as $l): ?>
valuesRoom.push(<?php echo $l ;?>);
<?php endforeach; ?>

function to_month(n){
    list=['January','February','March','April','May','June','July','August','September','October','November','December'];
    return list[n-1];

}
const ctx = document.getElementById('myChart').getContext('2d');
const ctx2 = document.getElementById('myChart2').getContext('2d');

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:label ,
        datasets: [{
            label: 'profits per month',
            data: values,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'profits per month',
                font: {
                        size: 40
                }
            }
        }


    }
});

const myChart2 = new Chart(ctx2, {
    type: 'pie',
    data: {

        labels: labelRoom ,
        datasets: [{
            label: 'profits per month',
            data: valuesRoom,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255,0,251, 0.2)'

                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255,0,251, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            x: {
                display: false,
            },
            y: {
                display: false,
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Room Types',
                font: {
                        size: 40
                }
            }
        }
    }
});
</script>