<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActuModel extends CI_Model{

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
