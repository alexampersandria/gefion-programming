<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <title>Gefion Programming</title>

  <link rel='stylesheet prefetch' href='http://resources.ludvig.xyz/normalize.css'>
  <link rel='stylesheet prefetch' href='http://resources.ludvig.xyz/motus/css/motus.min.css'>
  <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel="stylesheet" href="css/style.min.css">

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<div class="bg header">
  <div class="container">
    <div class="inline menuNav">
      <div class="grid-6 logo-grid">
        <span class="logo">Gefion Programming</span>
      </div>
      <div class="grid-6 nav-grid">
        <ul>
          <li><a href="#">Theodor</a></li>
          <li><a href="http://elementory.co/">Mads</a></li>
          <li><a href="#">Lui</a></li>
          <li><a href="http://ludvig.xyz/">Ludvig</a></li>
        </ul>
      </div>
    </div>
    <div class="grid-6 offset-3">
      <ul class="inline">
        <div class="card">
          <h5>Aflys Moduler Knappen <i class="ion-ios-color-wand"></i></h5>
          <p>
            Med denne knap kan du aflyse moduler på lectio! Alt du skal gøre er at trække knappen til bogmærkelinjen på din computer, når du så går ind på dit skema på lectio skal du trykke på knappen i din bogmærke linje, så skriver du bare navnet ind på det hold du vil aflyse moduler for, og voila!
          </p>
          <div class="center">
            <a class="btn red rounded" href="javascript:var promptHold; promptHold=prompt('Angiv hold du vil fjerne moduler for, f.eks. 2m da'); ditHold = '\'Hold: '; ditHold += promptHold; ditHold += '\''; $('a[rel*='+ditHold+']').addClass('s2cancelled');$('a[rel*='+ditHold+']').children().children().removeClass('s2changed');">Aflys Moduler</a>
          </div>
        </div>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="grid-12 center muted pt mb">
    Copyright &copy; Gefion Programming, <?php echo date("Y");?>
  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src="js/index.js"></script>
<script src="js/motus.js"></script>

</body>
</html>
