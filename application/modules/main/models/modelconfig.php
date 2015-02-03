<?php
class modelConfig extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("tahun_anggaran", $params->tahun_anggaran);
		
		if (!empty($params->id)) {
			$this->db->where("id", $params->id);
			$valid = $this->db->update("mst_conf");
			$valid = $this->logUpdate->addLog("update", "mst_conf", $params);
		}
		else {
			$valid = $this->db->insert('mst_conf');
			$valid = $this->logUpdate->addLog("insert", "mst_conf", $params);
		}
		return $valid;		
	}
}
?>