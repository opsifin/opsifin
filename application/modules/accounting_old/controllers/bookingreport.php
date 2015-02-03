<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bookingreport extends CI_Controller {
	private $valid = false;
	public function __construct() {
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCustomer');
		$this->load->model('modelBooking');
		$this->load->model('modelreportBooking');
	}
	
	public function customerFilter() {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
				
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),				
			);
			
			$this->twig->display("reportfcustomer", $content);
		}
		else
			redirect("../");
	}
	
	public function customerReport($page = 0) {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$idCustomer = NULL;
			$date1 = NULL;
			$date2 = NULL;
			
			
			
			if ($_GET) {
				$idCustomer = $this->input->get('idCustomer');
				$date1 = $this->input->get('date1');
				$date2 = $this->input->get('date2');
			}
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/Bookingreport/customerReport/datalist";
            $config["total_rows"] = $this->modelreportBooking->totalDataCustomer($idCustomer, $date1, $date2);
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
           	$listData = $this->modelreportBooking->listDataCustomer($config["per_page"], $startFrom, $idCustomer, $date1, $date2);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"idCustomer" => $idCustomer,
				"date1" => $date1,
				"date2" => $date2,
			);
			
			$this->twig->display("reportcustomer", $content);
		}
		else
			redirect("../");
	}
	
	public function totalFilter() {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
				
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),				
			);
			
			$this->twig->display("reportftotal", $content);
		}
		else
			redirect("../");
	}
	
	public function totalReport($page = 0) {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$idCustomer = NULL;
			$date1 = NULL;
			$date2 = NULL;
			
			
			
			if ($_GET) {
				$idCustomer = $this->input->get('idCustomer');
				$date1 = $this->input->get('date1');
				$date2 = $this->input->get('date2');
			}
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/Bookingreport/customerReport/datalist";
            $config["total_rows"] = $this->modelreportBooking->totalDataCustomer($idCustomer, $date1, $date2);
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
           	$listData = $this->modelreportBooking->listDataCustomer($config["per_page"], $startFrom, $idCustomer, $date1, $date2);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"idCustomer" => $idCustomer,
				"date1" => $date1,
				"date2" => $date2,
			);
			
			$this->twig->display("reporttotal", $content);
		}
		else
			redirect("../");
	}
	
	public function airlinesFilter() {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$airLines = $this->db->get("mst_airlines")->result();
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),	
				"airlines" => $airLines,			
			);
			
			$this->twig->display("reportfairlines", $content);
		}
		else
			redirect("../");
	}
	
	public function airlinesReport($page = 0) {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$idAirlines= NULL;
			$date1 = NULL;
			$date2 = NULL;
			
			
			
			if ($_GET) {
				$idAirlines = $this->input->get('idAirlines');
				$date1 = $this->input->get('date1');
				$date2 = $this->input->get('date2');
			}
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/Bookingreport/customerReport/datalistAirlines";
            $config["total_rows"] = $this->modelreportBooking->totalDataAirlines($idAirlines, $date1, $date2);
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
           	$listData = $this->modelreportBooking->listDataAirlines($config["per_page"], $startFrom, $idAirlines, $date1, $date2);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"idAirlines" => $idAirlines,
				"date1" => $date1,
				"date2" => $date2,
			);
			
			$this->twig->display("reportairlines", $content);
		}
		else
			redirect("../");
	}
	
}
?>