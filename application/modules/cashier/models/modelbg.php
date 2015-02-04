<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelbg extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            $this->load->model('logUpdate');
	}
        
        public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from cheque_transaction $searchBy order by id_cheque desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
        
        public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from cheque_transaction $searchBy order by id_cheque desc");
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
		
                $fields = array(
                    "id_cabang"     => $params->id_cabang,
                    "bg_prefix"         => $params->bg_prefix,
                    "bg_no"         => $params->bg_no,
                    "transaksi_no"  => $params->transaksi_no,
                    "tanggal_transaksi" =>  $params->tanggal_transaksi,		
                    "due_date"      => $params->due_date,
                    "ref_prefix"      => $params->ref_prefix,
                    "ref_type"      => $params->ref_type,
                    "cp"            => $params->cp,		
                    "bank_nama"     => $params->bank_nama,
                    "currency"      => $params->currency,                    
                    "amount"        => $params->amount,
                    "note"          => $params->note,
                );
                
                if (!empty($params->id)) {
			$this->db->where("id_cheque", $params->id);
                        $this->db->set($fields);
			$valid = $this->db->update("cheque_transaction");                        
			$valid = $this->logUpdate->addLog("update", "cheque_transaction", $params);
                        $idcheque= $params->id;
		}
		else {
			$this->db->set($fields);
                        $valid = $this->db->insert('cheque_transaction');			
                        $valid = $this->logUpdate->addLog("insert", "cheque_transaction", $params);
                        $idcheque = $this->db->insert_db();
			//$valid = $this->modelNumbertrans->updatePVNumber();
			
			//$this->db2->set("status", 1);
			//$this->db2->where("id_invoice", $params->id_invoice);
			//$this->db2->update("trans_ticketinvoice");
		}
                
                $fields_detail = array(
                    'id_cheque'     => $idcheque,
                    "ref_id"        => $params->detail_ref_id,
                    "ref_no"        => $params->detail_ref_no,
                    "ccy"           => $params->detail_ccy,
                    "amount"        => $params->detail_amount,		
                    "name"          => $params->detail_name,
                    "used_date"      => $params->detail_used_date,
                );
                // save cheque detail             
                if (!empty($fields_detail['ref_id'])){
                    if (!empty($params->iddetail)){
                        $this->db->where("id_cheque_detail", $params->iddetail);
                        $this->db->set($fields_detail);
			$valid = $this->db->update("cheque_transaction_detail");                        
			$valid = $this->logUpdate->addLog("update", "cheque_transaction_detail", $params);
                    }
                    else {
                        $this->db->set($fields_detail);
                        $valid = $this->db->insert('cheque_transaction_detail');			
                        $valid = $this->logUpdate->addLog("insert", "cheque_transaction_detail", $params);
                    }
                }
                
		return $valid;		
	}
        
        public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;		
		
		if ($valid){
                        // delete child first
                        $this->logUpdate->addLog("delete", "cheque_transaction_detail", array("id_cheque" => $id));
                        
                        $this->db->where('id_cheque', $id);
                        $valid = $this->db->delete('cheque_transaction_detail');
                        
                        $valid = $this->logUpdate->addLog("delete", "cheque_transaction", array("id_cheque" => $id));	
		
			$this->db->where('id_cheque', $id);
			$valid = $this->db->delete('cheque_transaction');
		}
		
		return $valid;		
	}
}	