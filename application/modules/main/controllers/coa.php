<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Coa extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCoalevel');
		$this->load->model('modelCoa');
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoa->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coa/form");
		else
			redirect("../index.php/main/coa/form");				
	}
	

	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_accnumber", array("id_acc" => $idEdit));
				$edit = $q->row();
			}	
			
			$dataClass = $this->db->get("mst_accgroup")->result();
			$dataLevel = $this->db->get("mst_acclevel")->result();
			$getRow = $this->modelCoa->dataList($page = 0, $find = NULL, $by = NULL, "index.php/main/coa/form");
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"class" => $dataClass,
				"level" => $dataLevel,
				"data" => $getRow["data"],
				"links" => $getRow["links"],
			);
			
			$this->twig->display("formcoa", $content);
		}
		else
			redirect("../");
	}
	
	public function saveBalance(){
		$jumlah = $this->input->post("jumlah");
		$arr = array();
		for($x = 1; $x <= $jumlah; $x++) {
			$arr["nomor_acc"] = $this->input->post("nomor_acc".$x);
			$arr["id_company"]  = $this->input->post("id_company".$x);
			$arr["added"]  = $this->input->post("added".$x);
			$arr["balance"]  = $this->input->post("balance".$x);
		
			//var_dump($arr);
			//exit();
			if ($arr["added"] == 0) {
				$params = (object)$arr;
				$save = $this->modelCoa->saveCOABalance($params);
			}
			
		}
		
		redirect("../index.php/main/coa/setBalance");		
	} 
	
	public function setBalance()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_accnumber", array("id_acc" => $idEdit));
				$edit = $q->row();
			}	
			$getRow = $this->modelCoa->dataListByCompany($find = NULL, $by = NULL, "index.php/main/coa/setBalance");
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"data" => $getRow["data"],
			);
			
			$this->twig->display("formcoabalance", $content);
		}
		else
			redirect("../");
	}
	
	public function reloadCOA(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) { 
			$reloadCOA = $this->modelCoa->reloadCOA();
			if ($reloadCOA) 
				redirect("../index.php/main/coa/setBalance");	
		}
	}
	
        // remove this function
        // change by dwi
//	public function delete()
//	{		
//		$valid = false;
//		$id = $this->input->get('id');
//		$valid = $this->modelCountry->delete($id);
//		
//		if ($valid)
//			redirect("../index.php/main/coa/form");	
//	}
        
        
        function delete()
        {
            $params = (object) $this->input->get();            
            $valid = array();
            $valid = $this->modelCoa->del($params);
            if ($valid['valid']){
                redirect(site_url('main/coa/form'), 'refresh');
            }
            else {
                echo $valid['message'];
            };     
        }
        
}
?>