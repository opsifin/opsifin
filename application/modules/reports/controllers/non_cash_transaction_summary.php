<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class non_cash_transaction_summary extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Authentication');
	}
	
	public function home(){
		

                $this->load->model('modelbranch_all');
                $this->load->model('modelcurrency_all');
                $this->load->model('modeluser_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
                $branchlist = $this->modelbranch_all->getoption();
                $currencylist = $this->modelcurrency_all->getoption();
                $userlist = $this->modeluser_all->getoption();
		
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'currencylist'  => $currencylist,
                                'userlist'      => $userlist
			);
			$this->twig->display("reports/non_cash_transaction_summary", $content);
                    }
                    else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'currencylist'  => $currencylist,
                                'userlist'      => $userlist
			);
			$this->twig->display("non_cash_transaction_summary", $content);
                    }    
		}
	}
	
		
}
?>