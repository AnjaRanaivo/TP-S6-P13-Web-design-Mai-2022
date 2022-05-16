<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1><?php echo $actualite['titre'] ?></h1>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?php echo assets_url("/img/actualites/".$actualite['image']) ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Détails</h3>
              <ul>
                <li><strong>Titre</strong>: <?php echo $actualite['titre'] ?></li>
                <li><strong>Continent</strong>: <?php echo $actualite['nom'] ?></li>
                <li><strong>Date</strong>: <?php echo $actualite['date'] ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?php echo $actualite['titre'] ?></h2>
              <p>
              <?php echo $actualite['description'] ?>
            </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->