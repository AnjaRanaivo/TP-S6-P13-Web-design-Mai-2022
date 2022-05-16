<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContinentModel extends CI_Model{

    public function getListe() {
        $req="select * from continent";
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }
}
?>
