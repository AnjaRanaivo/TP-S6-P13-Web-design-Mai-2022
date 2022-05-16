<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model{

    public function login($mail) {
        $req="select * from admin where admin.email='".$mail."'";
        $list = array();
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }
}
?>
