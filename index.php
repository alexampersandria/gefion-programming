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
        <img src="logo.png" class="logo img-responsive-max">
      </div>
      <div class="grid-11 nav-grid">
        <ul>
          <li><a href="#">Om os</a></li>
          <li><a href="#">Projekter</a></li>
          <li><a href="#">Forum</a></li>
        </ul>
      </div>
    </div>
    <div class="grid-12 mt center">
      <h1 class="headerlogo">Gefion Programming.</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="grid-12 center muted pt mb">
    <p>
      Built using <a href="http://resources.ludvig.xyz/motus/">motus</a>, an open-source framework by <a href="http://ludvig.xyz">Ludvig Alexander Brüchmann</a>.
    </p>
    <p>
      Copyright &copy; Gefion Programming, <?php echo date("Y");?>
    </p>
  </div>
</div>

</body>
</html>
