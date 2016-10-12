<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <?php
    include('PHP/GlobalVar.php');
    echo $GlobalHead;
  ?>

</head>

<body>

<div class="bg header">
  <div class="container">
    <div class="inline menuNav">
      <div class="grid-1 logo-grid">
        <a href="http://gefion-programming.com"><img src="logo.png" class="logo img-responsive-max"></a>
      </div>
      <div class="grid-11 nav-grid">
        <ul>
          <?php echo $globalNav; ?>
        </ul>
      </div>
    </div>
    <div class="grid-12 mt center">
      <div class="colorWrap">
        <span class="colorThingy"></span>
        <span class="colorThingy"></span>
        <span class="colorThingy"></span>
        <br>
        <span class="colorThingy"></span>
        <span class="colorThingy"></span>
        <span class="colorThingy"></span>
      </div>
      <h1 class="colorHeader">Om os</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="grid-8 offset-2">
    <p class="justify">
      Gefion-Programming er en studiegruppe på Gefion Gymnasium, som har fokus på leg og udvikling med programmering og IT-værktøjer. Vi består af en gruppe af elever, alle med varierende evner og erfaring, som alle elsker at lege med diverse aspekter af computerverdenen. Vi laver alt fra webdesign til at lege med machine-learning algoritmer. Har du noget helt særligt i tankerne, som du gerne vil have hjælp til, eller lære at arbejde med, så er Gefion-Programming helt sikkert et sted for dig!
    </p>
    <p>
      Målet med udvalget er for os at prøve kræfter med nye værktøjer og at tilbyde en platform for alle der er interesserede i programmering, hvor de kan diskuterere, lære, og finde andre med samme interesser.
    </p>
  </div>
</div>

<div class="container">
  <div class="grid-6 offset-3 bt center muted pt mb">
    <p>
      Built using <a href="http://resources.ludvig.xyz/motus/">motus</a>, an open-source framework by <a href="http://ludvig.xyz">Ludvig Alexander Brüchmann</a>.
      <br>
      Copyright &copy; Gefion Programming, <?php echo date("Y");?>
    </p>
  </div>
</div>

</body>
</html>
