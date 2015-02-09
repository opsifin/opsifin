<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class trial_balance extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Authentication');
	}
	
	public function home(){
		

		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
			$this->twig->display("reports/trial_balance", $content);
                    }
                    else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
			$this->twig->display("trial_balance", $content);
                    }    
		}
	}
	
		
}
?>