
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Roberto Villordo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class=" <?php if ($page == "mis-trabajos") {echo 'nav-link active';}else {echo 'nav-link';}?>" href="./mis-trabajos.php">Mis trabajos</a>
        <a class=" <?php if ($page == "sobre-mi") {echo 'nav-link active';}else {echo 'nav-link';}?>" href="./sobre-mi.php">Sobre mi</a>
        <a class=" <?php if ($page == "mis-skills") {echo 'nav-link active';}else {echo 'nav-link';}?>" href="./mis-skills.php">Mis Skills</a>
        <a class=" <?php if ($page == "contactame") {echo 'nav-link active';}else {echo 'nav-link';}?>" href="./contactame.php" tabindex="-1" aria-disabled="true">Contactame</a>
      </div>
    </div>
  </div>
</nav>