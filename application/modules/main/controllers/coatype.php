<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Coatype extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCoatype');
                
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoatype->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coatype/form");
		else
			redirect("../index.php/main/coatype/form");				
	}
	

	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_accgroup", array("id_groupacc" => $idEdit));
				$edit = $q->row();
			}	
			
			$getRow = $this->modelCoatype->dataList($page = 0, $find = NULL, $by = NULL, "index.php/main/coatype/form");
			
                        
			$content = array (
				"log"   => $log,
                                "base_url" => base_url(),
				"edit"  => $edit,
				"xdata"  => $getRow["data"],
				"links" => $getRow["links"],
			);
			
			$this->twig->display("formcoatype", $content);
		}
		else
			redirect("../");
	}
	
        // remove by dwi wahyudi
//	public function delete()
//	{		
//		$valid = false;
//		$id = $this->input->get('id');
//		$valid = $this->modelCountry->delete($id);
//		
//		if ($valid)
//			redirect("../index.php/main/country/datalist");	
//	}
        
        // new delete function
        function del()
        {
            $params = $this->input->post();
            
            $valid = $this->modelCoatype->del($params);
            if ($valid['valid']){
                redirect(site_url('main/coatype/form'), 'refresh');
            }
            else {
                echo $valid['message'];
            };            
        }
        
        function check_kode_group()
        {
            $kodegroup = $this->input->post('kode_group');
            $valid = $this->modelCoatype->check_kd($kodegroup);
            return json_encode($valid);
        }
        
}