<?php

  $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

  $GlobalHead = <<<'EOD'
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>Gefion Programming</title>

  <link rel='stylesheet prefetch' href='motus/normalize.css'>
  <link rel='stylesheet prefetch' href='motus/motus.min.css'>
  <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='css/prism.css'>
  <link rel='stylesheet' href='css/style.min.css'>

  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet'>

  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/markdown-it/8.0.0/markdown-it.min.js'></script>
  <script src='js/motus.js'></script>
  <script src='js/index.js'></script>
  <script src='js/prism.js'></script>
  EOD;

  $GlobalHeadDistro = <<<'EOD'
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>Gefion Programming</title>

  <link rel='stylesheet prefetch' href='http://gefion-programming.com/motus/normalize.css'>
  <link rel='stylesheet prefetch' href='http://gefion-programming.com/motus/motus.min.css'>
  <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='http://gefion-programming.com/css/prism.css'>
  <link rel='stylesheet' href='http://gefion-programming.com/css/style.min.css'>

  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet'>

  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/markdown-it/8.0.0/markdown-it.min.js'></script>
  <script src='http://gefion-programming.com/js/motus.js'></script>
  <script src='http://gefion-programming.com/js/index.js'></script>
  <script src='http://gefion-programming.com/js/prism.js'></script>
  EOD;

  $globalNav = <<<'EOD'
  <li><a href='http://gefion-programming.com/about'>Om os</a></li>
  <li><a href='#' id='navopen' class='button' onclick='drop1()'>Projekter</a></li>
  <div id='navopen' class='dropdown1 dropClosed'>
    <ul>
      <li><a href='http://gefion-programming.com/p/intro-til-html'>Intro til HTML</a></li>
      <li><a href='http://gefion-programming.com/projects' class='muted'>&gt; See all</a></li>
    </ul>
  </div>
  EOD;

  $dateYear = date("Y");

  $globalFooter = <<<HTML
    <div class="container">
      <div class="grid-6 offset-3 bt center muted pt mb">
        <p>
          Built using <a href="http://resources.ludvig.xyz/motus/">motus</a>, an open-source framework by <a href="http://ludvig.xyz">Ludvig Alexander Brüchmann</a>.
          <br>
          Copyright &copy; Gefion Programming, $dateYear
        </p>
      </div>
    </div>
HTML;

?>
