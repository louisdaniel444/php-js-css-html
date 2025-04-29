<?php
if (!isset($menuClass)) {
  $menuClass = "menu";
}

$host =  'http://' . $_SERVER['HTTP_HOST'] . '/PHP-HTML-CSS-JS/';

$menuitems = [
  [
    'label' => 'Accueil',
    'href' => $host 
  ],

  [
    'label' => 'À propos',
    'href' => $host . '/about'
  ],

  [
    'label' => 'Contact',
    'href' => $host . '/contact'
  ]
];

// print_r($menuitems); 
?>

<ul class="<?= $menuClass; ?>">
  <?php foreach ($menuitems as $lien) { ?>
    <li>
      <!-- Lien pour accéder à la page d'accueil -->
      <a href="<?= $lien['href']; ?>"><?= $lien['label']; ?></a>
    </li>
  <?php } ?>

</ul>