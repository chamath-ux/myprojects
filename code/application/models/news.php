<?php
	class News_model extends CI_Model{
	public function __construct(){
	$this->load->database();
	}
	public function display(){
	
	$this->db->where("id=1");
	$query= $this->db->get('posts');
	
	}

	}
