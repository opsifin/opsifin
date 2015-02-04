<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cheque_bg extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('twig');
	$this->load->helper('url');
	$this->load->library("pagination");
        $this->load->model('modelbg');
    }
    
    public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
                        $edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("cheque_transaction", array("id_cheque" => $idEdit));
				$edit = $q->row();
			}	
                        
                        $getRow = $this->modelbg->dataList($page = 0, $find = NULL, $by = NULL, "index.php/cashier/cheque_bg/form");
			                        
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
                                "edit"  => $edit,
				"data"  => $getRow["data"],
				"links" => $getRow["links"],
			);
                        
			
			$this->twig->display("cheque_bg/formchequebg", $content);
		}
	}
}