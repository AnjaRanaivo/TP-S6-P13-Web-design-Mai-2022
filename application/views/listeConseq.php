<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h1>Impacts du réchauffement climatique</h1>
        </div>

        <div class="row">
            <?php for($i=0;$i<count($listeConseq);$i++){ ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo assets_url("/img/conseq/".$listeConseq[$i]['image']) ?>" alt="">
              <!-- <h4><a href="<?php //echo site_url("ConseqController/ficheConseq?id=".$listeConseq[$i]['id']) ?>"><?php //echo $listeConseq[$i]['titre'] ?></a></h4> -->
              <h4><a href="<?php echo $listeConseq[$i]['url'] ?>-<?php echo $listeConseq[$i]['id'] ?>-consequence.php"><?php echo $listeConseq[$i]['titre'] ?></a></h4>
              
            </div>
          </div>
                <?php } ?>
        </div>

      </div>
    </section><!-- End Team Section -->