<?php
class modelCompany extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}	
	
        function getdataid($id)
        {
            $this->db->where('id_company', $id);
            $query = $this->db->get('mst_company');
            $data = $query->row();
            return $data;
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
        
        public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_company $searchBy order by id_company desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
        
        public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_company $searchBy order by id_company desc");
		$result = $query->num_rows();
		return $result;	
	}
        
        
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("nama_company", $params->nama_company);
		$this->db->set("alamat", $params->alamat);
		$this->db->set("kode_pos", $params->kode_pos);
		$this->db->set("kota", $params->kota);
		$this->db->set("negara", $params->negara);
		$this->db->set("phone", $params->phone);
		$this->db->set("email", $params->email);
		$this->db->set("status", 1);
		$this->db->set("currency", $params->currency);
		
		if (!empty($params->id)) {
			$this->db->where("id_company", $params->id);
			$valid = $this->db->update("mst_company");
			$valid = $this->logUpdate->addLog("update", "mst_company", $params);
		}
		else {
			$valid = $this->db->insert('mst_company');
			$valid = $this->logUpdate->addLog("insert", "mst_company", $params);
		}
		return $valid;		
	}
}
?>