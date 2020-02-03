<?php

class Pages1 extends CI_Controller{
    
    public function my($page ='test'){
        if ( ! file_exists(APPPATH.'views/test/'.$page.'.php'))
        
           {
                // Whoops, we don't have a page for that!
                show_404();
        }

        
        $this->load->view('templates/header');
        $this->load->view('test/'.$page);
        $this->load->view('templates/footer');
}
   
    }

