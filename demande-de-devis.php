<!DOCTYPE html>
<html lang="fr">
  <head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7ERRVP2FMX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7ERRVP2FMX');
</script>
  <?php include('./includes/head-links.php'); ?>

    <!-- Titre et description -->
    <title>
      Demande de devis | Allo Taxi Sud  - Votre taxi 7 jours/7 à
      Tarascon, Fontvieille Saint-Étienne-du-Grès & les Alpilles
    </title>
    <meta
      name="description"
      content="Obtenez un devis gratuit pour votre trajet avec Allo Taxi Sud . Disponible 7j/7 à Tarascon, Fontvieille, Saint-Étienne-du-Grès et dans toute la région des Alpilles. Trajets toutes distances, confort et ponctualité garantis." />
    <meta
      name="keywords"
      content="demande de devis taxi, taxi Tarascon, taxi Fontvieille, taxi Saint-Étienne-du-Grès, taxi Alpilles, taxi VTC Alpilles, transport médical, devis transport VSL, devis taxi mariage, Allo Taxi Sud , devis taxi personnalisé" />
    <link
      rel="canonical"
      href="https://allo-taxi-sud.com/demande-de-devis.php" />

    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta
    property="og:title"
    content="Allo Taxi Sud  | Taxi 7j/7 Tarascon, Fontvieille, Saint-Étienne-du-Grès et les Alpilles" />
    <meta
    property="og:description"
    content="Transport de qualité 24h/24 et 7j/7 sur réservation dans les Alpilles : Taxis, transferts aéroports, gares, tourisme, évènements, transport médical." />
    <meta property="og:type" content="website" />
    <meta
    property="og:url"
      content="https://allo-taxi-sud.com/demande-de-devis.php" />

    <!-- Twitter Card -->
    <meta
      name="twitter:title"
      content="Allo Taxi Sud  | Votre taxi de confiance 7j/7" />
    <meta
      name="twitter:description"
      content="Besoin d’un taxi dans les Alpilles ? Contactez Allo Taxi Sud  : service de transport fiable, ponctuel et confortable." />

  </head>

  <body id="demande-de-devis">
  <?php include('./includes/barre-superieure.php');
   include('./includes/header.php'); ?>
    <main role="main">
      <div class="title-page">
        <h1>Demande de devis</h1>
      </div>

      <div class="intro">
        <p>
          Vous souhaitez effectuer une demande de devis ? Remplissez le
          formulaire de contact ci-dessous et nous reviendrons vers vous dans
          les plus brefs délais.
        </p>
      </div>

      <section class="card-yellow form-container">
        <h2>Formulaire de contact</h2>
        <form
          action="https://formspree.io/f/xkgrpjwk"
          method="POST"
          id="multiStepForm">
          <div class="form-step active">
            <h3>Informations personnelles</h3>
            <label for="name">Nom et prénom : </label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Nom et prénom"
              required />

            <label for="telephone">Téléphone :</label>
            <input
              type="tel"
              name="telephone"
              id="telephone"
              placeholder="06 00 00 00 00"
              required />

            <label for="email"> Email : </label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email"
              required />
            <div class="flex-box">
              <button type="button" class="next button-simple">Suivant</button>
            </div>
          </div>

          <div class="form-step">
            <h3>Informations sur le trajet</h3>
            <label for="date-depart"> Date de départ : </label>
            <input type="date" name="date-depart" id="date-depart" required />

            <label for="heure-depart">Heure de départ : </label>
            <input type="time" name="heure-depart" id="heure-depart" required />

            <label for="lieu-depart"> Lieu de départ : </label>
            <input type="text" name="lieu-depart" id="lieu-depart" required />

            <label for="lieu-destination">
              Destination (lieu d'arrivée) :
            </label>
            <input
              type="text"
              name="lieu-destination"
              id="lieu-destination"
              required />

            <label for="type-de-trajet"> Type de trajet : </label>
            <select name="type-de-trajet" id="type-de-trajet" required>
              <option value="selector" disabled selected>
                Sélectionner un type de trajet
              </option>
              <option value="aller">Aller</option>
              <option value="retour">Aller-retour</option>
            </select>

            <label for="heure-retour">
              Heure de retour prévue (si retour uniquement) :
            </label>
            <input type="time" name="heure-retour" id="heure-retour" />

            <div class="flex-box">
              <button type="button" class="prev button-simple">
                Précédent
              </button>
              <button type="button" class="next button-simple">Suivant</button>
            </div>
          </div>

          <div class="form-step">
            <h3>Informations sur le(s) passager(s)</h3>
            <label for="nb-passagers"> Nombre(s) de passager(s) : </label>
            <input
              type="number"
              name="nb-passagers"
              id="nb-passagers"
              min="1"
              max="100"
              required />

            <label for="nb-passagers-mobilite-reduite">
              Nombre(s) de passager(s) à mobilité réduite :
            </label>
            <input
              type="number"
              name="nb-passagers-mobilite-reduite"
              id="nb-passagers-mobilite-reduite"
              min="0"
              max="100"
              required />

            <label for="nb-enfants">
              Nombre(s) d'enfant(s) de moins de 12 ans :
            </label>
            <input
              type="number"
              name="nb-enfants"
              id="nb-enfants"
              min="0"
              max="100"
              required />

            <label for="nb-sieges-enfants">
              Nombre(s) de siège(s) enfant nécessaire(s) :</label
            >
            <input
              type="number"
              name="nb-sieges-enfants"
              id="nb-sieges-enfants"
              min="0"
              max="100"
              required />

            <label for="nb-bebe-enfants">
              Nombre(s) de siège(s) bébé nécessaire(s) :
            </label>
            <input
              type="number"
              name="nb-bebe-enfants"
              id="nb-bebe-enfants"
              min="0"
              max="100"
              required />

            <label for="nb-bagages"> Nombre(s) de bagage(s) : </label>
            <input
              type="number"
              name="nb-bagages"
              id="nb-bagages"
              min="0"
              max="100"
              required />
            <div class="flex-box">
              <button type="button" class="prev button-simple">
                Précédent
              </button>
              <button type="button" class="next button-simple">Suivant</button>
            </div>
          </div>

          <div class="form-step">
            <h3>Informations complémentaires</h3>
            <label for="message">Précisez votre demande si besoin : </label>
            <textarea
              name="message"
              id="message"
              cols="30"
              rows="5"
              placeholder="Précisez votre demande si besoin..."
              required></textarea>
            <div class="flex-box">
              <button type="button" class="prev button-simple">
                Précédent
              </button>
              <button type="submit" class="button-simple">
                Envoyer ma demande
              </button>
            </div>
          </div>
        </form>
      </section>
      <section class="card" id="coordonnes">
        <h2>Coordonnés</h2>
        <div class="grid-container">
          <div class="item-contact">
            <div class="title-item">
              <i class="bi bi-geo-alt"></i>
              <h3>Nous situer</h3>
            </div>
            <ul>
              <li>
                <i class="bi bi-geo-fill"></i>
                <span> Tarascon : </span><br />
                Devant la gare, Boulevard Gustave Desplaces, 13150 Tarascon
                <br />
              </li>
              <li>
                <i class="bi bi-geo-fill"></i>
                <span> Fontvieille : </span><br />
                Devant la mairie, 8 rue Marcel Honorat, 13990 Fontvieille
                <br />
              </li>
              <li>
                <i class="bi bi-geo-fill"></i>
                <span> Saint Étienne du Grès : </span><br />
                Devant la mairie, Place de la Mairie 13103 Saint-Étienne-du-Grès
              </li>
            </ul>
          </div>
          <div class="item-contact">
            <div class="title-item">
              <i class="bi bi-telephone"></i>
              <h3>Nous appeler</h3>
            </div>
            <ul>
              <li>
                <i class="bi bi-phone"></i>
                <a href="tel:+33667319832">
                  <span> Allo Taxi Sud & Allo Taxi Sud Alpilles : </span> <br />
                  06.67.31.98.32</a
                >
              </li>
              <li>
                <i class="bi bi-phone"></i>

                <a href="tel:+33617432959">
                  <span> Allo Taxi Fontvieille : </span><br />
                  06.17.43.29.59</a
                >
              </li>
              <li>
                <i class="bi bi-phone"></i>

                <a href="tel:+33609958676">
                  <span> Allo Taxi Tarascon : </span>
                  <br />
                  06.09.95.86.76</a
                >
              </li>
              <li>
                <i class="bi bi-phone"></i>

                <a href="tel:+33610892802">
                  <span> Allo Taxi St-Étienne-du-Grès : </span><br />
                  06.10.89.28.02</a
                >
              </li>
            </ul>
          </div>
          <div class="item-contact">
            <div class="title-item">
              <i class="bi bi-envelope-at"></i>
              <h3>Par email</h3>
            </div>
            <ul>
              <li>
                <i class="bi bi-envelope-paper"></i>
                <span>Email :</span><br />
                <a href="mailto:contact@allo-taxi-sud.com">
                  contact@allo-taxi-sud.com</a
                >
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>
    <?php 
include('./includes/footer.php'); 
include('./includes/buttons-footer.php'); 
?>

    <script src="./assets/js/index.js"></script>
  </body>
</html>
