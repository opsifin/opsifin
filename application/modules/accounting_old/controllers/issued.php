<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Issued extends CI_Controller {
	private $valid = false;
	public function __construct() {
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCustomer');
		$this->load->model('modelIssued');
	}
	
	public function emptyData($table, $param) {		
		$q = $this->db->get_where($table, $param);
		$num = $q->num_rows();
	
		return $num <= 0 ? true : false;
	}
	
	public function save() {
	
		$params = (object) $this->input->post();
		$idBooking = $this->modelIssued->save($params);		
		if (empty($idBooking))
			$this->owner->alert("Please complete the form", "../index.php/ticketing/issued/formIssued");
		else
			redirect("../index.php/ticketing/issued/dataListBooking");	
	
	}
	
	public function dataListBooking($page = 0) {
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
            $config["base_url"] = base_url() . "index.php/ticketing/issued/dataListBooking";
            $config["total_rows"] = $this->modelIssued->totalDataBooking($find, $by);
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
           	$listData = $this->modelIssued->listDataBooking($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listbookingissued", $content);
		}
		else
			redirect("../");
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
            $config["base_url"] = base_url() . "index.php/ticketing/issued/dataListIssued";
            $config["total_rows"] = $this->modelIssued->totalDataIssued($find, $by);
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
           	$listData = $this->modelIssued->listDataIssued($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listissued", $content);
		}
		else
			redirect("../");
	}
	
	public function formIssued($idBooking = NULL){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idBooking))
				$edit = $this->modelIssued->getIssuedById($idBooking);
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,				
			);
			
			$this->twig->display("formissued", $content);
		}
		else
			redirect("../");
	}
	
	public function getBookingId(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$bookingNumber = $this->input->post('booking_number');
			if (!empty($bookingNumber)) {
				$q = $this->db->get_where("trans_ticketbook", array("booking_number" => $bookingNumber));
				$edit = $q->row();
				redirect("../index.php/ticketing/issued/formIssued/".$edit->id_booking);	
			}	
			else
				redirect("../index.php/ticketing/issued/formIssued");
		}
		else
			redirect("../");
	}
	
	public function delete() {	
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelBooking->delete($id);
		
		if ($valid)
			redirect("../index.php/ticketing/booking/datalist");	
	}
	
}
?>