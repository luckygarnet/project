<?php

class agency extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function addAgency($data) {
        $this->db->insert('agency', $data);
        //$this->db->insert('agency',$data);
    }
    public function getById(){
        $query = $this->db->get('agency');
        return $query;
    }
}

?>