<?php
class modelInvoice extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
		$this->load->model('main/modelNumbertrans');
	}
	
	public function saveInvoice($params, $route)
	{	
		$log = $this->session->all_userdata();
		$invoiceId = NULL;
		
		$this->db->set("invoice_number", $params->invoice_number);
		//$this->db->set("transc_number", $params->transc_number);
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
		$this->db->set("route", $route);
		$this->db->set("base_fare", $params->base_fare);
		$this->db->set("yq", $params->yq);
		$this->db->set("komisi", $params->komisi);
		$this->db->set("tax", $params->tax);
		$this->db->set("others", $params->others);		
		$this->db->set("total_passenger", $params->total_passenger);
		$this->db->set("remarks1", $params->remarks1);
		$this->db->set("remarks2", $params->remarks2);
		$this->db->set("remarks3", $params->remarks3);
		$this->db->set("remarks4", $params->remarks4);
		//$this->db->set("keterangan", $params->keterangan);
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
				
		$query = $this->db->query("select a.*, format(a.total_basefare, 2) as base, 
									b.nama_vendor, c.nama_airlines, d.nama_jenis, count(e.id_passenger) as jumlah_passenger, f.nama_lengkap
									from trans_ticketinvoice a 
									join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_airlines c on c.id_airlines=a.id_airlines
									join mst_jenisvendor d on d.id_jenis=b.id_jenis
									join trans_passenger e on e.id_invoice=a.id_invoice 
									join mst_customer f on f.id_customer=a.id_customer
									where 1=1 
									group by a.id_invoice $searchBy order by a.id_invoice desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_vendor, c.nama_airlines, d.nama_jenis, count(e.id_passenger) as jumlah_passenger 
									from trans_ticketinvoice a 
									join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_airlines c on c.id_airlines=a.id_airlines
									join mst_jenisvendor d on d.id_jenis=b.id_jenis
									join trans_passenger e on e.id_invoice=a.id_invoice where 1=1 
									group by a.id_invoice $searchBy order by a.id_invoice desc");
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
	
	public function savePassengerInvoice($params){
		$log = $this->session->all_userdata();
		$invoiceId = NULL;
		
		$this->db->set("id_invoice", $params->id_invoice);
		$this->db->set("title", $params->title);
		$this->db->set("first_name", $params->first_name);
		$this->db->set("middle_name", $params->middle_name);
		$this->db->set("last_name", $params->last_name);
		$this->db->set("no_identitas", $params->no_identitas);
		$this->db->set("jenis", $params->jenis);
		$this->db->set("status", 0);
		$this->db->set("ticket_number", $params->ticket_number);
		$this->db->set("base_fare", $params->base_fare);		
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('trans_passenger');	
		$passengerId = $this->db->insert_id();		
		
		return $passengerId;	
	}
	
	public function savePassengerCharge($params){

		$log = $this->session->all_userdata();
		$invoiceId = NULL;
		
		$this->db->set("id_invoice", $params->id_invoice);
		$this->db->set("id_passenger", $params->id_passenger);
		$this->db->set("id_item", $params->id_item);
		$this->db->set("nilai", $params->nilai);
		$this->db->set("status", 0);
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('trans_passengercharges');
		
		return $valid;	
	}
		
	public function resetPassenger($id){
		$valid = NULL;
		$this->db->where("id_invoice", $id);
		$valid = $this->db->delete("trans_passenger");
		return $valid;	
	}
	
	public function resetPassengerCharges($id){
		$valid = NULL;
		$this->db->where("id_invoice", $id);
		$valid = $this->db->delete("trans_passengercharges");
		return $valid;	
	}
	
	public function setTotalInvoice($id){
		$valid = false;
		
		$params = $this->db->get_where("trans_ticketinvoice", array("id_invoice" => $id))->row();
		
		$data = $this->db->query("select id_invoice, sum(base_fare) as total_basefare from trans_passenger where id_invoice=$params->id_invoice
						group by id_invoice")->row();
						
		$this->db->set("total_basefare", $data->total_basefare);
		//$this->db->set("total_komisi", $data->total_komisi);
		//$this->db->set("total_pajak", $data->total_pajak);
		//$this->db->set("total_sell_price", $data->total_sell_price);
		$this->db->where("id_invoice", $params->id_invoice);
		$valid = $this->db->update("trans_ticketinvoice");
		
		if($params->flight_type == "D") {
			$ds = $this->db->get_where("mst_vendorticket", array("id_vendor" => $params->id_vendor))->row();
			$sisaDeposit = $ds->deposit_value - $data->total_basefare;
			
			$this->db->set("deposit_value", $sisaDeposit);
			$this->db->where("id_vendor", $params->id_vendor);
			$valid = $this->db->update("mst_vendorticket");
		}
		return $valid;
		
	}
	
}
?>