<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dp_customer extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('twig');
	$this->load->helper('url');
	$this->load->library("pagination");
	$this->load->model('modeldpcustomer');
    }
    
    public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
                        $edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("dp_customer", array("id_dp_customer" => $idEdit));
				$edit = $q->row();
			}	
                        
                        $getRow = $this->modeldpcustomer->dataList($page = 0, $find = NULL, $by = NULL, "index.php/cashier/dp_customer/form");
			                        
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
                                "edit"  => $edit,
				"data"  => $getRow["data"],
				"links" => $getRow["links"],
			);
			$this->twig->display("customer/formdpcustomer", $content);
		}
	}
        
    function save()
    {
        $params = (object) $this->input->post();   
        
        $valid = $this->modeldpcustomer->save($params);	       
        
        if (empty($valid))
            $this->owner->alert("Please complete the form", "../index.php/cashier/dp_customer/form");
	else
            redirect("../index.php/cashier/dp_customer/form");
    }   
    
    public function delete()
	{		
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modeldpcustomer->delete($id);
		
		if ($valid)
			redirect("../index.php/cashier/dp_customer/form");	
	}
}