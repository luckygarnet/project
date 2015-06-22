<?php

class committee extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function addCommittee($data) {
        $this->db->insert('committee', $data);
        //$this->db->insert('agency',$data);
    }
    public function getCommitteeById($committee_id) {
        $this->db->where('committee_id', $committee_id);
        $query = $this->db->get('committee');
        return $query;
    }
    public function getById(){
        $query = $this->db->get('committee');
        return $query;
    }
     public function updateStatus($committee_id,$data){
        $this->db->where('committee_id',$committee_id);
        $this->db->update('committee',$data);
        $num_updates = $this->db->affected_rows();
        return $num_updates;
    }
    public function editCommittee($data) {
        $this->db->where('committee_id', $this->input->post('committee_id'));
        $this->db->update('committee', $data);
        $num_updates = $this->db->affected_rows();
        return $num_updates;
    }
     public function selectStatus(){
       //$query = $this->db->get('user');
       $query = $this->db->get_where('committee','status !=0') ;
        return $query;
    }
    
}

?>