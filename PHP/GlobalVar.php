<?php

  $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

  $GlobalHead = "
  <meta charset='UTF-8'>
  <title>Gefion Programming</title>

  <link rel='stylesheet prefetch' href='motus/normalize.css'>
  <link rel='stylesheet prefetch' href='motus/motus.min.css'>
  <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='css/style.min.css'>
  <link rel='stylesheet' href='css/prism.css'>

  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet'>

  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='js/motus.js'></script>
  <script src='js/index.js'></script>
  <script src='js/prism.js'></script>
  ";

  $GlobalHeadDistro = "
  <meta charset='UTF-8'>
  <title>Gefion Programming</title>

  <link rel='stylesheet prefetch' href='http://gefion-programming.com/motus/normalize.css'>
  <link rel='stylesheet prefetch' href='http://gefion-programming.com/motus/motus.min.css'>
  <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='http://gefion-programming.com/css/style.min.css'>
  <link rel='stylesheet' href='http://gefion-programming.com/css/prism.css'>

  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet'>

  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://gefion-programming.com/js/motus.js'></script>
  <script src='http://gefion-programming.com/js/index.js'></script>
  <script src='http://gefion-programming.com/js/prism.js'></script>
  ";

  $globalNav = "
  <li><a href='about'>Om os</a></li>
  <li><a href='#'>Projekter</a></li>
  <li><a href='#'>Forum</a></li>
  "

?>
