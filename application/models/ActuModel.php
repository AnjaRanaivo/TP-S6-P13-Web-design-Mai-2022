<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActuModel extends CI_Model{

    function slug($string)
    {
        $spaceRepl = "-";
        //$string=iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $string = strtr(utf8_decode($string), utf8_decode('áàâäãåçéèêëíìîïñóòôöõúùûüýÿÁÀÂÄÃÅÇÉÈÊËÍÏÎÌÑÓÒÔÖÕÚÙÛÜÝ'), 'aaaaaaceeeeiiiinooooouuuuyyAAAAAACEEEEEIIIINOOOOOUUUUY');
        $string = str_replace("&", "and", $string);
        $string = preg_replace("/[^a-zA-Z0-9'\/_|+ -]/",'',$string);
        $string = strtolower($string);
        $string = preg_replace("/[\/_|+ -']+/",'-',$string);
        echo $string;
        return $string;
    }

    function genererHtml($actu){
        //$file = fopen($actu['url'].".html",'a');
        file_put_contents("./application/views/".$actu['url'].".html",'<main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h1>'.$actu['titre'].'</h1>
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
                      <img src="'.assets_url("/img/actualites/".$actu['image']).'" alt="">
                    </div>
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>Détails</h3>
                  <ul>
                    <li><strong>Titre</strong>: '.$actu['titre'].'</li>
                    <li><strong>Continent</strong>: '.$actu['nom'].'</li>
                    <li><strong>Date</strong>: '.$actu['date'].'</li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2>'.$actu['titre'].'</h2>
                  <p>
                  '.$actu['description'].'
                </p>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
      </main><!-- End #main -->');
    }

    public function getLastActus() {
        $req="select * from actualite order by date desc limit 3";
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }
    public function getListeActus() {
        $req="select * from actualite";
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }
    public function getActu($id) {
        $req="select actualite.id as id,idContinent,continent.nom as nom,date,titre,description,url,image 
        from actualite join continent on actualite.idcontinent=continent.id where actualite.id=".$id;
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list[0];
    }
    public function ajout($idContinent,$date,$titre,$description,$url,$image) {
        $req='insert into actualite values(null,'.$idContinent.',"'.$date.'","'.$titre.'","'.$description.'","'.$url.'","'.$image.'")';
        $query = $this->db->query($req);
    }
    public function supprimer($id) {
        $req='delete from actualite where id='.$id;
        $query = $this->db->query($req);
    }
    public function modifier($id,$date,$titre,$description,$url) {
        $req='update actualite set date="'.$date.'",titre="'.$titre.'",description="'.$description.'",url="'.$url.'" where id='.$id;
        $query = $this->db->query($req);
    }
}
?>
