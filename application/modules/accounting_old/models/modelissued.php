<?php
class modelIssued extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listDataBooking($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, format(a.total_biaya, 2) as total_trans, b.nomor_flight as flight_pergi, b.tanggal_flight as takeoff_pergi, w.nama_airlines as airlines_pergi,
									c.nomor_flight as flight_pulang, c.tanggal_flight as takeoff_pulang, z.nama_airlines as airlines_pulang,
									d.no_identitas, d.title, d.nama_lengkap, d.alamat_lengkap, d.telp1, d.telp2,
									d.email, concat(d.title,' ',d.nama_lengkap) as nama
									from trans_ticketbook a join trans_flight b on b.id_flight=a.id_flightpergi
									join mst_airlines w on w.id_airlines=b.id_airlines
									left join trans_flight c on c.id_flight=a.id_flightpulang
									left join mst_airlines z on z.id_airlines=c.id_airlines
									join mst_customer d on d.id_customer=a.id_customer where a.status=0 $searchBy order by a.id_booking desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalDataBooking($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, format(a.total_biaya, 2) as total_trans, b.nomor_flight as flight_pergi, b.tanggal_flight as takeoff_pergi, w.nama_airlines as airlines_pergi,
									c.nomor_flight as flight_pulang, c.tanggal_flight as takeoff_pulang, z.nama_airlines as airlines_pulang,
									d.no_identitas, d.title, d.nama_lengkap, d.alamat_lengkap, d.telp1, d.telp2,
									d.email, concat(d.title,' ',d.nama_lengkap) as nama
									from trans_ticketbook a join trans_flight b on b.id_flight=a.id_flightpergi
									join mst_airlines w on w.id_airlines=b.id_airlines
									left join trans_flight c on c.id_flight=a.id_flightpulang
									left join mst_airlines z on z.id_airlines=c.id_airlines
									join mst_customer d on d.id_customer=a.id_customer where a.status=0 $searchBy order by a.id_booking desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	
	public function listDataIssued($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, format(a.total_biaya, 2) as total_trans, b.nomor_flight as flight_pergi, b.tanggal_flight as takeoff_pergi, w.nama_airlines as airlines_pergi,
									c.nomor_flight as flight_pulang, c.tanggal_flight as takeoff_pulang, z.nama_airlines as airlines_pulang,
									d.no_identitas, d.title, d.nama_lengkap, d.alamat_lengkap, d.telp1, d.telp2,
									d.email, concat(d.title,' ',d.nama_lengkap) as nama,
									n.issued_date, n.keterangan as ket_issued, m.nama_lengkap as issued_name
									from trans_ticketbook a join trans_flight b on b.id_flight=a.id_flightpergi
									join mst_airlines w on w.id_airlines=b.id_airlines
									left join trans_flight c on c.id_flight=a.id_flightpulang
									left join mst_airlines z on z.id_airlines=c.id_airlines
									left join trans_ticketissued n on n.id_booking=a.id_booking
									left join mst_user m on m.id_user=n.issued_by
									join mst_customer d on d.id_customer=a.id_customer where a.status=1 $searchBy order by a.id_booking desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalDataIssued($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, format(a.total_biaya, 2) as total_trans, b.nomor_flight as flight_pergi, b.tanggal_flight as takeoff_pergi, w.nama_airlines as airlines_pergi,
									c.nomor_flight as flight_pulang, c.tanggal_flight as takeoff_pulang, z.nama_airlines as airlines_pulang,
									d.no_identitas, d.title, d.nama_lengkap, d.alamat_lengkap, d.telp1, d.telp2,
									d.email, concat(d.title,' ',d.nama_lengkap) as nama,
									n.issued_date, n.keterangan as ket_issued, m.nama_lengkap as issued_name
									from trans_ticketbook a join trans_flight b on b.id_flight=a.id_flightpergi
									join mst_airlines w on w.id_airlines=b.id_airlines
									left join trans_flight c on c.id_flight=a.id_flightpulang
									left join mst_airlines z on z.id_airlines=c.id_airlines
									left join trans_ticketissued n on n.id_booking=a.id_booking
									left join mst_user m on m.id_user=n.issued_by
									join mst_customer d on d.id_customer=a.id_customer where a.status=1 $searchBy order by a.id_booking desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$idBooking = 0;
		
		$issued_date = $params->date_issued." " . $params->jam_issued . ":". $params->menit_issued . ":00";
		
		$this->db->set("id_booking", $params->id_booking);
		$this->db->set("issued_date", $issued_date);
		$this->db->set("issued_by", $this->session->userdata('userId'));
		$this->db->set("keterangan", $params->keterangan);
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_issued", $params->id);
			$valid = $this->db->update("trans_ticketissued");
			$valid = $this->logUpdate->addLog("update", "trans_ticketissued", $params);
			$valid = $this->updateBooking($params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('trans_ticketissued');
			$valid = $this->logUpdate->addLog("insert", "trans_ticketissued", $params);
			$valid = $this->updateBooking($params);			
		}
		return $valid;		
	}
	
	private function updateBooking($params){
		$valid = false;
		$issued_date = $params->date_issued." " . $params->jam_issued . ":". $params->menit_issued . ":00";
		
		$this->db->set("tanggal_issued", $issued_date);
		$this->db->set("status", 1);// type : 0 = process, 1 = issued, 2 = invoiced, 3 = paid, 4 = refund 
		$this->db->where("id_booking", $params->id_booking);
		$valid = $this->db->update("trans_ticketbook");
		return $valid;
	}
	
	
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_customer", array("id_customer" => $id));	
		
		if ($valid){
			$this->db->where('id_customer', $id);
			$valid = $this->db->delete('mst_customer');
		}
		
		return $valid;		
	}
	
	public function getIssuedById($idBooking){
		$query = $this->db->query("select a.id_booking, a.booking_number, a.status, b.id_issued, b.issued_date, 
		b.issued_by, b.keterangan, date(b.issued_date) as date_issued, hour(b.issued_date) as jam_issued, minute(b.issued_date) as menit_issued 
		from trans_ticketbook a left join trans_ticketissued b on a.id_booking=b.id_booking where a.id_booking=$idBooking");
		return $query->row();
	}
	
}
?>