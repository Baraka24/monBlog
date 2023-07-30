<?php
    require_once '../includes/connection.php';

    require_once 'actions/update_Categorie.php';
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
    <h3>Modifier Categorie</h3>
    <?php 
    if(isset($msgS))
    {
        echo $msgS;
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <textarea name="Categ" id="" cols="30" rows="10" class="form-control" required><?=$catU['categorie']?></textarea>
            <label for="floatingInput">categorie</label>
          </div>
          <button class="btn btn-primary" name="addCat" type="submit">Modifier</button>
    </form>
      
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