<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SensModel extends CI_Model{

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
