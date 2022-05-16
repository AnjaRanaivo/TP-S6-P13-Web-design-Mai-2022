<?php
    if( ! defined('BASEPATH')) exit('No direct script access allowed');
    class News_model extends CI_Model
    {
        public function get_info()
        {
            // On simule l'envoi d'une requête
            return array('auteur' => 'Chuck Norris',
                        'date' => '24/07/05',
                        'email' => 'email@ndd.fr');
        }
        public function show_film(){
            $query = $this->db->query('select * from film');
            foreach ($query->result_array() as $row){
                echo $row['title'];
                echo $row['length'];
            }
        }
    }
?>