<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dp_cash_advance extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('Authentication');
	}
	
	public function home(){
		
                $this->load->model('modelbranch_all');
                $this->load->model('modeluser_all');
                $this->load->model('modelcompany_all');
                $this->load->model('modeldept_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
                $branchlist = $this->modelbranch_all->getoption();
                $userlist = $this->modeluser_all->getoption();
                $complist = $this->modelcompany_all->getoption();
                $deptlist = $this->modeldept_all->getoption();
                
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'userlist'  => $userlist,
                                'complist'  => $complist,
                                'deptlist'  => $deptlist
			);
			$this->twig->display("reports/dp_cash_advance", $content);
                    }
                    else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'userlist'  => $userlist,
                                'complist'  => $complist,
                                'deptlist'  => $deptlist
			);
			$this->twig->display("dp_cash_advance", $content);
                    }    
		}
	}
}