<?php

    class Model_users extends CI_Model{
    
    public function validate() {
        
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('users');
        
        if($query->num_rows ==1) {
            
            return TRUE;
        }
    }
   
   public function create_member() {
    
        $email = $this->input->post('email');
        
        $new_member_insert_data = array (
            
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'location' => $this->input->post('location'),
            'password' => md5($this->input->post('password'))
        );
    
        $insert = $this->db->insert('users', $new_member_insert_data);
        return $insert;
   }
   
   public function check_if_email_exists($email) {
    
        $this->db->where('email', $email);
        $result = $this->db->get('users');
        
        if($result->num_rows() >0 ){
            
            return FALSE;
            
        } else {
            
            return TRUE;
            
        }
    
   }
   
    public function get_members() {

     $this->db->order_by('id', 'DESC');
     $q = $this->db->get('users', 4);
     if($q->num_rows > 0){
     
         foreach($q->result() as $r){
         
             $data[]=$r;
         
         }
     return $data;
     }
 
 }

}        

