<?php
class modelInvoicePayment extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
		$this->load->model('main/modelNumbertrans');
	}
	
	public function saveInvoice($params)
	{	
		$log = $this->session->all_userdata();
		$invoiceId = NULL;
		
		$this->db->set("invoice_number", $params->invoice_number);
		$this->db->set("transc_number", $params->transc_number);
		$this->db->set("id_vendor", $params->id_vendor);
		$this->db->set("id_customer", $params->id_customer);
		$this->db->set("id_airport", $params->id_airport);
		$this->db->set("invoice_date", $params->invoice_date);
		$this->db->set("due_date", $params->due_date);
		$this->db->set("id_group", $this->session->userdata('id_group'));
		$this->db->set("trans_type", 1);
		//$this->db->set("ppn", $params->ppn);
		$this->db->set("flight_type", $params->flight_type);
		$this->db->set("id_airlines", $params->id_airlines);
		$this->db->set("book_code", $params->book_code);
		$this->db->set("currency", $params->currency);
		$this->db->set("route", $params->route);
		$this->db->set("base_fare", $params->base_fare);
		$this->db->set("komisi", $params->komisi);
		$this->db->set("pajak", $params->pajak);
		$this->db->set("sell_price", $params->sell_price);
		$this->db->set("total_passenger", $params->total_passenger);
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("status", 0); // type : 0 = proces, 1 = selesai/paid
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_invoice", $params->id);
			$invoiceId = $params->id;
			$valid = $this->db->update("trans_ticketinvoice");
			$valid = $this->logUpdate->addLog("update", "trans_ticketinvoice", $params);
			//$valid = $this->updateBooking($params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('trans_ticketinvoice');	
			$invoiceId = $this->db->insert_id();		
			$valid = $this->logUpdate->addLog("insert", "trans_ticketinvoice", $params);
			//$valid = $this->updateBooking($params);	
			$valid = $this->modelNumbertrans->updateTicketNumber();
		}
		return $invoiceId;		
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, format(a.base_fare, 2) as base, format(a.komisi, 2) as komi, format(a.pajak, 2) as paja, format(a.sell_price, 2) as sell, 
									b.nama_vendor, c.nama_airlines, d.nama_jenis, f.nama_lengkap, sum(g.besarnya) as terbayar, format(sum(g.besarnya), 2) as payed
									from trans_ticketinvoice a 
									join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_airlines c on c.id_airlines=a.id_airlines
									join mst_jenisvendor d on d.id_jenis=b.id_jenis
									join mst_customer f on f.id_customer=a.id_customer
									left join trans_ticketpayment g on a.id_invoice=g.id_invoice
									where 1=1 $searchBy
									group by a.id_invoice order by a.id_invoice desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, format(a.base_fare, 2) as base, format(a.komisi, 2) as komi, format(a.pajak, 2) as paja, format(a.sell_price, 2) as sell, 
									b.nama_vendor, c.nama_airlines, d.nama_jenis, f.nama_lengkap, sum(g.besarnya) as terbayar, format(sum(g.besarnya), 2) as payed
									from trans_ticketinvoice a 
									join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_airlines c on c.id_airlines=a.id_airlines
									join mst_jenisvendor d on d.id_jenis=b.id_jenis
									join mst_customer f on f.id_customer=a.id_customer
									left join trans_ticketpayment g on a.id_invoice=g.id_invoice
									where 1=1 $searchBy
									group by a.id_invoice desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function getInvoiceById($idInvoice) {
		$data = $this->db->query("select a.*, b.nama_vendor, c.nama_lengkap, d.inisial, d.nama_airport
									from trans_ticketinvoice a join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_customer c on c.id_customer=a.id_customer
									join mst_airport d on d.id_airport=a.id_airport where a.id_invoice=$idInvoice")->row();
		return $data;						
	}
	
	public function getInvoiceByNumber($number) {
		$data = $this->db->query("select a.*, b.nama_vendor, c.nama_lengkap, d.inisial, d.nama_airport
									from trans_ticketinvoice a join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_customer c on c.id_customer=a.id_customer
									join mst_airport d on d.id_airport=a.id_airport where a.invoice_number='$number'	")->row();
		return $data;						
	}
	
	private function getNoUrut($id){
		$data = $this->db->query("select max(no_urut) as topNo from trans_ticketpayment where id_invoice=$id")->row();
		$max = (float)$data->topNo + 1;	
		return $max;	
	}
	
	public function savePayment($params){
		$log = $this->session->all_userdata();
		$noUrut = $this->getNoUrut($params->id_invoice);
		$process = false;
		
		$this->db->set("id_invoice", $params->id_invoice);
		$this->db->set("id_group", $this->session->userdata('userGroup'));
		$this->db->set("transc_number", $params->transc_number);
		$this->db->set("no_urut", $noUrut);
		$this->db->set("payment_number", $params->payment_number);
		$this->db->set("tanggal_payment", $params->tanggal_payment);
		$this->db->set("besarnya", $params->besarnya);
		$this->db->set("currency", $params->curr);
		$this->db->set("status", 0);
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$process = $this->db->insert('trans_ticketpayment');	
		$valid = $this->modelNumbertrans->updateTicketPaymentNumber();	
		
		return $process;	
	}
	
	
	
}
?>