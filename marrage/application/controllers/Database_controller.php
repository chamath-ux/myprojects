<?php

    class Database_controller extends CI_Controller{
       
        
        public function table(){
            
            $this->load->model('database_model');
            $result['data']=$this->database_model->datamodel();
          
            

  

            $this->load->view('templates/header');
            $this->load->view('pages/database.php',$result);
            $this->load->view('templates/footer');
            
        }
     
        
    }
?>