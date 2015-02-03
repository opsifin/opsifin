<?php
class modelVendor extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_jenis, if(b.direct_airlines=1,'Y','N') as da from mst_vendorticket a left join mst_jenisvendor b on a.id_jenis=b.id_jenis where b.type=1 $searchBy order by a.id_vendor desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_jenis from mst_vendorticket a join mst_jenisvendor b on a.id_jenis=b.id_jenis where b.type=1 $searchBy order by a.id_vendor desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function listDataCharges($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, count(b.id_charges) as total_item, c.nama_jenis 
									from mst_vendorticket a 
									join trans_vendorcharges b on a.id_vendor=b.id_vendor 
									join mst_jenisvendor c on c.id_jenis=a.id_jenis where 1=1 $searchBy
									group by b.id_vendor order by b.id_charges desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalDataCharges($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "and $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, count(b.id_charges) as total_item, c.nama_jenis 
									from mst_vendorticket a 
									join trans_vendorcharges b on a.id_vendor=b.id_vendor 
									join mst_jenisvendor c on c.id_jenis=a.id_jenis where 1=1 $searchBy
									group by b.id_vendor order by b.id_charges desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function listDataCari($limit, $start, $jenis = NULL){	
		$searchBy = "";	
		
		if (!empty($jenis)) 
			$searchBy = "and b.id_jenis='$jenis'";
				
		$query = $this->db->query("select a.*, b.nama_jenis, if(b.direct_airlines=1,'Y','N') as da from mst_vendorticket a left join mst_jenisvendor b on a.id_jenis=b.id_jenis where b.type=1 $searchBy order by a.id_vendor desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalDataCari($jenis = NUL) {
		$searchBy = "";	
		
		if (!empty($jenis)) 
			$searchBy = "and b.id_jenis='$jenis'";
				
		$query = $this->db->query("select a.*, b.nama_jenis from mst_vendorticket a join mst_jenisvendor b on a.id_jenis=b.id_jenis where b.type=1 $searchBy order by a.id_vendor desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$jenis = $this->db->query("select * from mst_jenisvendor where type=1 and direct_airlines=1")->row();
		
		$this->db->set("id_group", $this->session->userdata('userGroup'));
		$this->db->set("kode_vendor", $params->kode_vendor);
		$this->db->set("nama_vendor", $params->nama_vendor);
		$this->db->set("registered_name", $params->registered_name);
		$this->db->set("critical_balance", $params->critical_balance);
		$this->db->set("phone_office1", $params->phone_office1);
		$this->db->set("phone_office2", $params->phone_office2);
		$this->db->set("phone_cell1", $params->phone_cell1);
		$this->db->set("phone_cell2", $params->phone_cell2);
		$this->db->set("fax1", $params->fax1);
		$this->db->set("fax2", $params->fax2);
		$this->db->set("email1", $params->email1);
		$this->db->set("email2", $params->email2);
		$this->db->set("establish_date", $params->establish_date);
		$this->db->set("product_category", "Ticketing");
		$this->db->set("street", $params->street);
		$this->db->set("city", $params->city);
		$this->db->set("id_country", $params->id_country);
		$this->db->set("zip_code", $params->zip_code);
		$this->db->set("remarks", $params->remarks);
		
		if(!empty($params->id_airlines)){			
			$this->db->set("id_jenis", $jenis->id_jenis);
			$this->db->set("id_airlines", $params->id_airlines);
		}
		else
			$this->db->set("id_jenis", $params->id_jenis);
		
		$this->db->set("status", 1);
		//$this->db->set("keterangan", $params->keterangan);
				
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_vendor", $params->id);
			$valid = $this->db->update("mst_vendorticket");
			$valid = $this->logUpdate->addLog("update", "mst_vendorticket", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_vendorticket');
			$valid = $this->logUpdate->addLog("insert", "mst_vendorticket", $params);
		}
		return $valid;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_vendorticket", array("id_vendor" => $id));	
		
		if ($valid){
			$this->db->where('id_vendor', $id);
			$valid = $this->db->delete('mst_vendorticket');
		}
		
		return $valid;		
	}
	
	public function resetItems($id){
		$valid = false;
		$this->db->where('id_vendor', $id);
		$valid = $this->db->delete('trans_vendorcharges');
		return $valid;
	}
	
	public function saveCharges($paramsArr){
		$params = (object) $paramsArr;
		
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("id_vendor", $params->id_vendor);
		$this->db->set("id_item", $params->id_item);
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("status", 1);		
		$this->db->set("add_date", date("Y-m-d H:i:s"));
		$this->db->set("add_user", $this->session->userdata('userId'));
		$valid = $this->db->insert('trans_vendorcharges');
		$valid = $this->logUpdate->addLog("insert", "trans_vendorcharges", $params);
	}
	
	public function deleteCharges($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "trans_vendorcharges", array("id_vendor" => $id));	
		
		if ($valid){
			$this->db->where('id_vendor', $id);
			$valid = $this->db->delete('trans_vendorcharges');
		}
		
		return $valid;		
	}
}
?>