<?php

class agency extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function addAgency($data) {
        $this->db->insert('agency', $data);
        //$this->db->insert('agency',$data);
    }
    public function getAgencyById($agency_id) {
        $this->db->where('agency_id', $agency_id);
        $query = $this->db->get('agency');
        return $query;
    }
    public function getById(){
        $query = $this->db->get('agency');
        return $query;
    }
    public function editAgency($data) {
        $this->db->where('agency_id', $this->input->post('agency_id'));
        $this->db->update('agency', $data);
        $num_updates = $this->db->affected_rows();
        return $num_updates;
    }
    public function DeleteAgency($agency_id) {
        $this->db->delete('agency', array('agency_id' => $agency_id)); 
     
       return $this->db->affected_rows();
    }
    function showagency(){
     $data=array();
     $query = $this->db->get('agency');
     if($query->num_rows()>0){
            foreach($query->result_array()as$row){
                $data[]=$row;
            }
        }
        $query->free_result();
        return $data;
    }
}

?>