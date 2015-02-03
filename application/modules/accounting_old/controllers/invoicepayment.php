<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class InvoicePayment extends CI_Controller {
	private $valid = false;
	public function __construct() {
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCustomer');
		$this->load->model('modelBooking');
		$this->load->model('modelInvoicePayment');
		$this->load->model('modelIssued');
		$this->load->model('main/modelNumbertrans');
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
            $config["base_url"] = base_url() . "index.php/ticketing/invoicepayment/dataList";
            $config["total_rows"] = $this->modelInvoicePayment->totalData($find, $by);
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
           	$listData = $this->modelInvoicePayment->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listinvoiceppayment", $content);
		}
		else
			redirect("../");
	}
	
	
	public function form() {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$payment = NULL;
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$edit = $this->modelInvoicePayment->getInvoiceById($idEdit);
				$payment = $this->db->query("select *, format(besarnya, 2) as total from trans_ticketpayment where id_invoice=$idEdit")->result();
				$itemCharges = $this->db->query("select a.*, b.nama_item, b.nilai, b.persen_idr from trans_vendorcharges a join mst_itembiayaticket b on a.id_item=b.id_item where a.id_vendor=".$edit->id_vendor)->result();					
			}
			
			$airLines = $this->db->get("mst_airlines")->result();
			$invoicePaymentNumber = $this->modelNumbertrans->getTicketPaymentNumber();
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
				"payment_number" => $invoicePaymentNumber,
				"airport" => $airPort,
				"payment" => $payment,
			);
			
			$this->twig->display("forminvoicepayment", $content);
		}
		else
			redirect("../");
	}	
	
	public function getInvoiceByNumber(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			$paymentNumber = $this->input->post('invoice_number');
			
			if (!empty($paymentNumber)) {
				$edit = $this->modelInvoicePayment->getInvoiceByNumber($paymentNumber);
				redirect("../index.php/ticketing/invoicepayment/form/?id=".$edit->id_invoice);	
			}
		}
	}
	
	public function saveInvoice(){
		$params = (object) $this->input->post();		
		$valid = $this->modelInvoice->saveInvoice($params);		
		if (empty($valid))
			$idInvoice = $this->owner->alert("Please complete the form", "../index.php/ticketing/invoice/form");
		else
			redirect("../index.php/ticketing/invoice/form/?id=".$valid);	
	}
	
	public function savePayment(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$params = (object) $this->input->post();	
			$valid = $this->modelInvoicePayment->savePayment($params);		
			if (empty($valid))
				$idInvoice = $this->owner->alert("Please complete the form", "../index.php/ticketing/invoicepayment/form/?id=$params->id_invoice");
			else
				redirect("../index.php/ticketing/invoicepayment/form/?id=$params->id_invoice");	
			
		}
	}
	
}
?>