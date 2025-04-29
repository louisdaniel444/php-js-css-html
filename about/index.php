<?php
$title = 'À propos de moi';

$path = $_SERVER['DOCUMENT_ROOT'] . '/PHP-HTML-CSS-JS/';
?>

<!DOCTYPE html>
<html lang="fr">

<?php include $path .  "components/head.php"; ?>

<body>
  <!-- En-tête -->
  <?php include $path . "components/header.php"; ?>


  <!-- Corps de la page -->
  <main class="d-flex flex-col ">
    <h1 class="p-2 pt-2 pb-0">À propos de moi </h1>
    
    <!--Qui suis-je ?-->
    <section class="qui-suis-je">
      <div class="d-flex flex-col p-2 gap-2">
        <h2>Qui suis-je ?</h2>
        <div class="section-part">
          <h3>Un nouveau départ</h3>
          <p>Autodidacte dans l’âme et animé par une curiosité insatiable, j’ai choisi de donner un nouveau souffle à ma carrière en me lançant dans le développement web et mobile. Cette reconversion est bien plus qu’un simple virage : c’est une véritable passion qui me pousse à apprendre chaque jour.</p>
        </div>

        <div class="section-part">
          <h3>Mon approche</h3>
          <p>Je vois chaque ligne de code comme une occasion de créer, de comprendre et de résoudre des problèmes concrets. Rigoureux et persévérant, je m’investis pleinement dans l’acquisition de compétences techniques solides, tout en restant attentif aux besoins des utilisateurs.</p>
        </div>
        <img class="w-full" src="https://img.freepik.com/vecteurs-libre/homme-pensant-portrait-illustration-isolee_24911-115060.jpg" />
        <div class="section-part">
          <h3>Ma vision</h3>
          <p>Ce métier en constante évolution est pour moi un terrain d’expression où je peux conjuguer logique, créativité et utilité. Mon objectif est clair : concevoir des solutions numériques modernes, accessibles et réellement utiles, tout en continuant à grandir professionnellement.</p>
        </div>

        <button class="btn">Contactez-moi</button>
      </div>
    </section>

  </main>

  <!-- Pied de page -->
  <?php include $path . "components/footer.php"; ?>
</body>

</html>