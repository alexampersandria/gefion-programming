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
    <h6 class="center">Tell-tale Heart, Edgar Allan Poe</h6>
    <p class="justify">
      Presently I heard a slight groan, and I knew it was the groan of mortal terror. It was not a groan of pain or of grief --oh, no! --it was the low stifled sound that arises from the bottom of the soul when overcharged with awe. I knew the sound well. Many a night, just at midnight, when all the world slept, it has welled up from my own bosom, deepening, with its dreadful echo, the terrors that distracted me. I say I knew it well. I knew what the old man felt, and pitied him, although I chuckled at heart. I knew that he had been lying awake ever since the first slight noise, when he had turned in the bed. His fears had been ever since growing upon him. He had been trying to fancy them causeless, but could not. He had been saying to himself --"It is nothing but the wind in the chimney --it is only a mouse crossing the floor," or "It is merely a cricket which has made a single chirp." Yes, he had been trying to comfort himself with these suppositions: but he had found all in vain. All in vain; because Death, in approaching him had stalked with his black shadow before him, and enveloped the victim. And it was the mournful influence of the unperceived shadow that caused him to feel --although he neither saw nor heard --to feel the presence of my head within the room.
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
