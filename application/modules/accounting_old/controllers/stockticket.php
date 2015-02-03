<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Stockticket extends CI_Controller {
	private $valid = false;
	public function __construct() {
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelTicket');
	}
	
	public function emptyData($table, $param) {		
		$q = $this->db->get_where($table, $param);
		$num = $q->num_rows();
	
		return $num <= 0 ? true : false;
	}
	
	
	public function save() {
		
		$params = (object) $this->input->post();
		$mulai = (float) $params->mulai;
		$hingga = (float) $params->hingga;
		
		if ($hingga > $mulai) {
			$x = 0;
			for ($x = $mulai; $x <= $hingga; $x++) {
				$x++;
			}
			
			$numberCode = "";
			$idStock = $this->modelTicket->saveHeader($params, $x);
			$data = $this->db->query("select a.*, b.nama_airlines, b.number_code from mst_vendorticket a join mst_airlines b on a.id_airlines=b.id_airlines where a.id_vendor=".$params->id_vendor)->row();
			$numberCode = $data->number_code;
			
			
			if($idStock > 0) {
				$x = 0;
				$pars = array();
				$pars["id_stock"] = $idStock;
				for ($x = $mulai; $x <= $hingga; $x++) {
					
					$noTicket = "";
					for($y=1; $y<= strlen($params->mulai) - strlen($x); $y++) {
						$noTicket.= "0";
					}
					$noTicket.= $x;
					
					$pars["no_ticket"] = $numberCode."".$params->prefix."".$noTicket;
					
					$paramsObj = (object)$pars;
					$saveDetail = $this->modelTicket->saveDetail($paramsObj);
				}
			}
			redirect("../index.php/ticketing/stockticket/form");	
		}
		else {
			$this->owner->alert("Please Check the number range of ticket", "../index.php/ticketing/stockticket/form");
		}
		
	
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
            $config["base_url"] = base_url() . "index.php/ticketing/stockticket/dataList";
            $config["total_rows"] = $this->modelTicket->totalData($find, $by);
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
           	$listData = $this->modelTicket->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listticketstock", $content);
		}
		else
			redirect("../");
	}
	
	public function form($idBooking = NULL){
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
			
			$this->twig->display("formstockticket", $content);
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
		$valid = $this->modelTicket->delete($id);
		
		if ($valid)
			redirect("../index.php/ticketing/stockticket/datalist");	
	}
	
}
?>