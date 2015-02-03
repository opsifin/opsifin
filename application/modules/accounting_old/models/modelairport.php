<?php
class modelAirport extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_country, b.kode_country from mst_airport a join mst_country b on a.id_country=b.id_country $searchBy order by b.nama_country asc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_country, b.kode_country from mst_airport a join mst_country b on a.id_country=b.id_country $searchBy order by b.nama_country asc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("inisial", $params->inisial);
		$this->db->set("nama_airport", $params->nama_airport);
		$this->db->set("kota", $params->kota);
		$this->db->set("id_country", $params->id_country);
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("status", 1);
				
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_airport", $params->id);
			$valid = $this->db->update("mst_airport");
			$valid = $this->logUpdate->addLog("update", "mst_airport", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_airport');
			$valid = $this->logUpdate->addLog("insert", "mst_airport", $params);
		}
		return $valid;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_airport", array("id_airport" => $id));	
		
		if ($valid){
			$this->db->where('id_airport', $id);
			$valid = $this->db->delete('mst_airport');
		}
		
		return $valid;		
	}
	
}
?>