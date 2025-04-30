<?php require_once('../config.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include("../components/head.php"); ?>

<body>
  <!-- En-tête -->
  <?php include("../components/header.php"); ?>

  <!-- Corps de la page -->
  <main class="main-contact">
    <section class="form-contact">
      <div class="container">
        <div class="text-container">
          <h2>Besoin d&apos;un dev en devenir ?</h2>

          <p>
            Je suis encore en immersion, mais j&apos;ai déjà les mains dans le code. Si tu veux discuter projet, tech ou
            juste échanger sur mon apprentissage, c&apos;est ici que ça se passe.
          </p>

          <?php if (!empty($errors)) : ?>
            <ul>
              <?php foreach ($errors as $error) : ?>
                <li class="erreur">
                  <?= htmlspecialchars($error); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php elseif ($success === true) : ?>
            <p class="confirmation">Votre message a bien été transmis</p>
          <?php endif; ?>
        </div>

        <form class="formulaire" action="" method="post">
          <ul>
            <li>
              <label for="name">Nom&nbsp;</label>
              <input type="text" id="name" name="user_name" placeholder="Votre Nom" required />
            </li>
            <li>
              <label for="mail">E-mail&nbsp;</label>
              <input type="email" id="mail" name="user_mail" placeholder="votre@email.com" required />
            </li>
            <li>
              <label for="msg">Message&nbsp;</label>
              <textarea id="msg" name="user_message" placeholder="Ecrivez-votre message ici"></textarea>
            </li>
          </ul>
          <div class="button-form">
            <button type="submit">Envoyer le message</button>
          </div>
        </form>
      </div>
    </section>

    <section class="reseau-sociaux">
      <div class="container">
        <div class="text-container">
          <h2>Du code, des tests, des débuts</h2>
          <p>
            Avant même ma formation, je mets les mains dans le code ! Mon GitHub, c'est l'endroit où tout commence :
            projets d'immersion, expérimentations, premières lignes de dev.
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
  <?php include("../components/footer.php"); ?>
</body>

</html>