<?php
session_start();
require_once 'classes/Shortener.php';

$s = new Shortener();

if (isset($_POST['url'])) {
    $url = $_POST['url'];

    if ($code = $s->makeCode($url)) {
        $_SESSION['feedback'] = "Generated! Your short URL is: <a href=\"http://url-shortener/$code\">http://url-shortener/$code</a>";
    } else {
        $_SESSION['feedback'] = "There was a problem. Invalid url";
    }
}

header('Location: index.php');





