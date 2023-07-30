<?php
    require_once '../includes/connection.php';
    require '../actions/formation_Infos.php';
    require 'actions/update_FormationImage.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier image formation</title>
    <?php include 'includes/bootstrap.php' ?>
</head>
<body>
    <main>
    <?php include 'includes/navbar.php' ?>


<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Modifier formation image</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    
    <div class="feature col">
    <img src="<?= $formation['photo']?>
             " 
         width="100%" alt="">
         <form action="" method="post" enctype="multipart/form-data">
         
          <div class="form-floating mb-3">
                    <input type="file" name="myfile" class="form-control" required id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Image</label>
         </div>
          <button class="btn btn-primary" name="updateImage" type="submit">Modifier</button>
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