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
        <?php echo $globalNav; ?>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="grid-8 offset-2">
    <h4 class="center">Lui, sådan her bruger man motus</h4>
      <pre>
        <code class="prism language-python">
import random

printnames = open("names.json", "w")

opener = '{\n\t"pokemans": {\n '

printnames.write(opener)
printnames.close()

count = 0

for x in range(10000):
    count = count + 1
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

    ap = str(random.randint(0,11))
    dp = str(random.randint(0,11))

    pokeman = '\t\t"' + str(count) + '": {\n\t\t\t"name": "' + name + '",\n\t\t\t"ap": ' + ap + ',\n\t\t\t"dp": ' + dp + '\n\t\t},\n'

    printnames = open("names.json", "a")
    printnames.write(pokeman)
    printnames.close()

printnames = open("names.json", "a")

closer = '\t\t"0": {\n\t\t\t"name": "Sentinel",\n\t\t\t"ap": 11,\n\t\t\t"dp": 11\n\t\t}\n\t}\n}'

printnames.write(closer)
printnames.close()
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
