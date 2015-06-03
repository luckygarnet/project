<?php

class user extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function addUser($data){
          $this->db->insert('user', $data);
          
    }
     public function getUserById($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');
        return $query;
    }
     public function getAllUser() {        
        $query = $this->db->get('user');
        return $query;
    }
    public function editUser($data) {
        $this->db->where('user_id', $this->input->post('user_id'));
        $this->db->update('user', $data);
        $num_updates = $this->db->affected_rows();
        return $num_updates;
    }
    public function DeleteUser($user_id){
       $this->db->where('user_id',$user_id);
       $this->db->delete('user');
       return $this->db->affected_rows();
        
    }

    public function login(){
        
    }
   /* public function getStatus(){
      //  $this->db->select('status');
      // $this->db->from($this->);
      $this->db->where()
    }*/
    /* public function addUniversityUser($data){
         $this->db->insert('university_user', $data);
    }
    public function addFacultyUser($data){
         $this->db->insert('faculty_user', $data);
    }
    public function addMajorUser($data){
         $this->db->insert('marjor_user', $data);
    }
     public function getUserById($user_id) {
       
            $this->db->where('user_id', $user_id);
      
            $query = $this->db->get('user');
            return $query;
        
    }*/
    
}

?>
