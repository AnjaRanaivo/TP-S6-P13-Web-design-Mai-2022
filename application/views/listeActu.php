<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h1>Actualités</h1>
        </div>

        <div class="row">
            <?php for($i=0;$i<count($listeActu);$i++){ ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo assets_url("/img/actualites/".$listeActu[$i]['image']) ?>" alt="">
              <!-- <h4><a href="<?php //echo site_url("ActuController/ficheActu?id=".$listeActu[$i]['id']) ?>"><?php //echo $listeActu[$i]['titre'] ?></a></h4> -->
              <h4><a href="<?php echo $listeActu[$i]['url'] ?>-<?php echo $listeActu[$i]['id'] ?>-actualite.php"><?php echo $listeActu[$i]['titre'] ?></a></h4>
              <span><?php echo $listeActu[$i]['date'] ?></span>
            </div>
          </div>
                <?php } ?>
        </div>

      </div>
    </section><!-- End Team Section -->