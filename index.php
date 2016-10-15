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
      <h1 class="headerlogo">Gefion Programming.</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="grid-12 center">
    <h6>Vil du være med?</h6>
  </div>
  <div class="grid-8 offset-2 justify">
    <p>
      I en verden der i stigende grad er digitaliseret, er der større efterspørgsel efter IT-kyndige end nogensinde før. Vi lever i en tid hvor man ikke behøver at tage en 5 år lang uddannelse for at lære at sætte en hjemmeside op. Med tid og interesse kan alle lære alt fra simpel HTML til C++ og maskinlæring, uden at skulle flytte sig fra computeren. Der er et overflod af viden, og en overflod af mennesker der med glæde deler ud af deres erfaring. Det eneste krav: Sæt dig ved dit tastatur, lyt, læs og leg!
    </p>
    <p>
      Vil du have fat i os? Skriv til <a href="mailto:admin@gefion-programming.com">admin@gefion-programming.com</a>.
    </p>
  </div>
</div>

<?php echo $globalFooter; ?>

</body>
</html>
