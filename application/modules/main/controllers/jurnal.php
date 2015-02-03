<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jurnal extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modeljurnal');
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$idJurnal = $this->modeljurnal->saveSingle($params);
		
		if ($idJurnal > 0)
			redirect("../index.php/main/jurnal/form/".$idJurnal);			
		else
			$this->owner->alert("Please complete the form", "../index.php/main/jurnal/form");	
	}
	
	public function saveall(){
		$params = (object) $this->input->post();
		$valid = $this->modeljurnal->saveAll($params);
		
		if ($valid)
			redirect("../index.php/main/jurnal/form/");			
		else
			$this->owner->alert("Please complete the form", "../index.php/main/jurnal/form/".$params->id);	
	}
	

	public function form($idJurnal = NULL, $idDetail = NULL)
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {			
			$coa = $this->db->get("mst_accnumber")->result();			
			$edit = NULL;
			$main = NULL;
			$editRow = NULL;
			if (!empty($idJurnal)){
				$edit = $this->db->get_where("reff_journal", array("id_jurnal" => $idJurnal, "id_company" =>  $this->session->userdata("clientId")))->result();
				$main = $this->db->get_where("reff_journal", array("id_jurnal" => $idJurnal, "id_company" =>  $this->session->userdata("clientId")))->row();
			}
			
			if (!empty($idJurnal) and !empty($idDetail)) { 
				$editRow = $this->db->get_where("reff_journal", array("id_jurnal" => $idJurnal, "id_company" =>  $this->session->userdata("clientId"), "id" => $idDetail))->row();
			}
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"coa" => $coa,
				"edit" => $edit,
				"id_jurnal" => $idJurnal,
				"main" => $main,
				"edit_row" => $editRow,
			);			
			$this->twig->display("formjurnal", $content);
		}
		else
			redirect("../");
	}
	
}
?>