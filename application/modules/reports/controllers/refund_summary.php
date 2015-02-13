<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class refund_summary extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Authentication');
	}
	
	public function home(){
		
                $this->load->model('modeldept_all');
                $this->load->model('modelbranch_all');
                $this->load->model('modelcompany_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		$deptlist = $this->modeldept_all->getoption();
                $branchlist = $this->modelbranch_all->getoption();
                $complist = $this->modelcompany_all->getoption();
                
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'deptlist'    => $deptlist,
                                'branchlist'  => $branchlist,
                                'complist'    => $complist,
			);
			$this->twig->display("reports/refund_summary", $content);
                    }
                    else {
                        
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'deptlist'    => $deptlist,
                                'branchlist'  => $branchlist,
                                'complist'    => $complist,
                            
			);
			$this->twig->display("refund_summary", $content);
                    }    
		}
	}
	
		
}
?>