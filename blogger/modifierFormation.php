<?php
    require_once '../includes/connection.php';
    require '../actions/formation_Infos.php';
    require 'actions/update_Formation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier formation</title>
    <?php include 'includes/bootstrap.php' ?>
</head>
<body>
    <main>
    <?php include 'includes/navbar.php' ?>


<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Modifier formation</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    
    <div class="feature col">
    <form action="" method="post" enctype="multipart/form-data">
          
          <div class="form-floating mb-3">
            <select name="categorie" id="" class="form-select" required>
                <option value="<?= $formation['idCat']?>" selected><?= $formation['categorie']?></option>
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
            <textarea name="libelle" id="" cols="30" rows="10" class="form-control" required><?= $formation['libelle']?></textarea>
            <label for="floatingInput">Libellé</label>
          </div>
          <button class="btn btn-primary" name="updateFormation" type="submit">Modifier</button>
    </form>
      
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