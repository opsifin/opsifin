<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class request_summary extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('Authentication');
	}
	
	public function home(){
		
                $this->load->model('modeluser_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
                $userlist = $this->modeluser_all->getoption();
		
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'userlist'  => $userlist,
			);
			$this->twig->display("reports/request_summary", $content);
                    }
                    else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'userlist'  => $userlist,
			);
			$this->twig->display("request_summary", $content);
                    }    
		}
	}
}