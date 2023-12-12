<?php

// Récupération des données et des variables
include 'database.php';
$page_title = 'Trombinoscope';
$css = 'style1.css';

// Injection de la vue
ob_start();
include 'app/view/trombi.view.php';
$content = ob_get_clean();

// Génération de la page HTML à partir du layout
include 'app/view/common/layout.php';