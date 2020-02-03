<?php

class Test extends CI_Controller{
    
    public function test1(){
        
        $this->load->model('my_model');
        
         $query1 =$this->my_model->first();
        
     
}
   
    }

