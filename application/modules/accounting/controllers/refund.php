<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Refund extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
                $this->load->library('twig');
                $this->load->helper('url');
                $this->load->library("pagination");
		$this->load->model('modelrefund');
	}
	
	public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("refund_transaction", array("id_refund" => $idEdit));
				$edit = $q->row();
			}	
                        
                        $getRow = $this->modelrefund->dataList($page = 0, $find = NULL, $by = NULL, "index.php/accounting/refund/form");
			                      
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
                                "edit"  => $edit,
				"data"  => $getRow["data"],
				"links" => $getRow["links"],
			);
                        
			
			$this->twig->display("refund/formrefund", $content);
		}
	}
	
}