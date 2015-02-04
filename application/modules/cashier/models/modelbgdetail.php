<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelbgdetail extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            $this->load->model('logUpdate');
	}
        
        public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from cheque_transaction_detail $searchBy order by id_cheque_detail desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
        
        public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from cheque_transaction_detail $searchBy order by id_cheque_detail desc");
		$result = $query->num_rows();
		return $result;	
	}
        
        function dataList($page, $find = NULL, $by = NULL, $url)
        {
                
                $config = array();
		$config["base_url"]     = base_url() . $url;
		$config["total_rows"]   = $this->totalData($find, $by);
		$config["per_page"]     = 15;
		$config['num_links']    = 5;			
		$config['uri_segment']  = 4;
		
		
		$endFrom = $config["per_page"];
		$startFrom = $page;
		if (!empty($page)) {
			$endFrom = ($config["per_page"] * $page); 
			$startFrom = ($endFrom - $config["per_page"]);
		}
		
		$this->pagination->initialize($config);
                
		$listData = $this->listData($config["per_page"], $startFrom, $find, $by);
                
		$links = $this->pagination->create_links();
		
		$output = array();
		$output["data"]     = $listData;
		$output["links"]    = $links;
	  
		return $output;
        }
        
        public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("id_cheque_detail", $params->id_cheque_detail );
		$this->db->set("ref_id", $params->ref_id );
		$this->db->set("ref_no", $params->ref_no );
                $this->db->set("ccy", $params->ccy );
		$this->db->set("amount", $params->amount );
		$this->db->set("name", $params->name );
                $this->db->set("used_data", $params->used_data );	
                
		if (!empty($params->id)) {
			$this->db->where("id_cc", $params->id);
			$valid = $this->db->update("cheque_transaction_detail");
                        
			$valid = $this->logUpdate->addLog("update", "cheque_transaction_detail", $params);
		}
		else {
			$valid = $this->db->insert('cheque_transaction_detail');
			
                        $valid = $this->logUpdate->addLog("insert", "cheque_transaction_detail", $params);
                        
			//$valid = $this->modelNumbertrans->updatePVNumber();
			
			//$this->db2->set("status", 1);
			//$this->db2->where("id_invoice", $params->id_invoice);
			//$this->db2->update("trans_ticketinvoice");
		}
		
		return true;		
	}
        
        public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;		
		$valid = $this->logUpdate->addLog("delete", "cheque_transaction_detail", array("id_cheque-detail" => $id));	
		
		if ($valid){
			$this->db->where('id_cheque_detail', $id);
			$valid = $this->db->delete('cheque_transaction_detail');
		}
		
		return $valid;		
	}
}	