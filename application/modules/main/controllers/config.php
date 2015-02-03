<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Config extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->model('modelConfig');
	}
	
	private function stmtExec($request)
	{
		$params = (object) $request;
		$valid = false;
		
		if(!empty($params->tahun_anggaran))
			$valid = $this->modelConfig->save($params);
					
		return $valid;
	}

	public function setup()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$request = $this->input->post();			
			if ($request) {
				$save = $this->stmtExec($request);				
				if (!$save)
					$this->owner->alert("Lengkapi Pengisian", "../index.php/main/golongan/form");
				else {				
				
					$session = array(
					   'userTahun' => $this->input->post('tahun_anggaran'),
					);
					$this->session->set_userdata($session);
					redirect("../index.php/main/config/setup");
				}
			}
		
			$q = $this->db->get_where("mst_conf", array("id" => 1));
			$edit = $q->row();
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,				
			);
			
			$this->twig->display("formsetup", $content);
		}
		else
			redirect("../");
	}
	
}
?>