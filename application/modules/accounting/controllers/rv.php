<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rv extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Authentication');
	}
	
	public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
                        // Render (compile) the output but don't display it
                        //$output = $this->twig->render("receipt_voucher/formrv_header", $content);

                        // Set output
                        //$this->output->set_output($output);

                        $this->twig->display("receipt_voucher/formrv", $content);
		}
	}
	
}