<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cash_advance extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
			$this->twig->display("cash_advance/formcashadvance", $content);
		}
	}
}