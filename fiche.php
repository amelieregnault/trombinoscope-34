<?php
session_start();

// 1 - Récupérer, calculer ou déclarer les données
if (empty($_GET['id']) || !ctype_digit($_GET['id']) || $_GET['id'] < 1){
    $_SESSION['message'] = "L'identifiant n'est pas valide.";
    header('Location: trombinoscope.php');
    exit;
}

$numStudent = intval($_GET['id']);

require_once 'app/model/connexionBDD.php';
require_once 'app/model/trombi.model.php';
$student = getStudent($numStudent, getDatabaseConnection());


$page_title = 'Trombinoscope - ' . $student['firstname']  . ' ' . $student['lastname'];

// 2 - Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/fiche.view.php';
$content = ob_get_clean();

// 3 - Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';