<?php
class modelCustomer extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_setting from mst_customer a join mst_customersetting b on a.id_setting=b.id_setting  $searchBy order by a.id_customer desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_setting from mst_customer a join mst_customersetting b on a.id_setting=b.id_setting  $searchBy order by a.id_customer desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function listDataSettings($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "where transaction='ticket'";	
		
		if (!empty($find)) 
			$searchBy.= " and $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_customersetting $searchBy order by id_setting desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalDataSettings($find = NULL, $by = NULL) {
		$searchBy = "where transaction='ticket'";
		
		if (!empty($find)) 
			$searchBy.= " and $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_customersetting $searchBy order by id_setting desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$idCustomer =  0;
		
		$this->db->set("no_identitas", $params->no_identitas);
		$this->db->set("title", $params->title);
		$this->db->set("nama_lengkap", $params->nama_lengkap);
		$this->db->set("alamat_lengkap", $params->alamat_lengkap);		
		$this->db->set("email", $params->email);
		$this->db->set("telp1", $params->telp1);
		$this->db->set("telp2", $params->telp2);
		$this->db->set("warga_negara", $params->warga_negara);
		$this->db->set("tanggal_lahir", $params->tanggal_lahir);
		$this->db->set("tempat_lahir", $params->tempat_lahir);
		$this->db->set("status", 1);
		$this->db->set("warga_negara", $params->warga_negara);
		$this->db->set("keterangan", $params->keterangan);
		//$this->db->set("jenis", $params->jenis);
		$this->db->set("id_setting", $params->id_setting);		
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_customer", $params->id);
			$valid = $this->db->update("mst_customer");
			$idCustomer =  $params->id;
			$valid = $this->logUpdate->addLog("update", "mst_customer", $params);
			
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_customer');
			$idCustomer = $this->db->insert_id();
			$valid = $this->logUpdate->addLog("insert", "mst_customer", $params);
		}
		return $idCustomer;		
	}
	
	public function saveCharges($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;		
		$this->db->set("id_customer", $params->id_customer);
		$this->db->set("id_item", $params->id_item);
		$this->db->set("status", 1);		
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('mst_customercharges');	
		return $valid;
			
	}
	
	public function saveSetting($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("nama_setting", $params->nama_setting);
		$this->db->set("days", $params->days);
		$this->db->set("gabung", $params->gabung);
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("transaction", "ticket");
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_setting", $params->id);
			$valid = $this->db->update("mst_customersetting");
			$valid = $this->logUpdate->addLog("update", "mst_customersetting", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_customersetting');
			$valid = $this->logUpdate->addLog("insert", "mst_customersetting", $params);
		}
		return $valid;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_customer", array("id_customer" => $id));	
		
		if ($valid){
			$this->db->where('id_customer', $id);
			$valid = $this->db->delete('mst_customer');
		}
		
		return $valid;		
	}
	
	public function deleteSetting($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_customersetting", array("id_setting" => $id));	
		
		if ($valid){
			$this->db->where('id_setting', $id);
			$valid = $this->db->delete('mst_customersetting');
		}
		
		return $valid;		
	}
	
}
?>