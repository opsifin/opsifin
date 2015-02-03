<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Coagroup extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCoalevel');
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCoalevel->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/coagroup/form");
		else
			redirect("../index.php/main/coagroup/form");				
	}
	

	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_acclevel", array("id_levelacc" => $idEdit));
				$edit = $q->row();
			}	
			
			$dataClass = $this->db->get("mst_accgroup")->result();
			$dataLevel = $this->db->get("mst_acclevel")->result();
			$getRow = $this->modelCoalevel->dataList($page = 0, $find = NULL, $by = NULL, "index.php/main/coatype/form");
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"class" => $dataClass,
				"level" => $dataLevel,
				"data" => $getRow["data"],
				"links" => $getRow["links"],
			);
			
			$this->twig->display("formcoagroup", $content);
		}
		else
			redirect("../");
	}
	
        
        // remove this function 
        // by dwi 
//	public function delete()
//	{		
//		$valid = false;
//		$id = $this->input->get('id');
//		$valid = $this->modelCountry->delete($id);
//		
//		if ($valid)
//			redirect("../index.php/main/country/datalist");	
//	}
        
        function delete()
        {
            $params = (object) $this->input->get();
            
            $valid = array();
            $valid = $this->modelCoalevel->del($params);
            if ($valid['valid']){
                redirect(site_url('main/coagroup/form'), 'refresh');
            }
            else {
                echo $valid['message'];
            };            
        }
}


?>