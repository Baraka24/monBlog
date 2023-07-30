<?php
    require_once '../includes/connection.php';
    require_once '../actions/blogger_Infos.php';
    require 'actions/competences_Infos.php';
    require 'actions/add_Skill.php';
    require 'actions/update_Blogger.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php include 'includes/bootstrap.php' ?>
</head>
<body>
    <main>
    <?php include 'includes/navbar.php' ?>


<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Mon profile</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    
    <div class="feature col">
    <?php 
    if(isset($_GET['msgA']))
    {
        ?> 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_GET['msgA']?>
        <a class="link-success bi bi-check2-square text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" href="">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
        <?php
    }
    ?>
    <div class="card" style="width: 18rem;">
          		<a href="modifierPhotoProfile.php">
               <img src="<?= $blogger['profile']?>" class="card-img-top" alt="Modifier la photo de profil">
              </a>
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
       <!-- <div class="text-center mb-3">
        <button class="btn btn-lg btn-primary">Modifier</button>
       </div> -->
      </div>
      
    </div>

      <div class="feature col">
    <?php 
    if(isset($_GET['msgU']))
    {
        ?> 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_GET['msgU']?>
        <a class="link-success bi bi-check2-square text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" href="">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
        <?php
    }
    ?>
    <form method="post">
          <div class="form-floating mb-3">
            <input type="text" name="noms" class="form-control" id="floatingInput" value="<?= $blogger['noms']?>" placeholder="name@example.com">
            <label for="floatingInput">Noms</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="fb" class="form-control" id="floatingInput" value="<?= $blogger['facebook']?>"  placeholder="name@example.com">
            <label for="floatingInput">Facebook adresse</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="wh" class="form-control" id="floatingInput" value="<?= $blogger['whatsapp']?>"  placeholder="name@example.com">
            <label for="floatingInput">Numero Whatsapp</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="tw" class="form-control" id="floatingInput" value="<?= $blogger['twitter']?>"  placeholder="name@example.com">
            <label for="floatingInput">Twitter adresse</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="numTel" class="form-control" id="floatingInput" value="<?= $blogger['phone']?>"  placeholder="name@example.com">
            <label for="floatingInput">Numero telephone</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" value="<?= $blogger['gmail']?>"  placeholder="name@example.com">
            <label for="floatingInput">E-mail adresse</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Mot de passe</label>
          </div>
          
          <div class="form-floating mb-3">
            <textarea name="descr" id="" cols="30" rows="10" class="form-control"><?= $blogger['description']?></textarea>
            <label for="floatingInput">Description</label>
          </div>
          <button class="btn btn-primary" name="updateBlogger" type="submit">Enregistrer</button>
    </form>
    </div>

      
    <div class="feature col">
      <h2>Nouvelle Compétence</h2>
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
      <form action="" method="post">
        <div class="form-floating mb-3">
            <input type="text" name="skill" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Compétence</label>
        </div>
        <button class="btn btn-primary" name="addSkill" type="submit">Ajouter</button>
      </form>
      <div class="bd-example">
        <ul class="list-group">
          <li class="list-group-item disabled" aria-disabled="true">Compétences</li>
          
          <?php 
           while($competence=mysqli_fetch_array($comptences))
           {
            ?>
            <li class="list-group-item"><?= $competence['skill']?>&nbsp
            <a href="actions/supprimer_Skill.php?id=<?= $competence['id']?>" class="btn badge rounded-pill bg-danger bi bi-trash" onclick="return confirm('Etes vous sûr de vouloir supprimer?')">
                          
            </a>
            <a href="modifierPhotoProfile.php?id=<?= $competence['id']?>" class="btn badge rounded-pill bg-warning bi bi-tropical-storm text-dark" onclick="return confirm('Etes vous sûr de vouloir modifier?')">
                          
            </a>
            </li>
            <?php 
            
           }
        
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="b-example-divider"></div>
<?php
    include '../includes/footer.php';
?>
    </main>
    <?php include 'includes/script.php' ?>  
</body>
</html>