<?php
class modelTopup extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
		$this->load->model('main/modelNumbertrans');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, format(a.deposit_value, 2) as deposit, b.nama_jenis from mst_vendorticket a join mst_jenisvendor b on a.id_jenis=b.id_jenis $searchBy order by a.id_vendor desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select *, format(deposit_value, 2) as deposit from mst_vendorticket $searchBy order by id_vendor desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$data = $this->db->get_where("mst_vendorticket", array("id_vendor" => $params->id_vendor))->row();
		$deposit = $data->deposit_value + $params->nilai_topup;
		$this->db->set("deposit_value", $deposit);
		$this->db->set("last_topup", $params->tanggal_topup);
		$this->db->where("id_vendor", $params->id_vendor);
		$valid = $this->db->update("mst_vendorticket");
		$valid = $this->saveTopup($params);		
		return $valid;		
	}
	
	private function saveTopup($params){
		$valid = false;
		$this->db->set("dp_number", $params->dp_number);
		$this->db->set("transc_number", $params->transc_number);
		$this->db->set("id_group", $this->session->userdata('userGroup'));
		$this->db->set("id_vendor", $params->id_vendor);		
		$this->db->set("nilai_topup", $params->nilai_topup);
		$this->db->set("currency", $params->currency);
		$this->db->set("tanggal_topup", $params->tanggal_topup);		
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("posting_status", 0);
		$this->db->set("jenis_topup", 1); // 1 = manual, 2 = topup dari refund		
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('trans_topupticket');
		$valid = $this->logUpdate->addLog("insert", "trans_topupticket", $params);
		$updateNumber = $this->modelNumbertrans->updateDPNumber();
		return $valid;
	}	
	
	public function listTopup($limit, $start, $id_vendor = NULL){	
		$searchBy = "";	
		
		if (!empty($id_airlines)) 
			$searchBy = "WHERE a.id_vendor=$id_vendor";
				
		$query = $this->db->query("select a.*, format(a.nilai_topup, 2) as topup_value, b.nama_vendor from trans_topupticket a join mst_vendorticket b on a.id_vendor=b.id_vendor $searchBy order by a.id_vendor, a.tanggal_topup desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalTopup($id_vendor = NULL) {
		$searchBy = "";	
		
		if (!empty($id_airlines)) 
			$searchBy = "WHERE a.id_vendor=$id_vendor";
				
		$query = $this->db->query("select a.*, format(a.nilai_topup, 2) as topup_value, b.nama_vendor from trans_topupticket a join mst_vendorticket b on a.id_vendor=b.id_vendor $searchBy order by a.id_vendor, a.tanggal_topup desc");
		$result = $query->num_rows();
		return $result;	
	}

}
?>