<?php

include 'database.php';

?>



<!DOCTYPE html>

<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Trombinoscope</title>



  <link rel="stylesheet" type="text/css" href="trombi.css">
</head>

<body>



  <header>
    <a href="Trombinoscope.html">
      <h1>Trombinoscope </h1>
    </a>
    <p>Année 2023/2024</p>

  </header>
  <main>





    <?php foreach ($students as $aStudent) : ?>
      <div class="carte">
        <a href="fiche.html">
          <?php if (isset($aStudent['photo'])) {
            $photo = 'groupe' . $aStudent['group'] . '/small/' . $aStudent['photo'];
          } else {
            $photo = 'defaut.png';
          }
          ?>
          <figure class="photo"><img src="./images/<?= $photo ?>" alt="photo de Aimé Mihi">
          </figure>
          <div class="infos">
            <p class="nom"><?= $aStudent['firstname'] ?> <span><?= $aStudent['lastname'] ?></span></p>
            <p class="ddn"><?= $aStudent['birthdate'] ?></p>
            <p class="groupe">groupe <span><?= $aStudent['group'] ?></span></p>
          </div>
        </a>
      </div>
    <?php endforeach ?>




  </main>
</body>

</html>