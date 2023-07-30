<div class="container">
<br>
<?php
include 'includes/header.php';
include 'actions/nouvelles_Infos.php';
?>
<div class="nav-scroller bg-body shadow-sm">

  <nav class="nav nav-underline"  aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">
    Nouvelles: <br>
    </a>
  </nav>
</div>

<div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        while($nouvelle=mysqli_fetch_array($nouvelles))
        {
          ?>
          <div class="col">
          <div class="card shadow-sm">
            
                <img src="blogger/<?php echo $nouvelle['imageN']
                ?>" 
                width="100%" alt="">

            <div class="card-body">
              <h5 class="card-title text-center"><?= $nouvelle['descriptionN']?></h5>
              <p class="card-text"><?= $nouvelle['content']?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="" class="btn btn-sm btn-success bi bi-whatsapp">
                  <?= $nouvelle['blogger']?>
                  </a>
                  <a href="whatsapp://send?text=<?= $nouvelle['descriptionN']."</br>".$nouvelle['content'] ?>...pour en savoir plus https:///formations.php?id=<?= $nouvelle['id'] ?>" data-action="share/whatsapp/share" class="btn btn-sm btn-outline-success bi bi-whatsapp">
                  Partager
                  </a>
                </div>
                <small class="text-muted"><?= $nouvelle['date_hour']?></small>
              </div>
            </div>
          </div>
        </div>
          <?php
        }
        
        ?>
        
      </div>
</div>

<?php
  include 'includes/footer.php';
  ?>
</div>