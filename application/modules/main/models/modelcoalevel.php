<?php
class modelCoalevel extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}
	
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_level as nama_parent from mst_acclevel a left join mst_acclevel b on a.parent_level=b.kode_level $searchBy order by a.id_levelacc desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, b.nama_level as nama_parent from mst_acclevel a left join mst_acclevel b on a.parent_level=b.kode_level $searchBy order by a.id_levelacc desc");
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
	
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("nama_group", $params->nama_group);
		$this->db->set("kode_level", $params->kode_level);
		$this->db->set("parent_level", $params->parent_level);
		$this->db->set("nama_level", $params->nama_level);
		
		if (!empty($params->id)) {
                        // change by dwi
                        // $this->db->where("id_groupacc", $params->id);
			$this->db->where("id_levelacc", $params->id);
			$valid = $this->db->update("mst_acclevel");
			$valid = $this->logUpdate->addLog("update", "mst_acclevel", $params);
		}
		else {
			$valid = $this->db->insert('mst_acclevel');
			$valid = $this->logUpdate->addLog("insert", "mst_acclevel", $params);
		}
		return $valid;		
	}
        
        function del($params)
        {
            $result = array();
            $valid = $this->logUpdate->addLog("delete", "mst_acclevel", $params);
            $this->db->where("id_levelacc", $params->id);
            $this->db->delete('mst_acclevel');
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