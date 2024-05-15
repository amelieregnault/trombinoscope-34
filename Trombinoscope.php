<?php
session_start();

// Récupération des données
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

require_once 'app/model/connexionBDD.php';
require_once 'app/model/trombi.model.php';


$pdo = getDatabaseConnection();
$nbPages = getNbPages($pdo);
$numPage = 1;
if (isset($_GET['page']) && ctype_digit($_GET['page']) && $_GET['page'] > 0 && $_GET['page']<=$nbPages) {
    $numPage = $_GET['page'];
}

// Ecrire le code pour récupérer le tableau des étudiants provenant
// de la base de données
$students = getStudentsByPage($pdo, $numPage);

$page_title = 'Trombinoscope';

// Chargement de la vue
ob_start();
include 'app/view/trombi.view.php';
$content = ob_get_clean();

// Génération de la page HTML à partir du Layout
include 'app/view/common/layout.php';
