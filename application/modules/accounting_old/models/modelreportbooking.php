<?php
class modelreportBooking extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listDataCustomer($limit, $start, $idCustomer = NULL, $date1 = NULL, $date2 = NULL){	
		$byCustomer = "";	
		$byDate = "";
		
		if (!empty($idCustomer)) 
			$byCustomer = "and a.id_customer=$idCustomer";
			
		if (!empty($date1) and !empty($date2))
			$byDate = "and date(a.tanggal_booking) >='$date1' and date(a.tanggal_booking) <='$date2'";
		elseif (!empty($date1) and empty($date2))
			$byDate = "and date(a.tanggal_booking) >='$date1'";
		elseif (empty($date1) and !empty($date2))
			$byDate = "and date(a.tanggal_booking) <='$date2'";
				
		$query = $this->db->query("select a.*, format(a.total_biaya, 2) as total_trans, b.nomor_flight as flight_pergi, b.tanggal_flight as takeoff_pergi, w.nama_airlines as airlines_pergi,
									c.nomor_flight as flight_pulang, c.tanggal_flight as takeoff_pulang, z.nama_airlines as airlines_pulang,
									d.no_identitas, d.title, d.nama_lengkap, d.alamat_lengkap, d.telp1, d.telp2,
									d.email, concat(d.title,' ',d.nama_lengkap) as nama
									from trans_ticketbook a join trans_flight b on b.id_flight=a.id_flightpergi
									join mst_airlines w on w.id_airlines=b.id_airlines
									left join trans_flight c on c.id_flight=a.id_flightpulang
									left join mst_airlines z on z.id_airlines=c.id_airlines
									join mst_customer d on d.id_customer=a.id_customer where a.status=0 $byCustomer $byDate order by a.id_booking desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalDataCustomer($idCustomer = NULL, $date1 = NULL, $date2 = NULL) {
		$byCustomer = "";	
		$byDate = "";
		
		if (!empty($idCustomer)) 
			$byCustomer = "and a.id_customer=$idCustomer";
			
		if (!empty($date1) and !empty($date2))
			$byDate = "and date(a.tanggal_booking) >='$date1' and date(a.tanggal_booking) <='$date2'";
		elseif (!empty($date1) and empty($date2))
			$byDate = "and date(a.tanggal_booking) >='$date1'";
		elseif (empty($date1) and !empty($date2))
			$byDate = "and date(a.tanggal_booking) <='$date2'";
				
		$query = $this->db->query("select a.*, format(a.total_biaya, 2) as total_trans, b.nomor_flight as flight_pergi, b.tanggal_flight as takeoff_pergi, w.nama_airlines as airlines_pergi,
									c.nomor_flight as flight_pulang, c.tanggal_flight as takeoff_pulang, z.nama_airlines as airlines_pulang,
									d.no_identitas, d.title, d.nama_lengkap, d.alamat_lengkap, d.telp1, d.telp2,
									d.email, concat(d.title,' ',d.nama_lengkap) as nama
									from trans_ticketbook a join trans_flight b on b.id_flight=a.id_flightpergi
									join mst_airlines w on w.id_airlines=b.id_airlines
									left join trans_flight c on c.id_flight=a.id_flightpulang
									left join mst_airlines z on z.id_airlines=c.id_airlines
									join mst_customer d on d.id_customer=a.id_customer where a.status=0 $byCustomer $byDate order by a.id_booking desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function listDataAirlines($limit, $start, $idAirlines = NULL, $date1 = NULL, $date2 = NULL){	
		$byAirlines = "";	
		$byDate = "";
		
		if (!empty($idAirlines)) 
			$byAirlines = "and a.id_airlines=$idAirlines";
			
		if (!empty($date1) and !empty($date2))
			$byDate = "and date(a.tgl_booking) >='$date1' and date(a.tgl_booking) <='$date2'";
		elseif (!empty($date1) and empty($date2))
			$byDate = "and date(a.tgl_booking) >='$date1'";
		elseif (empty($date1) and !empty($date2))
			$byDate = "and date(a.tgl_booking) <='$date2'";
				
		$query = $this->db->query("select a.id_airlines, a.nama_airlines, a.nomor_flight, a.logo, format(sum(a.biaya), 2) as biaya, a.tgl_booking   from (
									(select a.id_airlines, d.nama_airlines, d.logo, a.nomor_flight, date(b.tanggal_booking) as tgl_booking, b.booking_number, b.prn, 
									b.id_booking, 'pergi' as go, b.status,
									b.total_biayapergi as biaya, format(b.total_biayapergi, 2) as besar_biaya, concat(c.title, ' ', c.nama_lengkap) as customer
									from trans_flight a join trans_ticketbook b on a.id_flight=b.id_flightpergi
									join mst_customer c on c.id_customer=b.id_customer
									join mst_airlines d on d.id_airlines=a.id_airlines
									)
									union
									(select a.id_airlines, d.nama_airlines, d.logo, a.nomor_flight, date(b.tanggal_booking) as tgl_booking, b.booking_number, b.prn, 
									b.id_booking, 'pulang' as go, b.status,
									b.total_biayapergi as biaya, format(b.total_biayapergi, 2) as besar_biaya, concat(c.title, ' ', c.nama_lengkap) as customer
									from trans_flight a join trans_ticketbook b on a.id_flight=b.id_flightpulang
									join mst_customer c on c.id_customer=b.id_customer
									join mst_airlines d on d.id_airlines=a.id_airlines)
									) a where a.status = 0 $byAirlines $byDate group by a.id_airlines, a.nomor_flight, a.tgl_booking order by a.id_airlines, a.tgl_booking desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalDataAirlines($idAirlines = NULL, $date1 = NULL, $date2 = NULL) {
		$byAirlines = "";	
		$byDate = "";
		
		if (!empty($idAirlines)) 
			$byAirlines = "and a.id_airlines=$idAirlines";
			
		if (!empty($date1) and !empty($date2))
			$byDate = "and date(a.tgl_booking) >='$date1' and date(a.tgl_booking) <='$date2'";
		elseif (!empty($date1) and empty($date2))
			$byDate = "and date(a.tgl_booking) >='$date1'";
		elseif (empty($date1) and !empty($date2))
			$byDate = "and date(a.tgl_booking) <='$date2'";
				
		$query = $this->db->query("select a.id_airlines, a.nama_airlines, a.nomor_flight, format(sum(a.biaya), 2) as biaya, a.tgl_booking   from (
									(select a.id_airlines, d.nama_airlines, a.nomor_flight, date(b.tanggal_booking) as tgl_booking, b.booking_number, b.prn, 
									b.id_booking, 'pergi' as go, b.status,
									b.total_biayapergi as biaya, format(b.total_biayapergi, 2) as besar_biaya, concat(c.title, ' ', c.nama_lengkap) as customer
									from trans_flight a join trans_ticketbook b on a.id_flight=b.id_flightpergi
									join mst_customer c on c.id_customer=b.id_customer
									join mst_airlines d on d.id_airlines=a.id_airlines
									)
									union
									(select a.id_airlines, d.nama_airlines, a.nomor_flight, date(b.tanggal_booking) as tgl_booking, b.booking_number, b.prn, 
									b.id_booking, 'pulang' as go, b.status,
									b.total_biayapergi as biaya, format(b.total_biayapergi, 2) as besar_biaya, concat(c.title, ' ', c.nama_lengkap) as customer
									from trans_flight a join trans_ticketbook b on a.id_flight=b.id_flightpulang
									join mst_customer c on c.id_customer=b.id_customer
									join mst_airlines d on d.id_airlines=a.id_airlines)
									) a where a.status = 0 $byAirlines $byDate group by a.id_airlines, a.nomor_flight, a.tgl_booking order by a.id_airlines, a.tgl_booking desc");
		$result = $query->num_rows();
		return $result;	
	}
	
}
?>