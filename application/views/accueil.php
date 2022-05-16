<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>D'actualités</h2>
        </div>

        <div class="row">
            <?php for($i=0;$i<count($derniersActu);$i++){ ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo assets_url("/img/actualites/".$derniersActu[$i]['image']) ?>" alt="">
              <!-- <h4><a href="<?php //echo site_url("ActuController/ficheActu?id=".$derniersActu[$i]['id']) ?>"><?php //echo $derniersActu[$i]['titre'] ?></a></h4> -->
              <h4><a href="<?php echo $derniersActu[$i]['url'] ?>-<?php echo $derniersActu[$i]['id'] ?>-actualite.php"><?php echo $derniersActu[$i]['titre'] ?></a></h4>
              <span><?php echo $derniersActu[$i]['date'] ?></span>
            </div>
          </div>
                <?php } ?>
        </div>

      </div>
    </section><!-- End Team Section -->
    <section id="why-us" class="why-us">
        
      <div class="container">
      <div class="section-title">
          <h2>A savoir</h2>
         </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>01</span>
            <h4>Le réchauffement climatique</h4>
            <p>Le réchauffement climatique, appelé également réchauffement planétaire, est un phénomène qui se caractérise par 
                l’augmentation du niveau moyen de la température à la surface de la Terre.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>02</span>
            <h4>Énergie renouvelable</h4>
            <p>Une énergie est dite renouvelable lorsque la source d’énergie dont elle est extraite se renouvelle naturellement et en continu.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>03</span>
            <h4>Empreinte écologique</h4>
            <p>L’empreinte écologique, appelée également empreinte environnementale, est une mesure de la pression qu’exerce l’Homme sur 
                la planète. Mesurée en hectares globaux (hag) ou en nombre de planètes, elle permet d’estimer la surface terrestre nécessaire
                 à chaque individu pour subvenir à ses besoins.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>04</span>
            <h4>Développement durable</h4>
            <p>En d'autres termes, c'est la gestion rationnelle des ressources humaines, naturelles et économiques en vue 
                de satisfaire les besoins essentiels de l'humanité à très long terme.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>05</span>
            <h4>Biogaz</h4>
            <p>Le gaz vert, aussi nommé biogaz, est une énergie 100% renouvelable. Il contribue donc à la réduction des émissions de gaz à effet 
                de serre et au développement des énergies renouvelables et apparaît ainsi comme une ressource énergétique particulièrement
                 prometteuse pour l’avenir.</p>
          </div>


        </div>

      </div>
    </section><!-- End Why Us Section -->