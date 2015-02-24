<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class bank_statement extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('Authentication');
	}
	
	public function home(){
		
                $this->load->model('modelbranch_all');
                $this->load->model('modelcurrency_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
                $branchlist = $this->modelbranch_all->getoption();
                $currencylist = $this->modelcurrency_all->getoption();
                
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'currencylist'  => $currencylist,
			);
			$this->twig->display("reports/bank_statement", $content);
                    }
                    else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'currencylist'  => $currencylist,
			);
			$this->twig->display("bank_statement", $content);
                    }    
		}
	}
}