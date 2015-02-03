<?php
class modelInvoicePrint extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
		$this->load->model('main/modelNumbertrans');
	}
	
		
	public function listDataToPrint($idCustomer, $startDate, $endDate){	
	
		$searchBy= "where a.id_customer=$idCustomer and a.printed=0";	
		
		if (!empty($startDate)) 
			$searchBy.= " and invoice_date>='$startDate' and invoice_date<='$endDate'";
				
		$query = $this->db->query("select a.*, format(a.base_fare, 2) as base, format(a.komisi, 2) as komi, format(a.pajak, 2) as paja, format(a.sell_price, 2) as sell, 
									b.nama_vendor, c.nama_airlines, d.nama_jenis, f.nama_lengkap, sum(g.besarnya) as terbayar, format(sum(g.besarnya), 2) as payed
									from trans_ticketinvoice a 
									join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_airlines c on c.id_airlines=a.id_airlines
									join mst_jenisvendor d on d.id_jenis=b.id_jenis
									join mst_customer f on f.id_customer=a.id_customer
									left join trans_ticketpayment g on a.id_invoice=g.id_invoice $searchBy
									group by a.id_invoice order by a.id_invoice desc");
									
		$result = $query->result();
		
		return $result;	
	}
	
	public function listDataHasPrint($idCustomer, $startDate, $endDate){	
	
		$searchBy= "and a.id_customer=$idCustomer and a.printed=1";	
		
		if (!empty($startDate)) 
			$searchBy.= " and invoice_date>='$startDate' and invoice_date<='$endDate'";
				
		$query = $this->db->query("select a.*, format(a.base_fare, 2) as base, format(a.komisi, 2) as komi, format(a.pajak, 2) as paja, format(a.sell_price, 2) as sell, 
									b.nama_vendor, c.nama_airlines, d.nama_jenis, f.nama_lengkap, sum(g.besarnya) as terbayar, format(sum(g.besarnya), 2) as payed, 
									h.print_date, h.status
									from trans_ticketinvoice a 
									join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_airlines c on c.id_airlines=a.id_airlines
									join mst_jenisvendor d on d.id_jenis=b.id_jenis
									join mst_customer f on f.id_customer=a.id_customer
									left join trans_ticketpayment g on a.id_invoice=g.id_invoice 
									join trans_invoiceprint h on h.id_invoice=a.id_invoice
									where h.transaction='ticket'
									$searchBy
									group by a.id_invoice order by a.id_invoice desc");
									
		$result = $query->result();
		
		return $result;	
	}
	
	public function setPrintInvoice($id){
		$valid = false;
		$query = $this->db->query("insert into trans_invoiceprint (`id_customer`,`id_invoice`,`invoice_number`,`status`,`transaction`,`print_date`,`add_date`,`add_user`)
			select id_customer, id_invoice, invoice_number, 1 as status, 'ticket' as transaction, 
			'".date("Y-m-d H:i:s")."' as print_date, '".date("Y-m-d H:i:s")."' as add_date, ".$this->session->userdata('userId')." as add_user
			from trans_ticketinvoice where id_invoice in ($id)");
		
		if ($query) {
			$query = $this->db->query("update trans_ticketinvoice set printed=1, printed_by=".$this->session->userdata('userId')." where id_invoice in ($id)");
			
			if ($query)
				$valid = true;
		}
		
		return $valid;
	}
	
	public function getInvoiceById($idInvoice) {
		$data = $this->db->query("select a.*, b.nama_vendor, c.nama_lengkap, c.alamat_lengkap, c.telp1, c.email, c.no_identitas,
									d.inisial, d.nama_airport
									from trans_ticketinvoice a join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_customer c on c.id_customer=a.id_customer
									join mst_airport d on d.id_airport=a.id_airport where a.id_invoice=$idInvoice")->row();
		return $data;						
	}
	
	public function getPassengerById($idInvoice) {
		$data = $this->db->query("select * from trans_passenger where id_invoice=$idInvoice")->result();
		return $data;						
	}
	
	public function getSevInvoiceById($idInvoice) {
		$data = $this->db->query("select * from trans_ticketinvoice where id_invoice in ($idInvoice)")->result();
		return $data;						
	}
	
	public function getInvoiceByNumber($number) {
		$data = $this->db->query("select a.*, b.nama_vendor, c.nama_lengkap, d.inisial, d.nama_airport
									from trans_ticketinvoice a join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_customer c on c.id_customer=a.id_customer
									join mst_airport d on d.id_airport=a.id_airport where a.invoice_number='$number'	")->row();
		return $data;						
	}
	
}
?>