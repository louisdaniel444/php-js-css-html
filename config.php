<?php
// déclarations variables au serveur
$host =  'http://' . $_SERVER['HTTP_HOST'] . '/PHP-HTML-CSS-JS/';

$forldername = $_SERVER['DOCUMENT_ROOT'] . '/PHP-HTML-CSS-JS/';

if (file_exists($forldername)) :
  $path = $_SERVER['DOCUMENT_ROOT'] . '/PHP-HTML-CSS-JS/';
else :
  $path = $_SERVER['DOCUMENT_ROOT'] . '/';
endif;

$currentUri = $_SERVER['REQUEST_URI'];

// déclarartion et logique du title
$title = '';
if (str_contains($currentUri, '/about')):
  $title = 'À propos de moi';
elseif (str_contains($currentUri, '/contact')):
  $title = 'Contactez-moi';
else:
  $title = 'Accueil';
endif;
$title .= ' - Portfolio';

//  déclaration et logique du menu
if (!isset($menuClass)) {
  $menuClass = "menu";
}

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

// déclaration et logique du formulaire et de ces composants
$success = null;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $name = trim($_POST['user_name']);
  $email = trim($_POST['user_mail']);
  $message = trim($_POST['user_message']);

  if (empty($name)) :
    $errors[] = "Le nom est requis !";
  endif;

  if (empty($email)) :
    $errors[] = "Email est requis !";
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
    $errors[] = "Email invalide";
  endif;

  if (empty($message)) :
    $errors[] = "Un message est requis !";
  endif;

  if (empty($errors)) {
    $success = true;
  } else {
    $success = false;
  }
}
