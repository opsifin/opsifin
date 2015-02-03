<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer extends CI_Controller {
	private $valid = false;
	public function __construct() {
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCustomer');
	}
	
	public function emptyData($table, $param) {		
		$q = $this->db->get_where($table, $param);
		$num = $q->num_rows();
	
		return $num <= 0 ? true : false;
	}
	
	public function save() {
	
		$params = (object) $this->input->post();
		$emptyData = true;
		
		if (empty($params->id))
			$emptyData = $this->emptyData("mst_customer", array("no_identitas" => $params->no_identitas));
		
		if ($emptyData){		
			$idCustomer = $this->modelCustomer->save($params);		
			if (empty($idCustomer))
				$this->owner->alert("Please complete the form", "../index.php/ticketing/customer/form");
			else {
				$jumlah = $params->jumlah_item;
				
				$pars = array();
				$pars["id_customer"] =  $idCustomer;
				
				for($x = 1; $x <= $jumlah; $x++) {
					$pars["id_item"] = $this->input->post("id_item$x");
					if (!empty($pars["id_item"])) {
						$paramsObj = (object)$pars;
						$this->modelCustomer->saveCharges($paramsObj);
					}
				}
				redirect("../index.php/ticketing/customer/form");	
			}
			
				
		}
		else
			$this->owner->alert("Truncated data! insert data failed.", "../index.php/ticketing/customer/form");
	}
	
	public function savesetting() {
	
		$params = (object) $this->input->post();
		$emptyData = true;
		
		$this->valid = $this->modelCustomer->saveSetting($params);		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/ticketing/customer/formsetting");
		else
			redirect("../index.php/ticketing/customer/formsetting");	
		
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
            $config["base_url"] = base_url() . "index.php/ticketing/customer/datalist";
            $config["total_rows"] = $this->modelCustomer->totalData($find, $by);
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
           	$listData = $this->modelCustomer->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listcustomer", $content);
		}
		else
			redirect("../");
	}
	
	public function dataListSettings($page = 0) {
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
            $config["base_url"] = base_url() . "index.php/ticketing/customer/datalistSettings";
            $config["total_rows"] = $this->modelCustomer->totalDataSettings($find, $by);
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
           	$listData = $this->modelCustomer->listDataSettings($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listcustomersetting", $content);
		}
		else
			redirect("../");
	}
	
	public function form() {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			$itemCharge = $this->db->get("mst_itembiayaticket")->result();
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_customer", array("id_customer" => $idEdit));
				$edit = $q->row();
			}			
			
			$setting = $this->db->get_where("mst_customersetting", array("transaction" => "ticket"))->result();
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"setting" => $setting,
				"charge" => $itemCharge,
				
			);
			
			$this->twig->display("formcustomer", $content);
		}
		else
			redirect("../");
	}
	
	public function formsetting() {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_customersetting", array("id_setting" => $idEdit));
				$edit = $q->row();
			}			
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				
			);
			
			$this->twig->display("formcustomersetting", $content);
		}
		else
			redirect("../");
	}
	
	public function delete() {	
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelCustomer->delete($id);
		
		if ($valid)
			redirect("../index.php/ticketing/customer/datalist");	
	}
	
	public function deleteSetting() {	
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelCustomer->deleteSetting($id);
		
		if ($valid)
			redirect("../index.php/ticketing/customer/dataListSettings");	
	}
	
	public function cari($page = 0, $find = NULL, $by = NULL)
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			if ($_POST) {
				$find = $this->input->post('find');
				$by = $this->input->post('by');
			}
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/ticketing/customer/cari/$page/$find/$by";
            $config["total_rows"] = $this->modelCustomer->totalData($find, $by);
            $config["per_page"] = 10;
			$config['num_links'] = 5;			
			$config['uri_segment'] = 4;
			
			
           	$this->pagination->initialize($config);
           	$listData = $this->modelCustomer->listData($config["per_page"], $page, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
				"page" => $page,
			);
			
			$this->twig->display("caricustomer", $content);
		}
		else
			redirect("../");
	}
}
?>