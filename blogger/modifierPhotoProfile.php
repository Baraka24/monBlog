<?php
    require_once '../includes/connection.php';
    require_once '../actions/blogger_Infos.php';
    require 'actions/competences_Infos.php';
    require 'actions/add_Skill.php';
    require 'actions/update_Blogger.php';
    require 'actions/photoProfile.php';
    require 'actions/change_Password.php';
    require 'actions/update_Skill.php';
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
  <h2 class="pb-2 border-bottom">Modifier profile</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    
    <div class="feature col">
    <div class="card" style="width: 18rem;">
          		<a href="modifierProfile.php">
               <img src="<?= $blogger['profile']?>" class="card-img-top" alt="Modifier la photo de profil">
              </a>
          		<div class="card-body">
          			<form action="" method="post" action="" enctype="multipart/form-data">
                  <div class="form-floating mb-3">
                    <input type="file" name="myfile" class="form-control" required id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Photo de profile</label>
                  </div>
                  <button class="btn btn-primary" name="updateProfile" type="submit">Enregistrer</button>
                </form>
              </div>
      </div>
      
    </div>

      <div class="feature col">
      <h3>Modifier Mot de passe</h3>
    <?php 
    if(isset($_GET['msgErr']))
    {
        ?> 
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $_GET['msgErr']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
        <?php
    }
    ?>
    <form method="post">
          <div class="form-floating mb-3">
            <input type="password" name="pwd" required class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Ancien mot de passe</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="pwdN" required class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Nouveau mot de passe</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="pwdC" required class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Mot de passe de confirmation</label>
          </div>
          <button class="btn btn-primary" name="changePwd" type="submit">Enregistrer</button>
    </form>
    </div>

      
    <div class="feature col">
      <h3>Modifier Compétence</h3>
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
      <form action="" method="post">
        <div class="form-floating mb-3">
            <input type="text" value="<?php if(isset($idS)){echo $mySkill['skill'];}  ?>" name="skill" required class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Compétence</label>
        </div>
        <button class="btn btn-primary" name="updateSkill" type="submit">Modifier</button>
      </form>
      
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