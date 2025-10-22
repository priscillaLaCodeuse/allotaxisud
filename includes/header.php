<?php 

echo '    <header>
      <a href="./index.php">
        <div class="logo">
          <img
            src="./assets/images/logo-allo-taxi.png"
            loading="lazy"
            alt="Logo Allo Taxi Sud " />
        </div>
      </a>
      <div class="navigation">
        <div class="toggle-nav">
          <i id="opennav" class="bi bi-list"></i>
          <i id="closenav" class="bi bi-x-circle"></i>
        </div>
        <nav>
          <ul>
            <li>
              <a href="./"><i class="bi bi-house"></i> </a>
            </li>
            <li><a href="./index.php#a-propos">Qui sommes-nous ?</a></li>
            <li><a href="./index.php#services"> Nos services </a></li>
            <li><a href="./index.php#nos-vehicules"> Nos véhicules </a></li>
            <li><a href="./demande-de-devis.php"> Demande de Devis </a></li>
          </ul>
        </nav>
      </div>
      <div class="button-header">
        <a class="button-link" href="tel:+33667319832"
          ><i class="bi bi-phone-vibrate"></i> Contactez-nous</a
        >
      </div>
    </header>';

?>