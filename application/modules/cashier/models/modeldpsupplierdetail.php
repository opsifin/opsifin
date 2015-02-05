<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modeldpsupplierdetail extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            $this->load->model('logUpdate');
	}
        
        public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from dp_supplier_detail $searchBy order by id_dp_supplier_detail desc limit $start, $limit");
		$result = $query->result();
		echo $this->db->last_query();
		return $result;	
	}
        
        public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from dp_supplier_detail $searchBy order by id_dp_supplier_detail desc");
		$result = $query->num_rows();
		return $result;	
	}
        
        function dataList($page, $find = NULL, $by = NULL, $url)
        {
                echo $find;
                echo $by;
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
		
		$this->db->set("ds_number", $params->ds_number);
		$this->db->set("transaksi_no", $params->transaksi_no);
		$this->db->set("tanggal_transaksi", $params->tanggal_transaksi);
		//$this->db->set("id_dept", $params->id_dept);
		$this->db->set("kode_vendor", $params->kode_vendor);
		$this->db->set("cp", $params->cp);
		$this->db->set("lg_no", $params->lg_no);
		$this->db->set("currency", $params->currency);
		$this->db->set("amount", $params->amount);
		$this->db->set("note", $params->note);
                //print_r($params);
		if (!empty($params->id)) {
			$this->db->where("id_dp_supplier", $params->id);
			$valid = $this->db->update("dp_supplier_detail");
                        //echo $this->db->last_query();
			$valid = $this->logUpdate->addLog("update", "dp_supplier_detail", $params);
		}
		else {
			$valid = $this->db->insert('dp_supplier_detail');
			//echo $this->db->last_query();
                        $valid = $this->logUpdate->addLog("insert", "dp_supplier_detail", $params);
                        
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
		$valid = $this->logUpdate->addLog("delete", "dp_supplier_detail", array("id_dp_supplier_detail" => $id));	
		
		if ($valid){
			$this->db->where('id_dp_supplier_detail', $id);
			$valid = $this->db->delete('dp_supplier_detail');
		}
		
		return $valid;		
	}
}	