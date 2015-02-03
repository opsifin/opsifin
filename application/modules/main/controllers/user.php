<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->model('modelStruktur');
		$this->load->model('modelUser');
		$this->load->library("pagination");
		$this->load->helper('recursive');
	}
	
	private function stmtExec($request)
	{
		$params = (object) $request;
		$valid = false;
		
		if(!empty($params->username) and !empty($params->nama_lengkap) and !empty($params->password))
			$valid = $this->modelUser->save($params);
					
		return $valid;
	}
	
	private function stmtPassword($request)
	{
		$params = (object) $request;
		$valid = false;
		$passbefore = $this->session->userdata('userPassword');
		if(!empty($params->password) and !empty($params->pass1) and !empty($params->pass2)){
			
			if (md5($params->password) == $passbefore) {
				if($params->pass1 == $params->pass2)
					$valid = $this->modelUser->gantiPassword($params);						
			}
		}
					
		return $valid;
	}

	public function dataList($page = 0)
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$find = NULL;
			$by = NULL;
			
			if ($_POST) {
				$find = $this->input->post('find');
				$by = $this->input->post('by');
			}
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/main/pegawai/datalist";
            $config["total_rows"] = $this->modelUser->totalData($find, $by);
            $config["per_page"] = 10;
			$config['num_links'] = 5;			
			$config['uri_segment'] = 4;
			
			
			$endFrom = $config["per_page"];
			$startFrom = $page;
			if (!empty($page)) {
				$endFrom = ($config["per_page"] * $page); 
				$startFrom = ($endFrom - $config["per_page"]);
			}
			
           	$this->pagination->initialize($config);
           	$listData = $this->modelUser->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listuser", $content);
		}
		else
			redirect("../");
	}
	
	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$request = $this->input->post();			
			if ($request) {
			
				$save = $this->stmtExec($request);				
					
				if (!$save)
					$this->owner->alert("Lengkapi Pengisian", "../index.php/main/user/form");
				else				
					redirect("../index.php/main/user/datalist");		
				
			}
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_user", array("id_user" => $idEdit));
				$edit = $q->row();
			}			
			
			$struktur = $this->modelStruktur->getStruktur();
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"struktur" => $struktur,
			);
			
			$this->twig->display("formuser", $content);
		}
		else
			redirect("../");
	}
	
	public function emptyData($table, $param){
		
		$q = $this->db->get_where($table, $param);
		$num = $q->num_rows();
	
		return $num <= 0 ? true : false;
	}
	
	public function delete()
	{	
		$id = $this->input->get('id');
		$this->db->where('id_user', $id);
		$this->db->delete('mst_user');
		 
		redirect("../index.php/main/user/datalist");	
	}
	
	public function gantiPassword()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		if ($userLogged) {
		
			$request = $this->input->post();			
			if ($request) {
				$save = $this->stmtPassword($request);				
					
				if ($save)
					$this->owner->alert("Ganti Password berhasil", "../index.php/main/user/gantipassword");
				else				
					$this->owner->alert("Ganti Password gagal, mohon periksa isian Password sekarang dan Password baru sudah benar", "../index.php/main/user/gantipassword");	
				
			}
			
			$struktur = $this->modelStruktur->getStruktur();
			$content = array (
				"log" => $log,
              	"base_url" => base_url()
			);
			
			$this->twig->display("formganpass", $content);
		}
		else
			redirect("../");
	}
}
?>