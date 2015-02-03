<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Coasettings extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCoaSetting');
	}
	
	public function savelcc(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoaSetting->savelcc($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coasettings/formlcc");
		else
			redirect("../index.php/main/coasettings/formlcc");				
	}
	

	public function formlcc()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = $this->db->get_where("coalcc_setting", array("id_company" => $this->session->userdata("clientId")))->row();
			$coa = $this->db->get("mst_accnumber")->result();		
			echo $this->db->last_query();
                        
			$content = array (
				"log" => $log,
                                "base_url" => base_url(),
				"edit" => $edit,
				"coa" => $coa,
			);
			
			$this->twig->display("formcoasettinglcc", $content);
		}
		else
			redirect("../");
	}
	
	public function savebsp(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoaSetting->savebsp($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coasettings/formbsp");
		else
			redirect("../index.php/main/coasettings/formbsp");				
	}
	

	public function formbsp()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = $this->db->get_where("coabsp_setting", array("id_company" => $this->session->userdata("clientId")))->row();
			$coa = $this->db->get("mst_accnumber")->result();		
			echo $this->db->last_query();
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"coa" => $coa,
			);
			
			$this->twig->display("formcoasettingbsp", $content);
		}
		else
			redirect("../");
	}
	
	public function savehotel(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoaSetting->savehotel($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coasettings/formhotel");
		else
			redirect("../index.php/main/coasettings/formhotel");				
	}
	

	public function formhotel()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = $this->db->get_where("coahotel_setting", array("id_company" => $this->session->userdata("clientId")))->row();
			$coa = $this->db->get("mst_accnumber")->result();		
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"coa" => $coa,
			);
			
			$this->twig->display("formcoasettinghotel", $content);
		}
		else
			redirect("../");
	}
	
	public function savetour(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoaSetting->savetour($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coasettings/formtour");
		else
			redirect("../index.php/main/coasettings/formtour");				
	}
	

	public function formtour()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = $this->db->get_where("coatour_setting", array("id_company" => $this->session->userdata("clientId")))->row();
			$coa = $this->db->get("mst_accnumber")->result();		
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"coa" => $coa,
			);
			
			$this->twig->display("formcoasettingtour", $content);
		}
		else
			redirect("../");
	}
	
	public function savedocument(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoaSetting->savedocument($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coasettings/formdocument");
		else
			redirect("../index.php/main/coasettings/formdocument");				
	}
	

	public function formdocument()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = $this->db->get_where("coadocument_setting", array("id_company" => $this->session->userdata("clientId")))->row();
			$coa = $this->db->get("mst_accnumber")->result();		
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"coa" => $coa,
			);
			
			$this->twig->display("formcoasettingdocument", $content);
		}
		else
			redirect("../");
	}
	
	public function saveothers(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoaSetting->saveothers($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coasettings/formothers");
		else
			redirect("../index.php/main/coasettings/formothers");				
	}
	

	public function formothers()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = $this->db->get_where("coaother_setting", array("id_company" => $this->session->userdata("clientId")))->row();
			$coa = $this->db->get("mst_accnumber")->result();		
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"coa" => $coa,
			);
			
			$this->twig->display("formcoasettingothers", $content);
		}
		else
			redirect("../");
	}
	
	
}
?>