<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class City extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCountry');
		$this->load->model('modelCity');
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelCity->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/main/city/form");
		else
			redirect("../index.php/main/city/form");				
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
            $config["base_url"] = base_url() . "index.php/main/city/datalist";
            $config["total_rows"] = $this->modelCity->totalData($find, $by);
            $config["per_page"] = 15;
			$config['num_links'] = 5;			
			$config['uri_segment'] = 4;
			
			
			$endFrom = $config["per_page"];
			$startFrom = $page;
			if (!empty($page)) {
				$endFrom = ($config["per_page"] * $page); 
				$startFrom = ($endFrom - $config["per_page"]);
			}
			
           	$this->pagination->initialize($config);
           	$listData = $this->modelCity->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listcity", $content);
		}
		else
			redirect("../");
	}
	
	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_city", array("id_city" => $idEdit));
				$edit = $q->row();
			}			
			
			
			$country = $this->db->from("mst_country")->order_by("nama_country", "asc")->get()->result();	
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"country" => $country,				
			);
			
			$this->twig->display("formcity", $content);
		}
		else
			redirect("../");
	}
	
	public function delete()
	{		
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelCity->delete($id);
		
		if ($valid)
			redirect("../index.php/main/city/datalist");	
	}
}
?>