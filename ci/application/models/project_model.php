<?php

    class Project_model extends CI_Model{
        
        public function make_project($data){
            
            $this->db->insert('projects', $data);
            return $this->db->insert_id();
        
        }
        
        
        public function get_projects() {

            $this->db->order_by('project_id', 'DESC');
            $q = $this->db->get('projects', 3);
            if($q->num_rows > 0){
            
                foreach($q->result() as $row){
                
                    $data[]=$row;
                
                }
            return $data;
            }
        
        }
        
        public function get_all_projects() {
            
            $this->db->order_by('project_title', 'ASC');
            $r = $this->db->get('projects');
            if($r->num_rows > 0){
            
                foreach($r->result() as $row){
                
                    $data[]=$row;
                
                }
            return $data;
            }
            
        }
        
        public function get_project_details($id){
            $this->db->select('*');
            $this->db->from('projects');
            $this->db->where('project_id', $id);
            return $this->db->get()->result_array();
    
        }
        
    }
?>