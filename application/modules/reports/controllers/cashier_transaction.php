<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class cashier_transaction extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('Authentication');
	}
	
	public function home(){
		
                $this->load->model('modelbranch_all');
                $this->load->model('modeldept_all');
                $this->load->model('modelcompany_all');
                $this->load->model('modeluser_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
                $branchlist = $this->modelbranch_all->getoption();
                $deptlist = $this->modeldept_all->getoption();
                $complist = $this->modelcompany_all->getoption();
                $userlist = $this->modeluser_all->getoption();
                
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'deptlist'  => $deptlist,
                                'complist'  => $complist,
                                'userlist'  => $userlist
			);
			$this->twig->display("reports/cashier_transaction", $content);
                    }
                    else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'deptlist'  => $deptlist,
                                'complist'  => $complist,
                                'userlist'  => $userlist
			);
			$this->twig->display("cashier_transaction", $content);
                    }    
		}
	}
}