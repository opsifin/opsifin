<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Booking extends CI_Controller {
	private $valid = false;
	public function __construct() {
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCustomer');
		$this->load->model('modelBooking');
		$this->load->model('modelItemcharge');
	}
	
	public function emptyData($table, $param) {		
		$q = $this->db->get_where($table, $param);
		$num = $q->num_rows();
	
		return $num <= 0 ? true : false;
	}
	
	public function save() {
	
		$params = (object) $this->input->post();
		$emptyData = true;
		$idBooking = 0;
		
		if (empty($params->id))
			$emptyData = $this->emptyData("trans_ticketbook", array("booking_number" => $params->booking_number));
		
		if ($emptyData){		
			$idBooking = $this->modelBooking->save($params);		
			if (empty($idBooking))
				$this->owner->alert("Please complete the form", "../index.php/ticketing/booking/form");
			else
				redirect("../index.php/ticketing/booking/formPassenger/$idBooking");	
		}
		else
			$this->owner->alert("Truncated data! booking Number has used, insert data failed.", "../index.php/ticketing/booking/form");
	}
	
	public function savePassenger() {
		
		$valid = false;
		$jumlah = $this->input->post("jumlah");
		$idBooking = $this->input->post("id_booking");
		
		$valid = $this->modelBooking->resetPassenger($idBooking);
		
		if ($valid) {
			for ($x = 1; $x <= $jumlah; $x++) {
				$title = $this->input->post("title$x");
				$noIdentitas = $this->input->post("no_identitas$x");
				$namaLengkap = $this->input->post("nama_lengkap$x");
				$telp = $this->input->post("telp$x");
				$jenis = $this->input->post("jenis$x");
				$hargaTiket = $this->input->post("harga_tiket$x");
				$hargaNta = $this->input->post("harga_nta$x");
				
				$params["id_booking"] = $idBooking;
				$params["title"] = $title;
				$params["no_identitas"] = $noIdentitas;
				$params["nama_lengkap"] = $namaLengkap;
				$params["telp"] = $telp;
				$params["jenis"] = $jenis;
				$params["harga_tiket"] = $hargaTiket;
				$params["harga_nta"] = $hargaNta;
				
				$valid = $this->modelBooking->savePassenger($params);
			}
			
			$valid = $this->modelBooking->setTotal($idBooking);
			
		}
		
		redirect("../index.php/ticketing/booking/dataList");	
		
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
            $config["base_url"] = base_url() . "index.php/ticketing/booking/datalist";
            $config["total_rows"] = $this->modelBooking->totalData($find, $by);
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
           	$listData = $this->modelBooking->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listbooking", $content);
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
			
			if (!empty($idEdit))
				$edit = $this->modelBooking->getBookingById($idEdit);	
				
			$airLines = $this->db->get("mst_airlines")->result();					
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"airlines" => $airLines,
				
			);
			
			$this->twig->display("formbooking", $content);
		}
		else
			redirect("../");
	}
	
	public function formPassenger($idBooking = NULL){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idBooking)) {
				$q = $this->db->get_where("trans_ticketbook", array("id_booking" => $idBooking));
				$edit = $q->row();
			}			
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,				
			);
			
			$this->twig->display("formpassenger", $content);
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
				redirect("../index.php/ticketing/booking/formPassenger/".$edit->id_booking);	
			}	
			else
				redirect("../index.php/ticketing/booking/formPassenger");
		}
		else
			redirect("../");
	}
	
	public function hitungCharges($price, $idAirlines){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$nilaiCharge = $this->modelItemcharge->hitungCharge($price, $idAirlines);
			$nilaiNTA = $price + $nilaiCharge;
			
			$row = $this->db->query("select a.*,b.nama_item, b.nilai, b.persen_idr from mst_airlinescharges a join mst_itembiayaticket 
									b on a.id_item=b.id_item where a.id_airlines=$idAirlines")->result();									
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $row,	
				"nta" =>$nilaiNTA,
				"harga" => $price,
			);
			
			$this->twig->display("showitemcharges", $content);
		}
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