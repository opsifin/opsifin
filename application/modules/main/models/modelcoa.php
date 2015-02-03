<?php
class modelCoa extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}
	
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_level as nama_parent from mst_accnumber a left join mst_acclevel b on a.parent_acc=b.kode_level $searchBy order by a.id_acc desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_level as nama_parent from mst_accnumber a left join mst_acclevel b on a.parent_acc=b.kode_level $searchBy order by a.id_acc desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function dataList($page = 0, $find = NULL, $by = NULL, $url)
	{			
		$config = array();
		$config["base_url"] = base_url() . $url;
		$config["total_rows"] = $this->totalData($find, $by);
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
		$listData = $this->listData($config["per_page"], $startFrom, $find, $by);
		$links = $this->pagination->create_links();
		
		$output = array();
		$output["data"] = $listData;
		$output["links"] = $links;
	  
		return $output;
	}
	
	public function listDataByCompany($find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "AND $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_level as nama_parent, c.balance, c.added
									from mst_accnumber a left join mst_acclevel b on a.parent_acc=b.kode_level 
									left join coa_balance c on c.nomor_acc=a.nomor_acc
									where c.id_company=1 $searchBy order by a.id_acc desc");
		$result = $query->result();
		
		return $result;	
	}
	
	
	
	public function dataListByCompany($find = NULL, $by = NULL, $url)
	{			
		$listData = $this->listDataByCompany($find, $by);
		$output = array();
		$output["data"] = $listData;
		return $output;
	}
	
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("nomor_acc", $params->nomor_acc);
		$this->db->set("parent_acc", $params->parent_acc);
		$this->db->set("nama_acc", $params->nama_acc);
		
		if (!empty($params->id)) {
			$this->db->where("id_acc", $params->id);
			$valid = $this->db->update("mst_accnumber");
			$valid = $this->logUpdate->addLog("update", "mst_accnumber", $params);
		}
		else {
			$valid = $this->db->insert('mst_accnumber');
			$valid = $this->logUpdate->addLog("insert", "mst_accnumber", $params);
		}
		return $valid;		
	}
	
	public function reloadCOA(){
		$coa = $this->db->get("mst_accnumber")->result();
		$log = $this->session->all_userdata();
		
		foreach($coa as $data){
			$exist = $this->db->get_where("coa_balance", array("nomor_acc" => $data->nomor_acc, "id_company" => $this->session->userdata("clientId"), "fiscal_year" => $this->session->userdata("userTahun")))->num_rows();
			if ($exist <= 0){
				$this->db->set("nomor_acc", $data->nomor_acc);
				$this->db->set("id_company", $this->session->userdata("clientId"));
				$this->db->set("added", 0);
				$this->db->set("fiscal_year", $this->session->userdata("userTahun"));
				$this->db->insert("coa_balance");
			}
		}
		return true;
	} 
	
	public function saveCOABalance($params){
		$log = $this->session->all_userdata();
		$this->db->set("balance", $params->balance);
		$this->db->set("added", 1);
		$this->db->where(array("nomor_acc" => $params->nomor_acc, 
						"id_company" => $params->id_company, 
						"fiscal_year" => $this->session->userdata("userTahun")));
		$this->db->update("coa_balance");				
		return true;
	} 
        
        function del($params)
        {
            $result = array();
            $valid = $this->logUpdate->addLog("update", "mst_accnumber", $params);
            $this->db->where("id_acc", $params->id);
            $this->db->delete('mst_accnumber');
            
            if ($this->db->_error_message()) {
                $result['valid'] = false;
                $result['message'] = 'Error! ['.$this->db->_error_message().']';
            } else if (!$this->db->affected_rows()) {
                $result['valid'] = false;
                $result['message'] = 'Error! ID [ ] not found';
            } else {
                $result['valid'] = true;
                $result['message'] = 'Success';
            }
            return $result;
        }
	
}
?>