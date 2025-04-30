<ul class="<?= $menuClass; ?>">
  <?php foreach ($menuitems as $lien) { ?>
    <li>
      <!-- Lien pour accéder à la page d'accueil -->
      <a href="<?= $lien['href']; ?>"><?= $lien['label']; ?></a>
    </li>
  <?php } ?>
</ul>