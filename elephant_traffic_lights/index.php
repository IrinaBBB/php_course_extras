<?php
$time = date('H:i:s');
$hour = date('H');
$minute = date('i');
$second = date('s');
$day = date('j');
$year = date('Y');

$width = 0;
$height = 0;
$color = 'white';

if ($minute % 3 == 0) {
    $width = $hour * 20;
    $height = $day ** 3;
    $color = 'red';
} elseif (($minute % 2 == 0) && ($minute % 3 != 0)) {
    $width = $height = (round(($year) ** 0.5)) * 5;
    $color = 'yellow';
} else {
    $width = $minute * $second;
    $height = $hour ** 2;
    $color = 'green';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP Academy</title>
    <style>
        .elephant {
            width: <?php echo $width; ?>px;
            height: <?php echo $height; ?>px;
            background-color: <?php echo $color; ?>;
        }
    </style>
</head>
    <body>
        <main>
            <div class="content">
                <h1>Слоновий светофор</h1>
                <h2 class="time"><?php echo $time; ?></h2>
                <div class="elephant">
            </div>
            </div>
        </main>
    </body>
</html>
