<?php
class modelCountry extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_country $searchBy order by nama_country asc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_country $searchBy order by nama_country asc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
				
		$this->db->set("kode_country", $params->kode_country);
		$this->db->set("nama_country", $params->nama_country);
		$this->db->set("currency", $params->currency);
				
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_country", $params->id);
			$valid = $this->db->update("mst_country");
			$valid = $this->logUpdate->addLog("update", "mst_country", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_country');
			$valid = $this->logUpdate->addLog("insert", "mst_country", $params);
		}
		return $valid;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_country", array("id_country" => $id));	
		
		if ($valid){
			$this->db->where('id_country', $id);
			$valid = $this->db->delete('mst_country');
		}
		
		return $valid;		
	}
	
}
?>