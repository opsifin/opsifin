<?php
class modelTicket extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.kode_vendor, b.nama_vendor, c.nama_jenis
								   from trans_ticketstock a join mst_vendorticket b on a.id_vendor=b.id_vendor
								   join mst_jenisvendor c on b.id_jenis=c.id_jenis
								   where 1=1 $searchBy order by a.id_stock desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.kode_vendor, b.nama_vendor, c.nama_jenis
								   from trans_ticketstock a join mst_vendorticket b on a.id_vendor=b.id_vendor
								   join mst_jenisvendor c on b.id_jenis=c.id_jenis
								   where 1=1 $searchBy order by a.id_stock desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function saveHeader($params, $jumlahTicket)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("id_vendor", $params->id_vendor);
		$this->db->set("id_group", $this->session->userdata('userGroup'));
		$this->db->set("prefix", $params->prefix);
		$this->db->set("mulai", $params->mulai);
		$this->db->set("hingga", $params->hingga);
		$this->db->set("total_ticket", $jumlahTicket);
		$this->db->set("tanggal_stock", $params->tanggal_stock);
		$this->db->set("status", 1);
		//$this->db->set("keterangan", $params->keterangan);
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_stock", $params->id);
			$valid = $this->db->update("trans_ticketstock");
			$valid = $this->logUpdate->addLog("update", "trans_ticketstock", $params);
			$idStock = $params->id;
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('trans_ticketstock');
			$idStock = $this->db->insert_id();	
			$valid = $this->logUpdate->addLog("insert", "trans_ticketstock", $params);
		}
		return $idStock;		
	}
	
	public function saveDetail($params) {
		$this->db->set("id_stock", $params->id_stock);
		$this->db->set("no_ticket", $params->no_ticket);
		$this->db->set("status", 0);
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('trans_ticketstockdetail');
		return $valid;
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "trans_ticketstock", array("id_stock" => $id));	
		
		if ($valid){
			$this->db->where('id_stock', $id);
			$valid = $this->db->delete('trans_ticketstock');
			
			$this->db->where('id_stock', $id);
			$valid = $this->db->delete('trans_ticketstockdetail');
			
		}
		
		return $valid;		
	}
	
}
?>