<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/x-icon" href="images/logo/favicon.ico" alt="icône Vigneau Construction">
  <title>Contactez-nous | Vigneau Construction</title>
  <meta name="description" content="Un projet en tête ? Discutons des détails. Contactez-nous.">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/validate_mail.js"></script>
</head>

<body>

  <nav id="header" class="navbar navbar-expand sticky-top">
    <a class="navbar-brand">
      <img src="images/logo/logo.png" alt="logo Vigneau Construction">
    </a>
    <div class="collapse navbar-collapse nav-main-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agence.html">L'agence</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Missions</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="metier.html">Notre métier</a></li>
            <li><a class="dropdown-item" href="missions.html">Nos missions</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <section id="photo_ecriveznous">
    <div class="container-fluid px-0">
      <div class="row">
        <div class="col">
          <img class="img-fluid" src="images/ecrivez-nous.jpg" alt="photo écrivez-nous">
          <div class="carousel-caption">
            <h1>écrivez-nous</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="futur-projet">
    <div class="container-fluid">
      <div class="d-flex d-row">
        <div class="col-5">
          <h1>Un projet en tête ?</h1>
          <p>Discutons des détails.</p>
          <h2>Appelez-nous</h2>
          <h3>+33 6 38 83 20 29</h3>
          <a style="color: black;" href="https://www.instagram.com/vigneau_construction" role="button"><i class="fa-brands fa-instagram"></i></a>
          <a style="color: black;" href="https://www.facebook.com/profile.php?id=100090458014235" role="button"><i class="fa-brands fa-facebook-f"></i></a>
          <a style="color: black;" href="https://www.linkedin.com/in/vigneau-simon-25818026a" role="button"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="col-5">
          <form id="contact" class="text-center border border-light p-5" action="mail_contact.php">
            <input type="text" id="name" class="form-control mb-4" placeholder="Nom">
            <input type="email" id="email" class="form-control mb-4" placeholder="E-mail">
            <select id="subject" class="browser-default custom-select mb-4">
                <option value="" selected disabled>Choisir un objet</option>
                <option value="1">Retour client</option>
                <option value="2">Projet de construction</option>
                <option value="3">Projet de rénovation</option>
                <option value="4">Prise d'informations</option>
                <option value="5">Autre</option>
            </select>
            <div class="form-group">
                <textarea class="form-control rounded-0" id="message" rows="3" placeholder="Message"></textarea>
            </div>
            <button class="btn btn-info btn-block" type="submit" onclick="validateFrom();">Envoyer</button>
          </form>
          <div class="status"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="footer">
    <div class="container-fluid">
      <div class="d-flex d-row">
        <div class="col-4">
          <img class="img-fluid" src="images/logo/logo_black_vigneau-construction.png"
            alt="White Logo Vigneau Construction">
          <h1>VIGNEAU CONSTRUCTION</h1>
          <p class="subtext">Maîtrise d'œuvre dans le bâtiment.</p>
          <p class="subtext">Agence spécialisée dans les maisons individuelles et les
            espaces professionnels.</p>
        </div>
        <div class="col-4">
          <h1>BUREAU DE CASTELJALOUX</h1>
          <p class="subtext">Tél : +33 6 38 83 20 29<br>accueil@vigneau-construction.fr</p>
          <p class="subtext">600 chemin de la hournère<br>47700 CASTELJALOUX</p>
        </div>
        <div class="col-2">
          <h1>NOS RÉSEAUX</h1>
          <a style="color: black;" href="https://www.instagram.com/vigneau_construction" role="button"><i
              class="fa-brands fa-instagram"></i></a>
          <p class="subtext"></p>
          <a style="color: black;" href="https://www.facebook.com/profile.php?id=100090458014235" role="button"><i
              class="fa-brands fa-facebook-f"></i></a>
          <p class="subtext"></p>
          <a style="color: black;" href="https://www.linkedin.com/in/vigneau-simon-25818026a" role="button"><i
              class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </section>

  <div class="text-center p-3" style="background-color: white;">
    © 2023 Vigneau Construction, Tous droits réservés
  </div>

</body>

</html>