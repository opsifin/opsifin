<?php
class modelPv extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
		$this->load->model('modelNumbertrans');
		$this->db2 = $this->load->database('opsimid', TRUE);
		
	}
	
	public function listData($limit, $start){	
		$searchBy = "";	
		
				
		$query = $this->db->query("select * from trans_pv order by id_pv desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData() {
				
		$query = $this->db->query("select * from trans_pv order by id_pv desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function dataList($page = 0, $url)
	{			
		$config = array();
		$config["base_url"] = base_url() . $url;
		$config["total_rows"] = $this->totalData();
		$config["per_page"] = 15;
		$config['num_links'] = 5;			
		$config['uri_segment'] = 4;
		
		
		$endFrom = $config["per_page"];
		$startFrom = $page;
		if (!empty($page)) {
			$endFrom = ($config["per_page"] * $page); 
			$startFrom = ($endFrom - $config["per_page"]);
		}
		
		$this->pagination->initialize($config);
		$listData = $this->listData($config["per_page"], $startFrom);
		$links = $this->pagination->create_links();
		
		$output = array();
		$output["data"] = $listData;
		$output["links"] = $links;
	  
		return $output;
	}
	
	
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("no_pv", $params->no_pv);
		$this->db->set("tanggal_pv", $params->tanggal_pv);
		$this->db->set("invoice_type", $params->invoice_type);
		$this->db->set("invoice_no", $params->invoice_no);
		$this->db->set("id_invoice", $params->id_invoice);
		$this->db->set("invoice_balance", $params->invoice_balance);
		$this->db->set("pay_method", $params->pay_method);
		$this->db->set("paid_ammount", $params->paid_ammount);
		$this->db->set("discount", $params->discount);
		$this->db->set("commission", $params->commission);
		$this->db->set("currency", $params->currency);
		$this->db->set("convert_ammount", $params->convert_ammount);
		$this->db->set("currency_balance", $params->currency_balance);
		//$this->db->set("keterangan", $params->keterangan);
		$this->db->set("agent_type", $params->agent_type);
		
		if (!empty($params->id)) {
			$this->db->where("id_pv", $params->id);
			$valid = $this->db->update("trans_pv");
			$valid = $this->logUpdate->addLog("update", "trans_pv", $params);
		}
		else {
			$valid = $this->db->insert('trans_pv');
			$valid = $this->logUpdate->addLog("insert", "trans_pv", $params);
			$valid = $this->modelNumbertrans->updatePVNumber();
			
			$this->db2->set("status", 1);
			$this->db2->where("id_invoice", $params->id_invoice);
			$this->db2->update("trans_ticketinvoice");
		}
		
		return true;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$d = $this->db->get_where("trans_pv", array("id_pv"=>$id))->row();
		$this->db2->set("status", 0);
		$this->db2->where("id_invoice", $d->id_invoice);
		$this->db2->update("trans_ticketinvoice");
		
		$valid = $this->logUpdate->addLog("delete", "trans_pv", array("id_pv" => $id));	
		
		if ($valid){
			$this->db->where('id_pv', $id);
			$valid = $this->db->delete('trans_pv');
			
			
		}
		
		return $valid;		
	}
	
	
}
?>