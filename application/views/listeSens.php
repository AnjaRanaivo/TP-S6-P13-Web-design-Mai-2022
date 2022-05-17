<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h1>Sensibilisations</h1>
        </div>

        <div class="row">
            <?php for($i=0;$i<count($listeSens);$i++){ ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo assets_url("/img/sens/".$listeSens[$i]['image']) ?>" alt="">
              <!-- <h4><a href="<?php //echo site_url("SensController/ficheSens?id=".$listeSens[$i]['id']) ?>"><?php //echo $listeSens[$i]['titre'] ?></a></h4> -->
              <h4><a href="<?php echo $listeSens[$i]['url'] ?>-<?php echo $listeSens[$i]['id'] ?>-sensibilisation.php"><?php echo $listeSens[$i]['titre'] ?></a></h4>
              
            </div>
          </div>
                <?php } ?>
        </div>

      </div>
    </section><!-- End Team Section -->