<?php
if (isset($_POST['HomeButton'])) {
    echo "Vous allez être redirigé vers la page d'accueil !";
    header("Location: https://sebastien-blanc.fr/");
    exit();
?>
<?php
if (isset($_POST['AboutUsButton'])) {
    echo "Vous allez être redirigé vers la page Qui Suis-Je";
    header("Location: https://sebastien-blanc.fr/qui-suis-je");
    exit();
?>
<!DOCTYPE html>
<html lang="FR_fr" prefix="og: https://ogp.me/ns#" data-bs-theme="default">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulatelE11">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulatelE10">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulatelE9">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulatelE8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulatelE7">
    <meta http-equiv="X-UA-Compatible" content="IE=5">

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sébastien BLANC">
    <meta property="og:title" content="Accueil - Sébastien BLANC">
    <meta property="og:description" content="Bienvenue sur mon site internet ! Retrouvez mon CV en première page !">
    <meta property="og:url" content="https://sebastien-blanc.fr">
    <meta property="og:url_secure" content="https://sebastien-blanc.fr">
    <meta property="og:image" content="https://sebastien-blanc.fr/public/content/assets/img/">
    <meta property="og:image_secure" content="https://sebastien-blanc.fr/content/assets/img/">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:name" content="Accueil - Sebastien BLANC">
    <meta name="twitter:description" content="Bienvenue sur mon site internet !">
    <meta name="twitter:site" content="@SBlanc13000">
    <meta name="twitter:creator" content="@SBlanc13000">

    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="manifest" href="manifest.json">

    <link rel="stylesheet" href="./public/content/assets/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="./public/content/assets/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/content/assets/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="./public/content/asset/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./public/content/assets/npm/bootstra-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Accueil - Sébastien BLANC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <form method="POST" class="navbar-brand">
        <button class="nav-link active bg-body-secondary" type="button" name="HomeButton" aria-current="page"><i class="bi bi-house-fill"></i>&nbsp Accueil</button>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <form method="POST" class="nav-item px-2">
            <button class="nav-link active bg-body-secondary" type="button" name="HomeButton" aria-current="page"><i class="bi bi-house-fill"></i>&nbsp Accueil</button>
        </form>
        <form method="POST" class="nav-item px-2">
            <button class="nav-link" type="button" name="AboutUsButton"><i class="bi bi-person-circle"></i>&nbsp Qui Suis-Je ?</button>
        </form>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>