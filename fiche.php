<?php
// 1 - Récupérer, calculer ou déclarer les données
include 'database.php';

$numStudent = 37;
$student = $students[$numStudent];

$page_title = 'Trombinoscope - ' . $student['firstname']  . ' ' . $student['lastname'];

// 2 - Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/fiche.view.php';
$content = ob_get_clean();

// 3 - Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';