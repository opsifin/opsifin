<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adm extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Authentication');
	}
	
	public function accessGate()
	{
		
		$getClient = $this->Authentication->getClientId();		
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		$userLevel = $this->session->userdata('userLevel');
		$userName = $this->session->userdata('userName');
		
		$content = array (
			"log" => $log,
			"base_url" => base_url(),
		);
		
		if (empty($userName)) {
			if($_POST)
			{
				$userName = $this->input->post("username");
				$password =  $this->input->post("pass");
				$satker =  $this->input->post("satker");
				
				$valid = $this->Authentication->loginAuth($userName, $password, $satker);				
				redirect("../index.php/main/adm/accessgate");	
			}		
			$this->twig->display("admlogin", $content);
		}
		else {
			$this->twig->display("home", $content);
		}
	}
	
	public function gantiPassword()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$request = $this->input->post();	
			if ($request) {
				$save = $this->stmtExec($request);
				if ($save) {
					echo"<script language='javascript'>window.close();</script>";
				}
			}
			
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
			
			$this->twig->display("gantipassword", $content);
		}
		else
			redirect("../");
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect("../");	
	}
}
?>