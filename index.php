<?php
$path = 'pages/';
$header = $path . 'header.php';
$footer = $path . 'footer.php';

require $path . 'faker/autoload.php';
$faker = Faker\Factory::create();

require $path . 'functions.php';
require $header;

if (isset($_GET['uri'])) {
    $uri = $_GET['uri'];
    $uri = $uri == '' ? 'index' : $uri;

    $file_html = $path . $uri . '.html';
    $file_php = $path . $uri . '.php';

    if (file_exists($file_php)) {
        require $file_php;
    } else {
        if (file_exists($file_html)) {
            require $file_html;
        } else {
            echo 'File not found!';
        }
    }
}

include $footer;
