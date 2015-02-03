<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		
	}
	
	public function home(){
		

		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
                    
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
                        echo "test";
			//$this->twig->display('home', $content);
                        
		}
                else {
                    echo 'test';
                }
	}
	
}
?>