<?php
session_start();

if(!isset($title)) {
  $title = "Name Generator";
}

if(!isset($language)) {
  $language = "Python";
}

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
          <?php echo $globalNav; ?>
        </ul>
      </div>
    </div>
    <div class="grid-12 mt center">
      <h1 class="headerTitle"><?php echo $title; ?></h1>
      <h6 class="headerLanguage"><?php echo $language; ?></h6>
    </div>
  </div>
</div>

<div class="container">
  <div class="grid-12">
    <pre>
      <code class="prism language-python">
import random

syllabels = random.randint(2,4)
vorc = random.randint(0,1)
name = ""
consonants = 'bcdfghjklmnpqrstvwxz'
vowels = 'aeiouy'
for x in range(syllabels):
    chooser = random.randint(0,9)
    if vorc == 0:
        vowel = random.choice(vowels)
        name = name + vowel
        consonant = random.choice(consonants)
        if chooser == 0:
            name = name + consonant + consonant
        else:
            name = name + consonant
    else:
        consonant = random.choice(consonants)
        if chooser == 0:
            name = name + consonant + consonant
        else:
            name = name + consonant
        vowel = random.choice(vowels)
        name = name + vowel

name = name.title()
      </code>
    </pre>
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
