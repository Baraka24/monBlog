<?php
    require_once '../includes/connection.php';
    require_once 'actions/add_Publication.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier</title>
    <?php include 'includes/bootstrap.php' ?>
</head>
<body>
    <main>
    <?php include 'includes/navbar.php' ?>


<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Publier</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    
    <div class="feature col">
    <form action="" method="post" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <input type="file" name="myfile" class="form-control" id="floatingPassword" required>
            <label for="floatingPassword">Image</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="descr" class="form-control" id="floatingPassword" required>
            <label for="floatingPassword">Description</label>
          </div>
          <div class="form-floating mb-3">
            <textarea name="contenu" id="" cols="30" rows="10" class="form-control" required></textarea>
            <label for="floatingInput">Contenu</label>
          </div>
          
          <button class="btn btn-primary" name="addPublication" type="submit">Publier</button>
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