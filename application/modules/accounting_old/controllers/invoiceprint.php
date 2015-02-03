<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class InvoicePrint extends CI_Controller {
	private $valid = false;
	public function __construct() {
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelCustomer');
		$this->load->model('modelInvoicePrint');
		$this->load->model('main/modelNumbertrans');
	}
	
	public function dataListToPrint($page = 0) {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$idCustomer = NULL;
			$startDate = NULL;
			$endDate = NULL;
			$namaLengkap = NULL;
			$listData = NULL;
			
			if ($_POST) {
				$idCustomer = $this->input->post('id_customer');
				$startDate = $this->input->post('start_date');
				$endDate = $this->input->post('end_date');
				$namaLengkap = $this->input->post('nama_lengkap');
				$listData = $this->modelInvoicePrint->listDataToPrint($idCustomer, $startDate, $endDate);
			}
			
           	
          	$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"id_customer" => $idCustomer,
				"start_date" => $startDate,
				"end_date" => $endDate,
				"nama_lengkap" => $namaLengkap,
				"data" => $listData,
 			);
			
			$this->twig->display("listinvoicetoprint", $content);
		}
		else
			redirect("../");
	}
	
	public function printSingleInvoice(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) { 
			$id = $this->input->get("id");			
			//$getPrint = $this->modelInvoicePrint->setPrintInvoice($id);
			
			$edit = $this->modelInvoicePrint->getInvoiceById($id);	
			$passenger = $this->modelInvoicePrint->getPassengerById($id);
			$terbilang = $this->owner->terbilangEn($edit->total_sell_price);
			
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"edit" => $edit,
				"passenger" => $passenger,
				"terbilang" => $terbilang,
 			);
			$this->twig->display("printinvoice", $content);
		}
	}
	
	public function printMultiInvoice(){
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) { 
			$id = $this->input->get("id");		
			$idCustomer = $this->input->get("id_customer");	 	
			$getPrint = $this->modelInvoicePrint->setPrintInvoice($id);
			
			$edit = $this->db->get_where("mst_customer", array("id_customer" => $idCustomer))->row();
			$passenger = $this->modelInvoicePrint->getSevInvoiceById($id);
			$d = $this->db->query("select sum(total_sell_price) as total from trans_ticketinvoice where id_invoice in ($id)")->row();
			$terbilang = $this->owner->terbilangEn($d->total);
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"edit" => $edit,
				"passenger" => $passenger,
				"terbilang" => $terbilang,
				"total" => $d->total,
			
 			);
			$this->twig->display("printinvoicemulti", $content);
		}
	}
	
	public function dataListHasPrint($page = 0) {
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$idCustomer = NULL;
			$startDate = NULL;
			$endDate = NULL;
			$namaLengkap = NULL;
			$listData = NULL;
			
			if ($_POST) {
				$idCustomer = $this->input->post('id_customer');
				$startDate = $this->input->post('start_date');
				$endDate = $this->input->post('end_date');
				$namaLengkap = $this->input->post('nama_lengkap');
				$listData = $this->modelInvoicePrint->listDataHasPrint($idCustomer, $startDate, $endDate);
			}
			
           	
          	$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"id_customer" => $idCustomer,
				"start_date" => $startDate,
				"end_date" => $endDate,
				"nama_lengkap" => $namaLengkap,
				"data" => $listData,
 			);
			
			$this->twig->display("listinvoicehasprint", $content);
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