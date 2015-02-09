<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Company extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelcompany');
	}
	
        
        function get_id($id)
        {
            $q = array();
            if (!empty($id)) {
		$q = $this->modelcompany->getdataid($id);
            }
            return json_endcode($q);
        }
        
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCompany->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/configuration/company/form");
		else
			redirect("../index.php/configuration/company/form");				
	}
	

	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_company", array("id_company" => $idEdit));
				$edit = $q->row();
			}	
                        
                        $getRow = $this->modelcompany->dataList($page = 0, $find = NULL, $by = NULL, "index.php/configuration/company/form");
			                      
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
                                "edit"  => $edit,
				"company"  => $getRow["data"],
				"links" => $getRow["links"],
			);
			
			$this->twig->display("formcompany", $content);
		}
		else
			redirect("../");
	}
}