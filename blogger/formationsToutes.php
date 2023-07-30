<?php
require_once '../includes/connection.php';
require_once '../includes/bootstrap.php';
require_once '../actions/formations_Infos_All.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Nos formations</title>


    <!-- Bootstrap core CSS -->
<?php include 'includes/bootstrap.php' ?>

    
  </head>
  <?php include 'includes/navbar.php' ?>  
<div class="container">
<br>
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
  <?php 
    if(isset($_GET['msgS']))
    {
        ?> 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_GET['msgS']?>
        <a class="link-success bi bi-check2-square text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" href="">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
        <?php
    }
  ?>

<?php 
    if(isset($_GET['msgD']))
    {
        ?> 
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $_GET['msgD']?>
        <a class="link-danger bi bi-trash text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" href="">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
        <?php
    }
  ?>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Formations</h6>
    <small class="d-block text-end mt-3">
      <a href="nouvelleFormation.php" class="bi bi-plus-circle-fill">
          Nouvelle formation
      </a>
    </small>
    <?php
    while($formation=mysqli_fetch_array($formations))
    {
        ?>
        <div class="d-flex text-muted pt-3">
        <img src="<?= $formation['photo']?>" width="32" height="32" alt="">

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><?= $formation['categorie']?></strong>
        <?= $formation['libelle']?>
      </p>&nbsp
      <small class="d-block text-end mt-3">
      <a href="modifierFormation.php?id=<?= $formation['id']?>" class="bi bi-pencil-square">Editer</a>
      </small>&nbsp
      <small class="d-block text-end mt-3">
      <a href="deleteFormation.php?id=<?= $formation['id']?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer?')" class="text-danger bi bi-trash">Supprimer</a>
      </small>&nbsp
      <small class="d-block text-end mt-3">
      <a href="modifierFormationImage.php?id=<?= $formation['id']?>" class="text-secondary bi bi-camera-fill">Editer</a>
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
      <a href="formationsToutes.php" >voir toutes les formations</a>
    </small> -->
  </div>
</main>
<?php
  include '../includes/footer.php';
  ?>
</div>
<?php include 'includes/script.php' ?>   
</html>