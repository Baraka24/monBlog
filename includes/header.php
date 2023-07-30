<?php
require_once 'includes/connection.php';
require_once 'actions/blogger_Infos.php';
include 'includes/bootstrap.php';
?>
<header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
    <img class="me-3 rounded-circle" src="blogger/<?= $blogger['profile']?>" alt="<?= $blogger['noms']?>" width="100" height="100">
      <span class="fs-4"><?= $blogger['noms']?></span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Profile</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="formations.php">Formations</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="nouvelles.php">Nouvelles</a>
      <a class="py-2 text-dark text-decoration-none" href="realisations.php">Réalisations</a>
    </nav>
  </header>