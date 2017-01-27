<?php
$colors = array('red', 'yellow', 'green', 'blue', 'light', 'dark', 'black');
$sizes = array('tiny', 'small', 'large', 'huge');

function colors($str, $base = false) {
  global $colors;

  if ($base) {
    echo str_replace('[color]', 'base', $str);
  }

  foreach ($colors as $color) {
    echo str_replace('[color]', $color, $str);
  }
}

function sizes($str, $base = false) {
  global $sizes;

  if ($base) {
    echo str_replace('[size]', 'base', $str);
  }

  foreach ($sizes as $size) {
    echo str_replace('[size]', $size, $str);
  }
}

function content($str) {
  require 'pages/faker/autoload.php';
  $faker = Faker\Factory::create();

  $contents = array(
    'h1' => '<h1>' . $faker->sentence(4) . '</h1>',
    'h2' => '<h2>' . $faker->sentence(4) . '</h2>',
    'h3' => '<h3>' . $faker->sentence(5) . '</h3>',
    'h4' => '<h4>' . $faker->sentence(6) . '</h4>',
    'h5' => '<h5>' . $faker->sentence(6) . '</h5>',
    'h6' => '<h6>' . $faker->sentence(6) . '</h6>',
    'p'  => '<p>'  . $faker->paragraph(7) . '</p>',
  );

  $c = explode('-', $str);

  foreach ($c as $key) {
    echo $contents[$key];
  }
}
