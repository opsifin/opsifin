<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Flight extends CI_Controller {
	private $valid = false;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelFlight');		
		$this->load->model('modelAirlines');
		$this->load->model('modelAirport');		
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelFlight->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/ticketing/fligt/form");
		else
			redirect("../index.php/ticketing/flight/form");				
	}

	public function dataList($page = 0) {
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
            $config["base_url"] = base_url() . "index.php/ticketing/flight/datalist";
            $config["total_rows"] = $this->modelFlight->totalData($find, $by);
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
           	$listData = $this->modelFlight->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listflight", $content);
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
				$edit = $this->modelFlight->getById($idEdit);
			}			
			
			$airLines = $this->db->get("mst_airlines")->result();
			$airPort = $this->db->select('mst_airport.*, mst_country.nama_country')
						->from('mst_airport')->join('mst_country', 'mst_country.id_country = mst_airport.id_country')
						->get()->result();
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"airlines" => $airLines,
				"airport" => $airPort,
			);
			
			$this->twig->display("formflight", $content);
		}
		else
			redirect("../");
	}
	
	public function delete()
	{		
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelFlight->delete($id);
		
		if ($valid)
			redirect("../index.php/ticketing/flight/datalist");	
	}
	
	public function cari($page = 0, $from = NULL, $to = NULL, $tanggal = NULL)
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			if ($_POST) {
				$from = $this->input->post('from');
				$to = $this->input->post('to');
				$tanggal = $this->input->post('tanggal');
			}
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/ticketing/flight/cari";
            $config["total_rows"] = $this->modelFlight->totalDataFind($from, $to, $tanggal);
            $config["per_page"] = 10;
			$config['num_links'] = 5;			
			$config['uri_segment'] = 4;
			
			
           	$this->pagination->initialize($config);
           	$listData = $this->modelFlight->listDataFind($config["per_page"], $page, $from, $to, $tanggal);
            $links = $this->pagination->create_links();
			$airPort = $this->db->select('mst_airport.*, mst_country.nama_country')
						->from('mst_airport')->join('mst_country', 'mst_country.id_country = mst_airport.id_country')
						->get()->result();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"from" => $from,
				"to" => $to,
				"tanggal" => $tanggal,
				"page" => $page,
				"airport" => $airPort,
			);
			
			$this->twig->display("cariflight", $content);
		}
		else
			redirect("../");
	}
}
?>