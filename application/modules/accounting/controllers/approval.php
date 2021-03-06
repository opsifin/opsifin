<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Approval extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
                $this->load->library('twig');
                $this->load->helper('url');
                $this->load->library("pagination");
		//$this->load->model('Authentication');
	}
	
	public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
                        
			$this->twig->display("approval/formapproval", $content);
		}
	}
        
       
}