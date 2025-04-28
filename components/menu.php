<?php 
if(!isset($menuClass)){
  $menuClass="menu";
}

$host =  'http://' . $_SERVER['HTTP_HOST'] . '/PHP-HTML-CSS-JS/'; 

?>

<ul class="<?= $menuClass; ?>">

        <!-- Lien pour accéder à la page d'accueil -->
        <li>
          <!-- Lien pour accéder à la page d'accueil -->
          <a href="<?= $host; ?>">Accueil</a>
        </li>
        <!-- Lien pour accéder à la page d'à propos -->
        <li>
          <!-- Lien pour accéder à la page d'à propos -->
          <a href="<?= $host; ?>">À propos</a>
        </li>
        <!-- Lien pour accéder à la page de contact -->
        <li>
          <!-- Lien pour accéder à la page de contact -->
          <a href="<?= $host . '/contact'; ?>">Contact</a>
        </li>
      </ul>
      