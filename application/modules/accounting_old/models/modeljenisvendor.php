<?php
class modelJenisvendor extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_jenisvendor order by id_jenis desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_jenisvendor order by id_jenis desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$direct_airlines = 0;
		if(isset($params->direct_airlines))
			$direct_airlines = 1;
		
		$this->db->set("nama_jenis", $params->nama_jenis);
		$this->db->set("type", $params->type);
		$this->db->set("direct_airlines", $direct_airlines);
		$this->db->set("keterangan", $params->keterangan);
				
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_jenis", $params->id);
			$valid = $this->db->update("mst_jenisvendor");
			$valid = $this->logUpdate->addLog("update", "mst_jenisvendor", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_jenisvendor');
			$valid = $this->logUpdate->addLog("insert", "mst_jenisvendor", $params);
		}
		return $valid;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_jenisvendor", array("id_jenis" => $id));	
		
		if ($valid){
			$this->db->where('id_jenis', $id);
			$valid = $this->db->delete('mst_jenisvendor');
		}
		
		return $valid;		
	}
	
}
?>