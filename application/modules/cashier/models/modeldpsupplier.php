<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modeldpsupplier extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            $this->load->model('logUpdate');
	}
        
        public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from dp_supplier $searchBy order by id_dp_supplier desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
        
        public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from dp_supplier $searchBy order by id_dp_supplier desc");
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
                
                // save header
                $fields = array(
                    "ds_number"         => $params->ds_number,
                    "transaksi_no"      => $params->transaksi_no,
                    "tanggal_transaksi" => $params->tanggal_transaksi,
                    "id_dept"           => $params->id_dept,
                    "kode_vendor"       => $params->kode_vendor,
                    "cp"                => $params->cp,
                    "lg_no"             => $params->lg_no,
                    "currency"          => $params->currency,
                    "amount"            => $params->amount,
                    "note"              => $params->note,
                    "used_amount"       => $params->used_amount,
                    "clearing_out"      => $params->clearing_out,
                    "clearing_in"       => $params->clearing_in,
                    
                );
		$this->db->set($fields);
		
                //print_r($params);
		if (!empty($params->id)) {                        
			$this->db->where("id_dp_supplier", $params->id);
			$valid = $this->db->update("dp_supplier");
                        //echo $this->db->last_query();
			$valid = $this->logUpdate->addLog("update", "dp_supplier", $params);
                        $idkey = $params->id;
		}
		else {
			$valid = $this->db->insert('dp_supplier');
                        $idkey = $this->db->insert_id();
			//echo $this->db->last_query();
                        $valid = $this->logUpdate->addLog("insert", "dp_supplier", $params);
                        
			//$valid = $this->modelNumbertrans->updatePVNumber();
			
			//$this->db2->set("status", 1);
			//$this->db2->where("id_invoice", $params->id_invoice);
			//$this->db2->update("trans_ticketinvoice");
		}
                
                $fields_detail = array(
                    'ref_id'        => $params->detail_ref_id,
                    'ref_no'        => $parmas->detail_ref_no,
                    'ccy'           => $params->detail_ccy,
                    'amount'        => $params->detail_amount,
                    'detail_name'   => $params->detail_name,
                    'used_date'     => $params->used_date,
                );
                $this->db->set($fields_detail);        
                if (!empty($params->detail)) { 
                    $this->db->where("id_dp_supplier_detail", $params->detail);
                    $valid = $this->db->update("dp_supplier_detail");
                }
                else {
                    $valid = $this->db->insert('dp_supplier_detail');
                }
		
		return true;		
	}
        
        public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;		
		$valid = $this->logUpdate->addLog("delete", "dp_supplier", array("id_dp_supplier" => $id));	
		
		if ($valid){
			$this->db->where('id_dp_supplier', $id);
			$valid = $this->db->delete('dp_supplier');
		}
		
		return $valid;		
	}
}	