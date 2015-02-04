<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cheque_bg extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('twig');
	$this->load->helper('url');
	$this->load->library("pagination");
        $this->load->model('modelbg');
        $this->load->model('modelbgdetail');
        
    }
    
    public function form(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		$detailRow = array('data'=>array(),);
                $editdetail = array();
		if ($userLogged) {
                        $edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("cheque_transaction", array("id_cheque" => $idEdit));
				$edit = $q->row();
                                
                                $idEditDetail = $this->input->get('detail');
                                if (!empty($idEditDetail)){
                                    $qdetail = $this->db->get_where("cheque_transaction_detail", array("id_cheque_detail" => $idEditDetail));
                                    $editdetail = $qdetail->row();                                    
                                }
                                $detailRow = $this->modelbgdetail->dataList($page = 0, $find = NULL, $by = NULL, "index.php/cashier/cheque_bg/form");
                                
			}	
                        
                        $getRow = $this->modelbg->dataList($page = 0, $find = NULL, $by = NULL, "index.php/cashier/cheque_bg/form");
			                        
			$content = array (
				"log"       => $log,
				"base_url"  => base_url(),
                                "edit"      => $edit,
				"data"      => $getRow["data"],
                            
                                "editdetail"=> $editdetail,
                                "detail"    => $detailRow["data"],                            
				"links"     => $getRow["links"],
			);
                        			
			$this->twig->display("cheque_bg/formchequebg", $content);
		}
	}
        
        function save()
        {
            $params = (object) $this->input->post();        
            $valid  = $this->modelbg->save($params);	       

            if (empty($valid))
                $this->owner->alert("Please complete the form", "../index.php/cashier/cheque_bg/form");
            else
                redirect("../index.php/cashier/cheque_bg/form");
            }
        
        function delete()
        {
            $valid = false;
            $id = $this->input->get('id');
            $valid = $this->modelbg->delete($id);
		
            if ($valid)
                redirect("../index.php/cashier/cheque_bg/form");
        }
        
        function delete_detail()
        {
            $valid = false;
            $id = $this->input->get('id');
            $id = $this->input->get('detail');
            
            $valid = $this->modelbgdetail->delete($id);
		
            if ($valid)
                redirect("../index.php/cashier/cheque_bg/form");
        }
}