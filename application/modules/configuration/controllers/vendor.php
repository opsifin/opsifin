<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Vendor extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCompany');
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCompany->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/configuration/vendor/form");
		else
			redirect("../index.php/configuration/vendor/form");				
	}
	

	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$q = $this->db->get_where("mst_company", array("id_company" => 1));
			$edit = $q->row();			
			$currency = $this->db->get("mst_currency")->result();
			
			$content = array (
				"log" => $log,
                                "base_url" => base_url(),
				"edit" => $edit,
				"currency" => $currency,
			);
			
			$this->twig->display("formvendor", $content);
		}
		else
			redirect("../");
	}
}