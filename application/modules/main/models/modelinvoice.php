<?php
class modelInvoice extends CI_Model {
	
	var $db2;
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
		$this->load->model('main/modelNumbertrans');		
		$this->db2 = $this->load->database('opsimid', TRUE);
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db2->query("select a.*, format(a.base_fare, 2) as base, format(a.komisi, 2) as komi, format(a.pajak, 2) as paja, format(a.sell_price, 2) as sell, 
									b.nama_vendor, c.nama_airlines, d.nama_jenis, count(e.id_passenger) as jumlah_passenger, f.nama_lengkap
									from trans_ticketinvoice a 
									join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_airlines c on c.id_airlines=a.id_airlines
									join mst_jenisvendor d on d.id_jenis=b.id_jenis
									join trans_passenger e on e.id_invoice=a.id_invoice 
									join mst_customer f on f.id_customer=a.id_customer
									where 1=1  and a.status=0
									group by a.id_invoice $searchBy order by a.id_invoice desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db2->query("select a.*, b.nama_vendor, c.nama_airlines, d.nama_jenis, count(e.id_passenger) as jumlah_passenger 
									from trans_ticketinvoice a 
									join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_airlines c on c.id_airlines=a.id_airlines
									join mst_jenisvendor d on d.id_jenis=b.id_jenis
									join trans_passenger e on e.id_invoice=a.id_invoice where 1=1 and a.status=0
									group by a.id_invoice $searchBy order by a.id_invoice desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function getInvoiceById($idInvoice) {
		$data = $this->db2->query("select a.*, b.nama_vendor, c.nama_lengkap, d.inisial, d.nama_airport
									from trans_ticketinvoice a join mst_vendorticket b on a.id_vendor=b.id_vendor
									join mst_customer c on c.id_customer=a.id_customer
									join mst_airport d on d.id_airport=a.id_airport where a.id_invoice=$idInvoice")->row();
		return $data;						
	}
	
	
}
?>