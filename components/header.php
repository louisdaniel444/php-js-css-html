<header>
  <!-- Barre de navigation -->
  <nav>
    <!-- Logo -->
    <div class="logo">LOUIS Daniel-Charles</div>
    <!-- Menu desktop -->
    <?php $menuClass = "menu";
    include $path .  "components/menu.php"; ?>

    <!-- Conteneur pour le menu mobile -->
    <div class="container-menu-mobile">
      <!-- Bouton pour ouvrir le menu mobile -->
      <button class="btn-menu-mobile">
        <!-- Icône pour ouvrir le menu mobile -->
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path d="M4 18L20 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
            <path d="M4 12L20 12" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
            <path d="M4 6L20 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
          </g>
        </svg>
      </button>
      <!-- Bouton pour fermer le menu mobile -->
      <button class="btn-close-menu-mobile">
        <!-- Icône pour fermer le menu mobile -->
        <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill="#ffffff"
              d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z">
            </path>
          </g>
        </svg>
      </button>
      <!-- Menu mobile -->
      <?php $menuClass = "menu-mobile";
      include $path .  "components/menu.php"; ?>
    </div>
  </nav>
</header>