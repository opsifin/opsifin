<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class outstanding_transaction extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Authentication');
	}
	
	public function home(){
		
                
                $this->load->model('modelbranch_all');
                $this->load->model('modeldept_all');
                $this->load->model('modelcurrency_all');
                $this->load->model('modelcompany_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
                $branchlist = $this->modelbranch_all->getoption();
                $deptlist = $this->modeldept_all->getoption();
		$currencylist = $this->modelcurrency_all->getoption();
                $complist = $this->modelcompany_all->getoption();
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'deptlist'    => $deptlist,
                                'currencylist'=> $currencylist,
                                'complist'    => $complist,
			);
			$this->twig->display("reports/outstanding_transaction", $content);
                 }       
                else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
                                'deptlist'    => $deptlist,
                                'currencylist'=> $currencylist,
                                'complist'    => $complist,
			);
			$this->twig->display("outstanding_transaction", $content);
                    }
                }
                
            }
            
}
        
?>