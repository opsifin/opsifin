<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modeldn extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            $this->load->model('logUpdate');
	}
        
        public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from dn_transaction $searchBy order by id_dn desc limit $start, $limit");
		$result = $query->result();
		echo $this->db->last_query();
		return $result;	
	}
        
        public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from dn_transaction $searchBy order by id_dn desc");
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
		
		$this->db->set("id_cabang", $params->id_cabang );
		$this->db->set("ref_no", $params->ref_no );
		$this->db->set("transaksi_no", $params->transaksi_no );
		$this->db->set("tanggal_transaksi", $params->tanggal_transaksi );		
		$this->db->set("id_customer", $params->id_customer );
		$this->db->set("cp", $params->cp );		
		$this->db->set("nama_bank", $params->nama_bank );
		$this->db->set("amount", $params->amount );
		$this->db->set("note", $params->note );
                
		if (!empty($params->id)) {
			$this->db->where("id_dn", $params->id);
			$valid = $this->db->update("dn_transaction");
                        
			$valid = $this->logUpdate->addLog("update", "dn_transaction", $params);
		}
		else {
			$valid = $this->db->insert('dn_transaction');
			
                        $valid = $this->logUpdate->addLog("insert", "dn_transaction", $params);
                        
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
		$valid = $this->logUpdate->addLog("delete", "dn_transaction", array("id_dn" => $id));	
		
		if ($valid){
			$this->db->where('id_dn', $id);
			$valid = $this->db->delete('dn_transaction');
		}
		
		return $valid;		
	}
}	