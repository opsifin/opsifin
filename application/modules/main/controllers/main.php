<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Authentication');
	}
	
	public function home(){
		

		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
			$this->twig->display("home", $content);
		}
	}
	public function login()
	{
		$userName = $this->input->post("username");
		$password =  $this->input->post("pass");
		
		$valid = $this->Authentication->loginAuth($userName, $password);				
		if ($valid) {
			$log = $this->session->all_userdata();
			$userLogged = $this->session->userdata('userLogged');
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
			);
			redirect("../index.php/main/home");
		}
		else
			redirect("../?" . $inisial);
	}
	public function index()
	{
		//error_reporting("all");
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		$content = array (
			"log" => $log,
		);
		
		if (!$userLogged) {
			if($_POST)
			{
				$request = (object)$this->input->post();	
				$valid = $this->Authentication->loginAuth($request->username, $request->password);				
				redirect("../");	
			}		
			$this->twig->display("login", $content);
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