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

<div class="container pt">
  <div class="inline menuNav menuNavDark bb">
    <div class="grid-1 logo-grid">
      <img src="logoBlack.png" class="logo img-responsive-max">
    </div>
    <div class="grid-11 nav-grid">
      <ul>
        <li><a href="#">Om os</a></li>
        <li><a href="#">Projekter</a></li>
        <li><a href="#">Forum</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="grid-12 center">
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
