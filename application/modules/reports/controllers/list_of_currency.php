<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class list_of_currency extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('Authentication');
	}
	
	public function home(){
		
                $this->load->model('modelcurrency_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
                $currencylist = $this->modelcurrency_all->getoption();
                
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'currencylist'  => $currencylist,
			);
			$this->twig->display("reports/list_of_currency", $content);
                    }
                    else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'currencylist'  => $currencylist,
			);
			$this->twig->display("list_of_currency", $content);
                    }    
		}
	}
}