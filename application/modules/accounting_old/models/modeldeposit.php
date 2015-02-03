<?php
class modelDeposit extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select *, format(deposit_value, 2) as deposit from mst_airlines $searchBy order by id_airlines desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select *, format(deposit_value, 2) as deposit from mst_airlines $searchBy order by id_airlines desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$data = $this->db->get_where("mst_airlines", array("id_airlines" => $params->id_airlines))->row();
		$deposit = $data->deposit_value + $params->nilai_topup;
		$this->db->set("deposit_value", $deposit);
		$this->db->set("last_topup", $params->tanggal_topup);
		$this->db->where("id_airlines", $params->id_airlines);
		$valid = $this->db->update("mst_airlines");
		$valid = $this->saveTopup($params);
		return $valid;		
	}
	
	private function saveTopup($params){
		$valid = false;
		$this->db->set("id_airlines", $params->id_airlines);
		$this->db->set("nilai_topup", $params->nilai_topup);
		$this->db->set("currency", $params->currency);
		$this->db->set("tanggal_topup", $params->tanggal_topup);		
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("posting_status", 0);		
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('trans_topupticket');
		$valid = $this->logUpdate->addLog("insert", "trans_topupticket", $params);
		return $valid;
	}	
	
	public function listTopup($limit, $start, $id_airlines = NULL){	
		$searchBy = "";	
		
		if (!empty($id_airlines)) 
			$searchBy = "WHERE a.id_airlines=$id_airlines";
				
		$query = $this->db->query("select a.*, format(a.nilai_topup, 2) as topup_value, b.nama_airlines from trans_topupticket a join mst_airlines b on a.id_airlines=b.id_airlines $searchBy order by a.id_airlines, a.tanggal_topup desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalTopup($id_airlines = NULL) {
		$searchBy = "";	
		
		if (!empty($id_airlines)) 
			$searchBy = "WHERE a.id_airlines=$id_airlines";
				
		$query = $this->db->query("select a.*, format(a.nilai_topup, 2) as topup_value, b.nama_airlines from trans_topupticket a join mst_airlines b on a.id_airlines=b.id_airlines $searchBy order by a.id_airlines, a.tanggal_topup desc");
		$result = $query->num_rows();
		return $result;	
	}

}
?>