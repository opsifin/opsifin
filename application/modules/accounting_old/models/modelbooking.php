<?php
class modelBooking extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
		$this->load->model('modelHitungpolicy');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
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
	
	public function totalData($find = NULL, $by = NULL) {
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
	/*
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$idBooking = 0;
		
		$tanggal_booking = $params->date_booking ." " . $params->jam_booking . ":". $params->menitbooking . ":00" ;
		$total_biayapergi = ((float)$params->total_dewasa * (float)$params->hargapergi_dewasa) + ((float)$params->total_anak * (float)$params->hargapergi_anak) + ((float)$params->total_bayi * (float)$params->hargapergi_bayi);
		$total_biayapulang = ((float)$params->total_dewasa * (float)$params->hargapulang_dewasa) + ((float)$params->total_anak * (float)$params->hargapulang_anak) + ((float)$params->total_bayi * (float)$params->hargapulang_bayi);
		$total_biaya = $total_biayapergi + $total_biayapulang;
		
		
		$this->db->set("booking_number", $params->booking_number);
		$this->db->set("prn", $params->prn);
		$this->db->set("id_customer", $params->id_customer);
		$this->db->set("id_flightpergi", $params->id_flightpergi);
		$this->db->set("tanggal_booking", $tanggal_booking);
		$this->db->set("total_dewasa", $params->total_dewasa);
		$this->db->set("total_anak", $params->total_anak);
		$this->db->set("total_bayi", $params->total_bayi);
		$this->db->set("hargapergi_dewasa", $params->hargapergi_dewasa);
		$this->db->set("hargapergi_anak", $params->hargapergi_anak);
		$this->db->set("hargapergi_bayi", $params->hargapergi_bayi);
		$this->db->set("total_biayapergi", $total_biayapergi);
		$this->db->set("hargapulang_dewasa", $params->hargapulang_dewasa);
		$this->db->set("hargapulang_anak", $params->hargapulang_anak);
		$this->db->set("hargapulang_bayi", $params->hargapulang_bayi);
		$this->db->set("total_biayapulang", $total_biayapulang);
		$this->db->set("total_biaya", $total_biaya);
		$this->db->set("status", 0); // type : 0 = process, 1 = issued, 2 = invoiced, 3 = paid, 4 = refund 
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("tipe_flight", $params->tipe_flight);
		
		if (!empty($params->id_flightpulang)){
			$this->db->set("id_flightpulang", $params->id_flightpulang);		
			$this->db->set("pp", 1);
		}
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_booking", $params->id);
			$valid = $this->db->update("trans_ticketbook");
			$valid = $this->logUpdate->addLog("update", "trans_ticketbook", $params);
			$idBooking = $params->id;
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('trans_ticketbook');
			$idBooking = $this->db->insert_id();
			$valid = $this->logUpdate->addLog("insert", "trans_ticketbook", $params);			
		}
		return $idBooking;		
	}
	*/
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$idBooking = 0;
		
		$tanggal_booking = $params->date_booking ." " . $params->jam_booking . ":". $params->menitbooking . ":00" ;
		
		$this->db->set("booking_number", $params->booking_number);
		$this->db->set("prn", $params->prn);
		$this->db->set("id_customer", $params->id_customer);
		$this->db->set("id_flightpergi", $params->id_flightpergi);
		$this->db->set("tanggal_booking", $tanggal_booking);
		$this->db->set("total_dewasa", $params->total_dewasa);
		$this->db->set("total_anak", $params->total_anak);
		$this->db->set("total_bayi", $params->total_bayi);
		$this->db->set("id_airlines", $params->id_airlines);
		$this->db->set("ga	", $params->ga);
		$this->db->set("status", 0); // type : 0 = process, 1 = issued, 2 = invoiced, 3 = paid, 4 = refund 
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("tipe_flight", $params->tipe_flight);
		
		if (!empty($params->id_flightpulang)){
			$this->db->set("id_flightpulang", $params->id_flightpulang);		
			$this->db->set("pp", 1);
		}
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_booking", $params->id);
			$valid = $this->db->update("trans_ticketbook");
			$valid = $this->logUpdate->addLog("update", "trans_ticketbook", $params);
			$idBooking = $params->id;
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('trans_ticketbook');
			$idBooking = $this->db->insert_id();
			$valid = $this->logUpdate->addLog("insert", "trans_ticketbook", $params);			
		}
		return $idBooking;		
	}
	public function resetPassenger($id){
		$valid = false;
		$this->db->where('id_booking', $id);
		$valid = $this->db->delete('trans_passenger');
		return $valid;
	}
	
	public function savePassenger($paramsArr){
		$params = (object) $paramsArr;
		
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("id_booking", $params->id_booking);
		$this->db->set("title", $params->title);
		$this->db->set("nama_lengkap", $params->nama_lengkap);
		$this->db->set("no_identitas", $params->no_identitas);
		$this->db->set("jenis", $params->jenis);
		$this->db->set("telp", $params->telp);
		$this->db->set("harga_tiket", $params->harga_tiket);
		$this->db->set("harga_nta", $params->harga_nta);
		$this->db->set("status", 1);		
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('trans_passenger');
		$idPassenger = $this->db->insert_id();
		$valid = $this->logUpdate->addLog("insert", "trans_passenger", $params);
		$valid = $this->setMarkupPassenger($params->id_booking, $idPassenger);
		
	}
	
	public function setTotal($idBooking){
		$log = $this->session->all_userdata();
		$valid = false;
		$totalBiaya = $this->db->query("select count(*) as total_passenger, sum(harga_nta) as publish_rate from trans_passenger where id_booking=$idBooking group by id_booking")->row();
		$this->db->set("total_biaya", $totalBiaya->publish_rate);
		$this->db->set("total_passenger", $totalBiaya->total_passenger);
		$this->db->where("id_booking", $idBooking);
		$valid = $this->db->update("trans_ticketbook");
		return $valid;
	}
	
	private function setMarkupPassenger($idBooking, $idPassenger){
		$markUp = $this->modelHitungpolicy->HitungMarkup($idBooking, $idPassenger);
		
		$this->db->set("harga_markup", round($markUp,0));
		$this->db->where(array("id_booking"=>$idBooking, "id_passenger"=>$idPassenger));
		$this->db->update("trans_passenger");	
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "trans_ticketbook", array("id_booking" => $id));	
		
		if ($valid){
			$this->db->where('id_booking', $id);
			$valid = $this->db->delete('trans_ticketbook');
			
			$this->db->where('id_booking', $id);
			$valid = $this->db->delete('trans_passenger');
		}
		
		return $valid;		
	}
	
	public function getBookingById($idBooking){
		$query = $this->db->query("select a.*, date(a.tanggal_booking) as date_booking, hour(a.tanggal_booking) as jam_booking, minute(a.tanggal_booking) as menit_booking, format(a.total_biaya, 2) as total_trans, 
								b.id_flight as id_flightpergi, b.nomor_flight as flight_pergi, b.tanggal_flight as takeoff_pergi, w.nama_airlines as airlines_pergi, 
								concat(w.nama_airlines,' (', b.nomor_flight,')') as nomor_flightpergi, 
								concat(f.inisial,' ', f.nama_airport, ' --> ', g.inisial,' ', g.nama_airport) as nama_flightpergi, 
								c.id_flight as id_flightpulang, c.nomor_flight as flight_pulang, c.tanggal_flight as takeoff_pulang, z.nama_airlines as airlines_pulang,
								concat(z.nama_airlines,' (', c.nomor_flight,')') as nomor_flightpulang, 
								concat(h.inisial,' ', h.nama_airport, ' --> ', i.inisial,' ', i.nama_airport) as nama_flightpulang,
								d.no_identitas, d.title, d.nama_lengkap, d.alamat_lengkap, d.telp1, d.telp2,
								d.email, concat(d.title,' ',d.nama_lengkap) as nama
								from trans_ticketbook a join trans_flight b on b.id_flight=a.id_flightpergi
								join mst_airlines w on w.id_airlines=b.id_airlines
								join mst_airport f on f.id_airport=b.dari_airport
								join mst_airport g on g.id_airport=b.tujuan_airport
								left join trans_flight c on c.id_flight=a.id_flightpulang
								left join mst_airlines z on z.id_airlines=c.id_airlines
								left join mst_airport h on h.id_airport=c.dari_airport
								left join mst_airport i on i.id_airport=c.tujuan_airport
								join mst_customer d on d.id_customer=a.id_customer where a.id_booking=$idBooking");
			return $query->row();
	}
	
}
?>