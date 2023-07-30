<?php
require_once '../includes/connection.php';
require_once '../includes/bootstrap.php';
require_once '../actions/nouvelles_Infos.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Nos publications</title>


    <!-- Bootstrap core CSS -->
<?php include 'includes/bootstrap.php' ?>

    
  </head>
  <?php include 'includes/navbar.php' ?>  
<div class="container">
<br>
<div class="nav-scroller bg-body shadow-sm">

  <nav class="nav nav-underline"  aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">
    Nouvelles: <br>
    </a>
  </nav>
</div>

<div class="container">
<h6 class="border-bottom pb-2 mb-0">Publications</h6>
    <small class="d-block text-end mt-3">
      <a href="publication.php" class="bi bi-plus-circle-fill">
          Publier
      </a>
    </small>
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
<div class="row g-0">
  <?php
  while($nouvelle=mysqli_fetch_array($nouvelles))
  {
  ?>
    <div class="col-md-4">
        <img src="<?=$nouvelle['imageN']?>
      
                " 
         width="100%" alt="">
    </div>
    <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title"><?= $nouvelle['descriptionN']?></h5>
        <p class="card-text"><?= $nouvelle['content']?></p>
        <p class="card-text"><small class="text-muted"><?= $nouvelle['date_hour']?></small></p>
        </div>
        <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="deleteNouvelle.php?id=<?=$nouvelle['id']?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer?')" class="btn btn-sm btn-danger bi bi-trash">
                  Supprimer
                  </a>
                  <a href="modifierPublication.php?id=<?=$nouvelle['id']?>" onclick="return confirm('Etes-vous sûr de vouloir modifier?')" class="btn btn-sm btn-primary bi bi-pencil-square">
                  Modifier
                  </a>
                  <a href="modifierPublicationImage.php?id=<?=$nouvelle['id']?>" onclick="return confirm('Etes-vous sûr de vouloir modifier?')" class="btn btn-sm btn-secondary bi bi-camera-fill">
                  Modifier
                  </a>
                </div>
                <small class="text-muted"><?= $nouvelle['date_hour']?></small>
       </div>
    </div>
  <?php
  }
  ?>
</div>
      
</div>
<?php
  include '../includes/footer.php';
  ?>
</div>
<?php include 'includes/script.php' ?>   
</html>