<div class="container">
<br>
<?php
include 'includes/header.php';
require_once 'actions/formation_Infos.php';
require_once 'actions/inscripition_Formation.php';
?>
<div class="nav-scroller bg-body shadow-sm">
<?php
  if(isset($alertmsg))
  {
      echo $alertmsg;
  } 
 ?>
  <nav class="nav nav-underline"  aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">
    Remplissez le formulaire ci-dessous pour confirmer votre inscription à la formation: <br>
    </a>
  </nav>
</div>

<main class="container">
<div class="row g-0">
    <div class="col-md-4">
        <img src="
        <?php if(!empty($formation['photo']))
                {
                  echo "blogger/".$formation['photo'];
                }
                else
                {
                  echo "image/white.jpg";
                }
                ?>
                " 
         width="100%" alt="">
    </div>
    <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title"><?= $formation['categorie']?></h5>
        <p class="card-text"><?= $formation['libelle']?></p>
        <p class="card-text"><small class="text-muted"><!-- Last updated 3 mins ago --></small></p>
        </div>
    </div>
</div>
<div class="row text-center">

<div class="col">
<div class="card">

              <div class="card-body">
                <h5 class="card-title text-center">Inscription</h5>
                <p class="card-text"><?= $formation['libelle']?></p>
              </div>
            <form action="" method="post">  
                <div style="margin:2px 2px 2px 2px;">
                 <div class="form-floating mb-3">
                   <input type="text" class="form-control" id="floatingInput" name="nom" required>
                   <label for="floatingInput">Votre nom</label>
                  </div>
                
              
                 <div class="form-floating mb-3">
                   <input type="text" class="form-control" id="floatingInput" name="postnom" required>
                   <label for="floatingInput">Votre postnom</label>
                  </div>
                
                
                 <div class="form-floating mb-3">
                   <input type="text" class="form-control" id="floatingInput" name="adresse">
                   <label for="floatingInput">Votre adresse</label>
                  </div>

                  <div class="form-floating mb-3">
                   <input type="tel" class="form-control" id="floatingInput" name="numTel" required>
                   <label for="floatingInput">Votre numbero de téléphone</label>
                  </div>
               
                
                 <div class="form-floating mb-3">
                   <textarea name="message" class="form-control" id="floatingInput" cols="30" rows="10"></textarea>
                   <label for="floatingInput">Laisser un message</label>
                  </div>
                </div>
              
              <div class="card-body">
                <button class=" btn btn-primary" type="submit" name="sinscrire">S'incrire</button>
                <a href="formations.php" class="card-link">Retour aux formations</a>
              </div>
            </form>
</div>
</div>

</div>
</main>
<?php
  include 'includes/footer.php';
  ?>
</div>