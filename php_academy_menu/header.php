<?php
$data = include('data_links.php');
$links = $data['php_net'];
$lessonsLinks = $data['lessons'];
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
</head>
<body>
<main>
    <header>

        <ul class="nav justify-content-center">
            <?php foreach ($lessonsLinks as $lessonLink): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $lessonLink['link']; ?>"><?php echo $lessonLink['name']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </header>