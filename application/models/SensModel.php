<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SensModel extends CI_Model{

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
                      <img src="'.assets_url("/img/sens/".$actu['image']).'" alt="">
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

    public function getListeSens() {
        $req="select * from sensibilisation";
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }

    public function getSens($id) {
        $req="select * from sensibilisation where id=".$id;
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list[0];
    }
}
?>
