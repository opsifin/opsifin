<?php
class modelFlight extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_airlines, b.logo, 
									c.inisial as inisialfrom, c.nama_airport as airportfrom, c.kota as kotafrom, y.nama_country as negarafrom,
									d.inisial as inisialto, d.nama_airport as airportto, d.kota as kotato, x.nama_country as negarato
									from trans_flight a join mst_airlines b on a.id_airlines=b.id_airlines
									join mst_airport c on c.id_airport=a.dari_airport
									join mst_airport d on d.id_airport=a.tujuan_airport
									join mst_country y on y.id_country=c.id_country
									join mst_country x on x.id_country=d.id_country
									$searchBy order by a.id_flight desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_airlines, b.logo, 
									c.inisial as inisialfrom, c.nama_airport as airportfrom, c.kota as kotafrom, y.nama_country as negarafrom,
									d.inisial as inisialto, d.nama_airport as airportto, d.kota as kotato, x.nama_country as negarato
									from trans_flight a join mst_airlines b on a.id_airlines=b.id_airlines
									join mst_airport c on c.id_airport=a.dari_airport
									join mst_airport d on d.id_airport=a.tujuan_airport
									join mst_country y on y.id_country=c.id_country
									join mst_country x on x.id_country=d.id_country
									$searchBy order by a.id_flight desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	
	public function listDataFind($limit, $start, $from = NULL, $to = NULL, $tanggal = NULL){	
		$byAirpot = "";	
		$byDate = "";	
		
		if (!empty($from)) 
			$byAirpot = "and a.dari_airport=$from and a.tujuan_airport=$to";
		
		if (!empty($tanggal)) 
			$byDate = "and date(a.tanggal_flight)='$tanggal'";
				
		$query = $this->db->query("select a.*, b.nama_airlines, b.logo, 
									c.inisial as inisialfrom, c.nama_airport as airportfrom, c.kota as kotafrom, y.nama_country as negarafrom,
									d.inisial as inisialto, d.nama_airport as airportto, d.kota as kotato, x.nama_country as negarato
									from trans_flight a join mst_airlines b on a.id_airlines=b.id_airlines
									join mst_airport c on c.id_airport=a.dari_airport
									join mst_airport d on d.id_airport=a.tujuan_airport
									join mst_country y on y.id_country=c.id_country
									join mst_country x on x.id_country=d.id_country
									$byAirpot $byDate order by a.tanggal_flight desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalDataFind($from = NULL, $to = NULL, $tanggal = NULL) {
		$byAirpot = "";	
		$byDate = "";	
		
		if (!empty($from)) 
			$byAirpot = "and a.dari_airport=$from and a.tujuan_airport=$to";
		
		if (!empty($tanggal)) 
			$byDate = "and date(a.tanggal_flight)='$tanggal'";
				
		$query = $this->db->query("select a.*, b.nama_airlines, b.logo, 
									c.inisial as inisialfrom, c.nama_airport as airportfrom, c.kota as kotafrom, y.nama_country as negarafrom,
									d.inisial as inisialto, d.nama_airport as airportto, d.kota as kotato, x.nama_country as negarato
									from trans_flight a join mst_airlines b on a.id_airlines=b.id_airlines
									join mst_airport c on c.id_airport=a.dari_airport
									join mst_airport d on d.id_airport=a.tujuan_airport
									join mst_country y on y.id_country=c.id_country
									join mst_country x on x.id_country=d.id_country
									$byAirpot $byDate order by a.tanggal_flight desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$tanggalFlight = $params->date_flight." ".$params->jam_flight.":".$params->menit_flight.":00";
		$tanggalArrive = $params->date_arrive." ".$params->jam_arrive.":".$params->menit_arrive.":00";
		
		$this->db->set("id_airlines", $params->id_airlines);
		$this->db->set("nomor_flight", $params->nomor_flight);
		$this->db->set("tanggal_flight", $tanggalFlight);
		$this->db->set("tanggal_arrive", $tanggalArrive);
		$this->db->set("dari_airport", $params->dari_airport);
		$this->db->set("tujuan_airport", $params->tujuan_airport);
		$this->db->set("status", 0);
		//$this->db->set("qty_stock", $params->qty_stock);
		$this->db->set("keterangan", $params->keterangan);
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_flight", $params->id);
			$valid = $this->db->update("trans_flight");
			$valid = $this->logUpdate->addLog("update", "trans_flight", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('trans_flight');
			$valid = $this->logUpdate->addLog("insert", "trans_flight", $params);
		}
		return $valid;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "trans_flight", array("id_flight" => $id));	
		
		if ($valid){
			$this->db->where('id_flight', $id);
			$valid = $this->db->delete('trans_flight');
		}
		
		return $valid;		
	}
	
	public function getById($id){
		$query = $this->db->query("select *, 
								date(tanggal_flight) as date_flight, hour(tanggal_flight) as jam_flight, minute(tanggal_flight) as menit_flight,
								date(tanggal_arrive) as date_arrive, hour(tanggal_arrive) as jam_arrive, minute(tanggal_arrive) as menit_arrive 
								from trans_flight where id_flight=$id");
		return $query->row();
	}
	
}
?>