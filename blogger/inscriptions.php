<?php
require_once '../includes/connection.php';
if(isset($_GET['formation']))
{
  $formation=$_GET['formation'];
$sql="SELECT inscription.nom AS nom, inscription.postnom AS postnom, 
formations.libelle AS libelle, inscription.id_formation AS id_formation,inscription.numTel AS numTel,
inscription.date_inscription AS date_inscription, inscription.message AS messageF, formations.categorie
 AS id_categorie, formations_categories.categorie AS categorie,inscription.adresse AS adresse 
 FROM formations_categories,formations,inscription
 WHERE formations_categories.id=formations.categorie AND formations.id=inscription.id_formation
 AND formations.id=$formation";
 $inscriptionsInfos=mysqli_query($con,$sql);
 
}
else
{
  require_once 'actions/inscriptions_Infos.php';
}
//require_once 'actions/inscriptions_Infos.php';
require_once '../actions/formations_Infos_All.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Les inscriptions aux formations</title>


    <!-- Bootstrap core CSS -->
<?php include 'includes/bootstrap.php' ?>

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

    
  </head>
  <body style="min-height: 75rem;
  padding-top: 4.5rem;">
    
<main class="container">
  <div class="container p-5">
  <?php include 'includes/navbar.php' ?>
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">Liste des inscriptions: </span>
        
      </a>
      <p>
          <form action="" method="GET" class="">
            <select name="formation" id="" class="form-select">
              <option selected disabled>Triez les inscrptions par formation</option>
              <?php
              while($formation=mysqli_fetch_array($formations))
              {
                ?>
                <option value="<?= $formation['id'] ?>" ><?= $formation['libelle'] ?></option>
                <?php
              }
              ?>
            </select>
            <br>
            <button class="btn btn-outline-success bi bi-filter" type="submit">
              Valider
            </button>
          </form>
        </p>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
    <table class="table table-sm table-bordered">
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

          <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Postnom</th>
            <th scope="col">Formation</th>
            <th scope="col" class="text-center">Contacts</th>
            <th scope="col">Date d'incription</th>
            <th scope="col">Adresse</th>
            <th scope="col">Message</th>
          </tr>
          </thead>
          <tbody>
            <?php 
            $count=0;
            while($inscription=mysqli_fetch_array( $inscriptionsInfos))
            {
              $count++;
              ?>
              <tr>
                <td><?= $inscription ['nom']?></td>
                <td><?= $inscription ['postnom']?></td>
                <td><?= $inscription ['libelle']?></td>
                <td>
                <a href="https://wa.me/<?= $inscription['numTel']?>" class="btn btn-success bi bi-whatsapp"></a>
                <hr class="text-light">
                <a href="tel:<?= $inscription['numTel']?>" class="btn btn-success bi bi-telephone"></a>
                </td>
                <td><?= $inscription ['date_inscription']?></td>
                <td><?= $inscription ['adresse']?></td>
                <td><?= $inscription ['messageF']?></td>
              </tr>
              <tr>
                <td colspan="7" class="text-center">
                <a href="deleteInscription.php?id=<?= $inscription ['id']?>" class="btn badge rounded-pill bg-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer?')">
                          Supprimer
                </a>
                
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
    <h5 class="d-block text-end mt-3">
          <span class="badge bg-dark text-light rounded-pill align-text-bottom">
            <?= $count ?>
          </span>
      
          </h5>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
  </div>
</main>


<?php include 'includes/script.php' ?>   
  </body>
</html>
