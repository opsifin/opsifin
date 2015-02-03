<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dp_supplier extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('twig');
	$this->load->helper('url');
	$this->load->library("pagination");
	$this->load->model('modeldpsupplier');
    }
    
    public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
                    
                        $edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("dp_supplier", array("id_dp_supplier" => $idEdit));
				$edit = $q->row();
			}	
                        
                        $getRow = $this->modeldpsupplier->dataList($page = 0, $find = NULL, $by = NULL, "index.php/cashier/dp_supplier/form");
			                       
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
                                "edit"  => $edit,
				"data"  => $getRow["data"],
				"links" => $getRow["links"],
			);
			$this->twig->display("supplier/formdpsupplier", $content);
		}
	}
    
    function save()
    {
        $params = (object) $this->input->post();        
        $valid = $this->modeldpsupplier->save($params);	       
        
        if (empty($valid))
            $this->owner->alert("Please complete the form", "../index.php/cashier/dp_supplier/form");
	else
            redirect("../index.php/cashier/dp_supplier/form");
    }   
    
    public function delete()
	{		
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modeldpsupplier->delete($id);
		
		if ($valid)
			redirect("../index.php/cashier/dp_supplier/form");	
	}
}