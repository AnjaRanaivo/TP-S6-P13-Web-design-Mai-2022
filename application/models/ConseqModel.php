<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConseqModel extends CI_Model{

    public function getListeConseq() {
        $req="select * from consequence";
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }

    public function getConseq($id) {
        $req="select * from consequence where id=".$id;
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list[0];
    }
}
?>
