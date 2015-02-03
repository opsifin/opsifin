<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Currency extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCurrency');                
	}
        
        public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_currency", array("currency" => $idEdit));
				$edit = $q->row();
			}	
			
			$getRow = $this->modelCurrency->dataList($page = 0, $find = NULL, $by = NULL, "index.php/main/currency/form");
			
			$content = array (
				"log"   => $log,
                                "base_url" => base_url(),
				"edit"  => $edit,
				"data"  => $getRow["data"],
				"links" => $getRow["links"],
			);
			
			$this->twig->display("formcurrency", $content);
		}
		else
			redirect("../");
	}
        
        public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCurrency->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/currency/form");
		else
			redirect("../index.php/main/currency/form");				
	}
        
        // new delete function
        function del()
        {
            $params = $this->input->get();            
            $valid = $this->modelCurrency->del($params);
            if ($valid['valid']){
                redirect(site_url('main/currency/form'), 'refresh');
            }
            else {
                echo $valid['message'];
            };            
        }
}        