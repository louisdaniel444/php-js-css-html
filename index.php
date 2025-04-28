<?php
$pseudo="Da";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Meta charset -->
  <meta charset="UTF-8">
  <!-- Meta viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/menu-mobile.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/queries.css">
  <!-- Titre de la page -->
  <title>Portfolio Immersion</title>
  <!-- Script JS -->
  <script src="JS/script.js"></script>
  <!-- Script JS pour l'explication du cours Base JS -->
  <script src="JS/explication-cours.js"></script>
  <!-- Script JS pour le menu mobile -->
  <script src="JS/menu-mobile.js"></script>
</head>

<body>
  <!-- En-tête -->
  <?php include "./components/header.php"; ?>


  <!-- Corps de la page -->
  <main>
    <!-- Section Présentation -->
    <section  class="presentation">
  
      <!-- Conteneur -->
      <div class="container">
        <!-- Image de profil -->
        <div class="image-container">
          <img
            src="https://img.freepik.com/vecteurs-premium/illustration-du-programmeur-developpement-web-du-site-web-codage_746655-2880.jpg?w=740">
        </div>
        <!-- Conteneur pour le texte -->
        <div class="text-container">
          <!-- Titre -->
          <h1>Bienvenue sur mon portfolio</h1>
          <!-- Paragraphe -->
          <p>Je me prénomme Daniel-Charles, j'ai 53 ans et je me reconvertis actuellement au métier de développeur web
            et mobile. En immersion professionnelle, je mets tout en œuvre pour acquérir les compétences nécessaires et
            construire des solutions numériques modernes et efficaces.</p>
            <?php echo $pseudo; ?>
        </div>
      </div>
    </section>

    <section class="reseau-sociaux">
      <div class="container"> 
        <div class="text-container">
          <h2>
            Du code, des tests, des débuts
          </h2>
          <p>
            Avant même ma formation, je mets les mains dans le code ! Mon GitHub, c'est l'endroit où tout commence : projets d'immersion, expérimentations, premières lignes de dev.
          </p>
        </div>

        <!-- Conteneur pour les liens sociaux -->
        <div class="social-links">
          <!-- Lien pour accéder au GitHub -->
          <a href="https://github.com/louisdaniel444/portfolio-html-css-js" target="_blank">
            <!-- Image pour le GitHub -->
            <img src="https://github.githubassets.com/assets/GitHub-Mark-ea2971cee799.png" alt="GitHub">
          </a>
          
     
          
        </div>
      </div>
    </section>
  </main>

  <!-- Pied de page -->
<?php include "./components/footer.php";?>
</body>

</html>