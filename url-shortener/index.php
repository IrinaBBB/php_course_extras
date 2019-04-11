<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>URL Shortener</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Shorten a URL.</h1>
        <?php if (isset($_SESSION['feedback'])) {
            echo "<p>{$_SESSION['feedback']}</p>";
            unset($_SESSION['feedback']);
        } ?>
        <form action="shorten.php" method="post">
            <input class="url" type="url" name="url" placeholder="Enter a URL here." autocomplete="off">
            <input type="submit" value="Shorten">
        </form>
    </div>
</body>
</html>