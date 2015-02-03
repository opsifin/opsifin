<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class income_statement_balance_sheet extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Authentication');
	}
	
	public function home(){
		

		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
			$this->twig->display("home", $content);
		}
	}
	
		
}
?>