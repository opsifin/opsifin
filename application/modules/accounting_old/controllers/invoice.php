<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Invoice extends CI_Controller {
	private $valid = false;
	public function __construct() {
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCustomer');
		$this->load->model('modelBooking');
		$this->load->model('modelInvoice');
		$this->load->model('modelIssued');
		$this->load->model('main/modelNumbertrans');
	}
	
	public function emptyData($table, $param) {		
		$q = $this->db->get_where($table, $param);
		$num = $q->num_rows();
	
		return $num <= 0 ? true : false;
	}
	
	public function save() {
	
		$params = (object) $this->input->post();
		$emptyData = true;
		$valid = false;
		$idBooking = $params->id_booking;
		
		if (empty($params->id))
			$emptyData = $this->emptyData("trans_ticketinvoice", array("invoice_number" => $params->invoice_number));
		
		if ($emptyData){		
			$valid = $this->modelInvoice->save($params);		
			if (empty($valid))
				$this->owner->alert("Please complete the form", "../index.php/ticketing/invoice/form");
			else
			{
				echo "<script>window.open(\"".base_url()."index.php/ticketing/invoice/invoicePrint/?id=$idBooking\",'_blank'); 
					window.location=\"".base_url()."index.php/ticketing/invoice/dataListIssued\"</script>";
			}
		}
		else
			$this->owner->alert("Truncated data! Invoice Number has used, insert data failed.", "../index.php/ticketing/invoice/form?id=$idBooking");
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
            $config["base_url"] = base_url() . "index.php/ticketing/invoice/dataList";
            $config["total_rows"] = $this->modelInvoice->totalData($find, $by);
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
           	$listData = $this->modelInvoice->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listinvoice", $content);
		}
		else
			redirect("../");
	}
	
	
	public function form() {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$itemCharges = NULL;
			$idEdit = $this->input->get('id');
			$routeArr = array();
			
			if (!empty($idEdit)) {
				$edit = $this->modelInvoice->getInvoiceById($idEdit);
				$itemCharges = $this->db->query("select a.*, b.nama_item, b.nilai, b.persen_idr from mst_customercharges a join mst_itembiayaticket b on a.id_item=b.id_item where a.id_customer=".$edit->id_customer)->result();					
				$routeArr = explode( "-", $edit->route);
				
			}
			
			$airLines = $this->db->get("mst_airlines")->result();
			$invoiceNumber = $this->modelNumbertrans->getTicketNumber();
			$airPort = $this->db->select('mst_airport.*, mst_country.nama_country')
						->from('mst_airport')->join('mst_country', 'mst_country.id_country = mst_airport.id_country')
						->get()->result();
			$country = $this->db->query("select distinct currency from mst_country where currency <>'' order by currency asc")->result();
						
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"currency" => $country, 
				"airlines" => $airLines,
				"invoice_number" => $invoiceNumber,
				"airport" => $airPort,
				"item_charges" => $itemCharges,
				"route" => $routeArr,				
			);
			
			$this->twig->display("forminvoice", $content);
		}
		else
			redirect("../");
	}	
	
	public function saveInvoice(){
		$params = (object) $this->input->post();
		$route = "";
		for($x=1; $x <= 8; $x++){
			$r = $this->input->post("route".$x);
			
			if (!empty($r)) 
				$route.= $r."-";
				
		}
		$route = substr($route, 0, strlen($route) - 1);
				
		$valid = $this->modelInvoice->saveInvoice($params, $route);		
		if (empty($valid))
			$idInvoice = $this->owner->alert("Please complete the form", "../index.php/ticketing/invoice/form");
		else
			redirect("../index.php/ticketing/invoice/form/?id=".$valid);	
	}
	
	public function saveDetail(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$jumlahPassenger = $this->input->post("jumlah_passenger");
			$idInvoice = $this->input->post("id_invoice");
			
			$reset = $this->modelInvoice->resetPassenger($idInvoice);
			$resetItem = $this->modelInvoice->resetPassengerCharges($idInvoice);
			if ($reset == true and $resetItem == true) {
				
				
				for ($x = 1; $x <= $jumlahPassenger; $x++) {
					$title = $this->input->post("title$x");
					$firstName = $this->input->post("first_name$x");
					$middleName = $this->input->post("middle_name$x");
					$lastName = $this->input->post("last_name$x");
					$idNumber = $this->input->post("no_identitas$x");
					$jenis = $this->input->post("jenis$x");
					$baseFare = $this->input->post("base_fare$x");
					$jumlahItem = $this->input->post("jumlah_item$x");	
					$ticketNumber = $this->input->post("ticket_number$x");	
					
					$params["id_invoice"] = $idInvoice;
					$params["title"] = $title;
					$params["first_name"] = $firstName;
					$params["middle_name"] = $middleName;
					$params["last_name"] = $lastName;
					$params["no_identitas"] = $idNumber;
					$params["jenis"] = $jenis;
					$params["base_fare"] = $baseFare;
					$params["ticket_number"] = $ticketNumber;					
					
					$pars = (object)$params;
					
					$idPassenger = $this->modelInvoice->savePassengerInvoice($pars);
					
					if ($idPassenger > 0) {						
						for($y = 1; $y <= $jumlahItem; $y++) {
							$paramsItem["id_invoice"] = $idInvoice;
							$paramsItem["id_passenger"] = $idPassenger;
							$paramsItem["id_item"] =  $this->input->post("id_item$y");
							$paramsItem["nilai"] =  $this->input->post("nilai$y");
							//var_dump($paramsItem);
							$parsItem = (object)$paramsItem;							
							$saveItem = $this->modelInvoice->savePassengerCharge($parsItem); 
						}
					}
				}
				
				$this->modelInvoice->setTotalInvoice($idInvoice);
			}
			
			
			redirect("../index.php/ticketing/invoice/dataList/");		
			
		}
	}
	
	
	public function invoicePrint(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$edit = NULL;
			$passenger = NULL;	
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$edit = $this->modelInvoice->getBookingById($idEdit);	
				$passenger = $this->modelInvoice->passengerInvoice($idEdit);					
			}
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"passenger" => $passenger,
				
			);
			
			$this->twig->display("printinvoice", $content);
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