<?php 

    include 'database.php';

    $numStudent = 23;
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Trombinoscope - Aimé MIHI</title>



    <link rel="stylesheet" type="text/css" href="trombi.css">
</head>

<body>

    <header>
        <a href="Trombinoscope.html"><h1>Trombinoscope </h1></a>
        <p>Année 2023/2024</p>

    </header>
    <main>
        <div class="fiche">
            <div class="gauche">
                <figure class="big_photo">
                    <img src="./images/defaut.png" alt="photo par défaut">
                </figure>
            </div>
            <div class="detail">
                <p class="nom">André <span>Mihi</span></p>
                <p class="ddn">01/02/2005</p>
                <p class="groupe">groupe <span>12</span></p>
                <p>
                    Je suis un brillant élève de l'IUT Sénart Fontainebleau. Je suis passionné par le WEB et la création
                    numérique.
                </p>
            </div>
        </div>

    </main>
</body>

</html>