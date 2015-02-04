<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Credit_note extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
                $this->load->library('twig');
                $this->load->helper('url');
                $this->load->library("pagination");
		$this->load->model('modelcn');
	}
	
	public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("cn_transaction", array("id_cn" => $idEdit));
				$edit = $q->row();
			}	
                        
                        $getRow = $this->modelcn->dataList($page = 0, $find = NULL, $by = NULL, "index.php/accounting/credit_note/form");
			                      
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
                                "edit"  => $edit,
				"data"  => $getRow["data"],
				"links" => $getRow["links"],
			);
                        $this->twig->display("credit_note/formcreditnote", $content);
		}
	}
	
}