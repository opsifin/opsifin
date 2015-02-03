<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Airlines extends CI_Controller {
	private $valid = false;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelAirlines');
	}
	
	public function save(){
		/* Uploading Logo Process */
		$fileName = NULL;
		if(!empty($_FILES["logo"]["name"])){
			$uploadedfileName = $_FILES["logo"]["name"];
			$procesFile = $this->owner->processFile($uploadedfileName);
			$fileName = $this->owner->fileName;
			$validFile = $this->owner->validFile;
			
			if ($validFile)
			{	
				$config['upload_path'] = APPPATH."../assets/upload/logo_airlines/";
				$config['file_name'] = $fileName;
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
				
				if (!$this->upload->do_upload("logo")){
					$error =  $this->upload->display_errors();
					$this->owner->alert("Upload Failed `".$error."`","ticketing/airlines/form");
				}
			}
			else
				$this->owner->alert("Upload file with current type is not allow","ticketing/airlines/form");
		}
		/* End Of Uploading Logo */
		
		$params = (object) $this->input->post();
		$this->valid = $this->modelAirlines->save($params, $fileName);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/ticketing/airlines/form");
		else
			redirect("../index.php/ticketing/airlines/form");
	}
	
	public function saveitemCharge(){
		$valid = false;
		$jumlah = $this->input->post("jumlah");
		$idAirlines = $this->input->post("id_airlines");
		
		$valid = $this->modelAirlines->resetItems($idAirlines);
		
		if ($valid) {
			for ($x = 1; $x <= $jumlah; $x++) {
				$idItem = $this->input->post("id_item$x");
				$keterangan = $this->input->post("keterangan$x");
				
				$params["id_airlines"] = $idAirlines;
				$params["id_item"] = $idItem;
				$params["keterangan"] = $keterangan;
								
				$valid = $this->modelAirlines->saveCharges($params);
			}
		}
		
		redirect("../index.php/ticketing/airlines/dataList");		
	}
	
	public function savePolicy(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelAirlines->savePolicy($params);		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/ticketing/airlines/formPolicy/?id=".$params->id);
		else
			redirect("../index.php/ticketing/airlines/dataListPricing");	
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
            $config["base_url"] = base_url() . "index.php/ticketing/airlines/datalist";
            $config["total_rows"] = $this->modelAirlines->totalData($find, $by);
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
           	$listData = $this->modelAirlines->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listairlines", $content);
		}
		else
			redirect("../");
	}
	
	public function dataListPricing($page = 0)
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
            $config["base_url"] = base_url() . "index.php/ticketing/airlines/dataListPricing";
            $config["total_rows"] = $this->modelAirlines->totalData($find, $by);
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
           	$listData = $this->modelAirlines->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listairlinespricing", $content);
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
				$q = $this->db->get_where("mst_airlines", array("id_airlines" => $idEdit));
				$edit = $q->row();
			}			
			
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
							
			);
			
			$this->twig->display("formairlines", $content);
		}
		else
			redirect("../");
	}
	
	public function formPolicy()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_airlines", array("id_airlines" => $idEdit));
				$edit = $q->row();
			}			
			$currency = $this->db->query("select distinct currency from mst_country where currency <>'' order by currency asc")->result();
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"currency" => $currency,	
			);
			
			$this->twig->display("formairlinespolicy", $content);
		}
		else
			redirect("../");
	}
	
	public function formItem()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_airlines", array("id_airlines" => $idEdit));
				$edit = $q->row();
			}
						
			$currency = $this->db->query("select distinct currency from mst_country where currency <>'' order by currency asc")->result();			
			$airLines = $this->db->get("mst_airlines")->result();
			$itemCharge = $this->db->query("select *, if(persen_idr='1', concat(nilai, ' %'), concat(format(nilai, 0),' IDR')) as nilai_charge from mst_itembiayaticket")->result();
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"currency" => $currency,
				"airlines" => $airLines,
				"item" => $itemCharge,	
			);
			
			$this->twig->display("formairlinescharges", $content);
		}
		else
			redirect("../");
	}
	
	public function getAirlinesID(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$airlinesId = $this->input->post('id_airlines');
			if (!empty($airlinesId)) {
				redirect("../index.php/ticketing/airlines/formItem/?id=".$airlinesId);	
			}
		}
		else
			redirect("../");
	}
	
	public function delete()
	{	
	
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelAirlines->delete($id);
		
		if ($valid)
			redirect("../index.php/ticketing/airlines/datalist");
	
	}
}
?>