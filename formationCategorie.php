<div class="container">
<br>
<?php
include 'includes/header.php';
require_once 'actions/formationsCategorie_Infos.php';
?>
<div class="nav-scroller bg-body shadow-sm">
  <nav class="nav nav-underline"  aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">Formations</a>
  </nav>
</div>

<main class="container">
<div class="text-white bg-purple rounded text-center bg-secondary shadow-sm">
    
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Types de formation:</h1>
     
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-0.25">
      <?php
    while($categorie=mysqli_fetch_array($categories))
    {
        ?>
        <div class="col">
        <a class="nav-link text-white" href="formationCategorie.php?categorie=<?= $categorie['id'];?>">
        <span class="badge bg-primary"><?= $categorie['categorie'];?></span>
        </a>
        </div>
        <?php
    }
    ?>
      </div>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Formations</h6>
    <?php
    while($formation=mysqli_fetch_array($formations))
    {
        ?>
        <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><?= $formation['categorie']?></strong>
        <?= $formation['libelle']?>
      </p>&nbsp
      <small class="d-block text-end mt-3">
      <a href="inscriptionFormation.php?id=<?= $formation['id']?>" class="bi bi-pencil">S'incrire</a>
    </small>&nbsp
      <small class="d-block text-end mt-3">
      <a class="text-success bi bi-whatsapp" href="whatsapp://send?text=<?= $formation['photo']."</br>".$formation['libelle'] ?>...pour en savoir plus https:///formations.php?id=<?= $formation['id'] ?>" data-action="share/whatsapp/share">
      Partager
      </a>
      </small>
    </div>
        <?php
    }
    ?>
    
    
    <!-- <small class="d-block text-end mt-3">
      <a href="formations.php">voir toutes les formations</a>
    </small> -->
  </div>
</main>
<?php
  include 'includes/footer.php';
  ?>
</div>