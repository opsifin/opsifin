<?php
class modelAirlines extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select *, format(pricing_policy, 2) as policy from mst_airlines $searchBy order by id_airlines desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select *, format(pricing_policy, 2) as policy from mst_airlines $searchBy order by id_airlines desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params, $logo)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("nama_airlines", $params->nama_airlines);
		$this->db->set("alamat", $params->alamat);
		$this->db->set("kontak_person", $params->kontak_person);
		$this->db->set("telp", $params->telp);		
		$this->db->set("email", $params->email);
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("number_code", $params->number_code);
		//$this->db->set("total_itemcharge", $params->total_itemcharge);
		$this->db->set("status", 1);
		
		if (!empty($logo))
			$this->db->set("logo", $logo);
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_airlines", $params->id);
			$valid = $this->db->update("mst_airlines");
			$valid = $this->logUpdate->addLog("update", "mst_airlines", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_airlines');
			$valid = $this->logUpdate->addLog("insert", "mst_airlines", $params);
		}
		return $valid;		
	}
	
	public function savePolicy($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("currency", $params->currency);
		$this->db->set("pricing_policy", $params->pricing_policy);
		$this->db->where("id_airlines", $params->id);
		$valid = $this->db->update("mst_airlines");
	
		return $valid;		
	}
	
	public function resetItems($id){
		$valid = false;
		$this->db->where('id_airlines', $id);
		$valid = $this->db->delete('mst_airlinescharges');
		return $valid;
	}
	
	public function saveCharges($paramsArr){
		$params = (object) $paramsArr;
		
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("id_airlines", $params->id_airlines);
		$this->db->set("id_item", $params->id_item);
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("status", 1);		
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('mst_airlinescharges');
		$valid = $this->logUpdate->addLog("insert", "mst_airlinescharges", $params);
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_airlines", array("id_airlines" => $id));	
		
		if ($valid){
			$this->db->where('id_airlines', $id);
			$valid = $this->db->delete('mst_airlines');
		}
		
		return $valid;		
	}
	
}
?>