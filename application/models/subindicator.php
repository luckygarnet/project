<?php

class subindicator extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function addSubindicator($data){
        $this->db->insert('subindicator', $data);
        $num_inserts = $this->db->affected_rows();
        return $num_inserts;
    }
    
    public function getSubindicatorById($subindicator_id) {
        $this->db->where('subindicator_id', $subindicator_id);
        $query = $this->db->get('subindicator');
        return $query;
    }
     public function getAllSubindicatorByindicator($indicator_id){
        $this->db->where('indicator_id',$indicator_id);
        $query = $this->db->get('subindicator');
        return $query;
    }
    
    public function editSubindicator($data){
        $this->db->where('subindicator_id',$this->input->post('subindicator_id'));
        $this->db->update('subindicator', $data);
        $num_updates = $this->db->affected_rows();
        return $num_updates;
    }
}

?>