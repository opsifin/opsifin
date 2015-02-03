<?php
class modelCity extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_country, b.kode_country from mst_city a join mst_country b on a.id_country=b.id_country $searchBy order by b.nama_country asc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_country, b.kode_country from mst_city a join mst_country b on a.id_country=b.id_country $searchBy order by b.nama_country asc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
				
		$this->db->set("id_country", $params->id_country);
		$this->db->set("nama_city", $params->nama_city);
		$this->db->set("keterangan", $params->keterangan);
				
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_city", $params->id);
			$valid = $this->db->update("mst_city");
			$valid = $this->logUpdate->addLog("update", "mst_city", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_city');
			$valid = $this->logUpdate->addLog("insert", "mst_city", $params);
		}
		return $valid;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_city", array("id_city" => $id));	
		
		if ($valid){
			$this->db->where('id_city', $id);
			$valid = $this->db->delete('mst_city');
		}
		
		return $valid;		
	}
	
}
?>