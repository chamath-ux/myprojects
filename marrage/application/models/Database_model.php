<?php
        class Database_model extends CI_Model{
            
            public function __construct(){
                
                $this->load->database();
            }
            
            public function datamodel(){
                 
                $this->db->select('*');
                $query =$this->db->get('test');
                return $query->row_array();
            }
            
            public function insertmodel(){
           
              $sql = "insert into test (id,name)
 values ('','john.doe@xyz.com')";
$this->db->query($sql);
            }
           
        }
