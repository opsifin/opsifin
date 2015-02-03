<?php
class modelPricing extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_pricingpolicy $searchBy order by id_pricing desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_pricingpolicy $searchBy order by id_pricing desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("kode_pricing", $params->kode_pricing);
		$this->db->set("nama_pricing", $params->nama_pricing);
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("dom_ga_precentage", $params->dom_ga_precentage);
		$this->db->set("dom_ga_minprofit", $params->dom_ga_minprofit);
		$this->db->set("dom_ga_baseammount", $params->dom_ga_baseammount);
		$this->db->set("dom_non_ga_baseammount", $params->dom_non_ga_baseammount);
		$this->db->set("dom_non_ga_minpublishfare", $params->dom_non_ga_minpublishfare);
		$this->db->set("dom_non_ga_merchantfee", $params->dom_non_ga_merchantfee);
		$this->db->set("dom_non_ga_minprofit", $params->dom_non_ga_minprofit);
		$this->db->set("ix_ga_precentage", $params->ix_ga_precentage);
		$this->db->set("ix_ga_minprofit", $params->ix_ga_minprofit);
		$this->db->set("ix_non_ga_baseammount", $params->ix_non_ga_baseammount);
		$this->db->set("stamp_limit", $params->stamp_limit);
		$this->db->set("stamp_lower", $params->stamp_lower);
		$this->db->set("stamp_higher", $params->stamp_higher);		
		$this->db->set("status", 1);
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_pricing", $params->id);
			$valid = $this->db->update("mst_pricingpolicy");
			$valid = $this->logUpdate->addLog("update", "mst_pricingpolicy", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_pricingpolicy');
			$valid = $this->logUpdate->addLog("insert", "mst_pricingpolicy", $params);
		}
		return $valid;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "trans_flight", array("id_flight" => $id));	
		
		if ($valid){
			$this->db->where('id_flight', $id);
			$valid = $this->db->delete('trans_flight');
		}
		
		return $valid;		
	}
	
	public function getById($id){
		$query = $this->db->query("select *, 
								date(tanggal_flight) as date_flight, hour(tanggal_flight) as jam_flight, minute(tanggal_flight) as menit_flight,
								date(tanggal_arrive) as date_arrive, hour(tanggal_arrive) as jam_arrive, minute(tanggal_arrive) as menit_arrive 
								from trans_flight where id_flight=$id");
		return $query->row();
	}
	
}
?>