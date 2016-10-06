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
  <div class="grid-12 center">
    <h6>Edgan Allan Poe, The Raven</h6>
  </div>
  <div class="grid-4 offset-2 center">
    <p>
      Once upon a midnight dreary, while I pondered, weak and weary,<br>
      Over many a quaint and curious volume of forgotten lore—<br>
      While I nodded, nearly napping, suddenly there came a tapping,<br>
      As of some one gently rapping, rapping at my chamber door.<br>
      “’Tis some visitor,” I muttered, “tapping at my chamber door—<br>
      Only this and nothing more.”
    </p>
  </div>
  <div class="grid-4 center">
    <p>
      Presently my soul grew stronger; hesitating then no longer, <br>
      “Sir,” said I, “or Madam, truly your forgiveness I implore;<br>
      But the fact is I was napping, and so gently you came rapping,<br>
      And so faintly you came tapping, tapping at my chamber door,<br>
      That I scarce was sure I heard you”—here I opened wide the door;—<br>
      Darkness there and nothing more.
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
