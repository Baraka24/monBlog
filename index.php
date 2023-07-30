<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Baraka Kinywa">
    <meta name="generator" content="Hugo 0.82.0">
    <title>BarakaKinywaBlog</title>
    <!-- Bootstrap core CSS -->
    <?php
    
    ?>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    


<div class="container py-3">
  <?php
  include 'includes/header.php';
  ?>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3">
      <div class="col">
        
      </div>
      <div class="col">
      <div class="card" style="width: 18rem;">
          		<img src="blogger/<?= $blogger['profile']?>" class="card-img-top" alt="...">
          		<div class="card-body">
          			<h5 class="card-title text-center"><?= $blogger['noms']?></h5>
          			<hr>
          			<p class="card-text">
                          <?php
                          while($blogger_skill=mysqli_fetch_array($bloggerSkills))
                          {
                              ?>
                              <h6>
                    <a href="" class="bi-check-square-fill text-success"></a>
                              <?= $blogger_skill['skill']?>
                              </h6>
                              <?php
                          }
                          ?>
          			<div class="text-center">
                    <a href="<?= $blogger['facebook']?>" class="btn btn-primary bi bi-facebook"></a>
                    <a href="https://wa.me/<?= $blogger['whatsapp']?>" class="btn btn-success bi bi-whatsapp"></a>
                    <a href="<?= $blogger['twitter']?>" class="btn btn-primary bi bi-twitter"></a>
                    <a href="tel:<?= $blogger['phone']?>" class="btn btn-success bi bi-telephone"></a>
                    <a href="mailto:<?= $blogger['gmail']?>" class="btn btn-danger bi bi-envelope"></a>
                </div>
      </div>
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        
        <p class="fs-5 text-muted">
         <?= $blogger['description']?>
        </p>
      </div>
      </div>

      <div class="col">
        
      </div>
    </div>

    
  </main>
  <?php
  include 'includes/footer.php';
  ?>
</div>


    
  </body>
</html>
