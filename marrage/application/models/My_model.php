<?php 

class My_model extends CI_Model{
    
    public function __construct(){
        
        $this->load->database();
    }
    
    public function first() {
        
        $this->db->select('name');
        $this->db->where('id', '2');
        $query=$this->db->get('test');
        
        return $query->row_array();
        
    }
}