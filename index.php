<?php
// 1. On définit les pages autorisées (Sécurité / Whitelisting)
$pages_autorisees = ['accueil', 'presentation', 'competences', 'projets', 'contact'];

// 2. On récupère la page demandée, par défaut c'est l'accueil
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

// 3. Sécurité : si la page n'est pas autorisée, on renvoie vers l'accueil ou une erreur 404
if (!in_array($page, $pages_autorisees)) {
    $page = 'accueil'; 
}

// 4. On assemble la page dynamiquement
include 'components/header.php';
include 'pages/' . $page . '.php';
include 'components/footer.php';
?>