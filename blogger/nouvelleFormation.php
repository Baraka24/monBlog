<?php
    require_once '../includes/connection.php';
    require_once 'actions/add_Formation.php';
    require_once 'actions/add_Categorie.php';
    $sql="SELECT * FROM `formations_categories`";
    $categories=mysqli_query($con,$sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle formation</title>
    <?php include 'includes/bootstrap.php' ?>
</head>
<body>
    <main>
    <?php include 'includes/navbar.php' ?>


<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Nouvelle formation</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    
    <div class="feature col">
    <form action="" method="post" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <input type="file" name="myfile" class="form-control" id="floatingPassword" required>
            <label for="floatingPassword">Image</label>
          </div>
          <div class="form-floating mb-3">
            <select name="categorie" id="" class="form-select" required>
                <option value="" selected disabled>Selectionner la catégorie</option>
                <?php
                while($cat=mysqli_fetch_array($categories))
                {

                    ?> 
                    <option value="<?= $cat['id'];?>"><?= $cat['categorie'];?></option>
                    <?php
                }
                ?>
            </select>
          </div>
          <div class="form-floating mb-3">
            <textarea name="libelle" id="" cols="30" rows="10" class="form-control" required></textarea>
            <label for="floatingInput">Libellé</label>
          </div>
          <button class="btn btn-primary" name="addFormation" type="submit">Ajouter</button>
    </form>
      
    </div>
    <div class="feature col">
    <?php 
    if(isset($_GET['msgU']))
    {
        ?> 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_GET['msgU']?>
        <a class="link-success text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" href="">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
        <?php
    }
    ?>
    <h3>Nouvelle Categorie</h3>
    <?php 
    if(isset($msgS))
    {
        echo $msgS;
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <textarea name="Categ" id="" cols="30" rows="10" class="form-control" required></textarea>
            <label for="floatingInput">categorie</label>
          </div>
          <button class="btn btn-primary" name="addCat" type="submit">Ajouter</button>
    </form>
      
    </div>
    <div class="col">
    <div class="bd-example">
        <ul class="list-group">
          <li class="list-group-item disabled" aria-disabled="true">Catégories</li>
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
          <?php 
           $sql1="SELECT * FROM `formations_categories`";
           $categoriess=mysqli_query($con,$sql1); 
           while($cate=mysqli_fetch_array($categoriess))
           {
            ?>
            <li class="list-group-item"><?= $cate['categorie'];?>&nbsp
            <a href="supprimer_Categorie.php?id=<?= $cate['id']?>" class="btn badge rounded-pill bg-danger bi bi-trash" onclick="return confirm('Etes vous sûr de vouloir supprimer?')">
                          
            </a>
            <a href="modifierCategorieFormation.php?id=<?= $cate['id']?>" class="btn badge rounded-pill bg-warning bi bi-tropical-storm text-dark" onclick="return confirm('Etes vous sûr de vouloir modifier?')">
                          
            </a>
            </li>
            <?php 
            
           }
        
          ?>
        </ul>
      </div>
    </div>
     

      
   
  </div>
  <?php
    include '../includes/footer.php';
  ?>
</div>
   
    </main>
    <?php include 'includes/script.php' ?>  
</body>
</html>