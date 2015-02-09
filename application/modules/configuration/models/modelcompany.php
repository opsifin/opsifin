<?php
class modelCompany extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}	
	
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("nama_company", $params->nama_company);
		$this->db->set("alamat", $params->alamat);
		$this->db->set("kode_pos", $params->kode_pos);
		$this->db->set("kota", $params->kota);
		$this->db->set("negara", $params->negara);
		$this->db->set("phone", $params->phone);
		$this->db->set("email", $params->email);
		$this->db->set("status", 1);
		$this->db->set("currency", $params->currency);
		
		if (!empty($params->id)) {
			$this->db->where("id_company", $params->id);
			$valid = $this->db->update("mst_company");
			$valid = $this->logUpdate->addLog("update", "mst_company", $params);
		}
		else {
			$valid = $this->db->insert('mst_company');
			$valid = $this->logUpdate->addLog("insert", "mst_company", $params);
		}
		return $valid;		
	}
}
?>