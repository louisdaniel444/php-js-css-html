<?php 
$host =  'http://' . $_SERVER['HTTP_HOST'] . '/PHP-HTML-CSS-JS/'; 

if(!isset($title)){
  $title="Undefined";
}

// $title = $title . 'Portfolio'; même chose que $title .= 'Portfolio';
$title .= ' - Portfolio';

?>
<head>
  <!-- Meta charset -->
  <meta charset="UTF-8">
  <!-- Meta viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $host . 'css/reset.css'; ?>">
  <link rel="stylesheet" href="<?= $host . 'css/header.css'; ?>">
  <link rel="stylesheet" href="<?= $host . 'css/menu-mobile.css'; ?>">
  <link rel="stylesheet" href="<?= $host . 'css/footer.css'; ?>">
  <link rel="stylesheet" href="<?= $host . 'css/main.css'; ?>">
  <link rel="stylesheet" href="<?= $host . 'css/queries.css'; ?>">
  <link rel="stylesheet" href="<?= $host . 'css/formulaire.css'; ?>">
  <link rel="stylesheet" href="<?= $host . 'css/about.css'; ?>">
  <!-- Titre de la page -->
  <title> <?= $title ;?></title>
  <!-- Script JS pour l'explication du cours Base JS -->
  <script src="<?= $host . 'JS/explication-cours.js'; ?>"></script>
  <!-- Script JS pour le menu mobile -->
  <script src="<?= $host . 'JS/menu-mobile.js'; ?>"></script>
  <script src="<?= $host . 'JS/formulaire.js'; ?>"></script>
</head>