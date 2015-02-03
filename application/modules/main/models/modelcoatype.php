<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// change update by dwi
// Jan, 29, 2015
// add new delete function

class modelCoatype extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}
	
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_accgroup $searchBy order by id_groupacc desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_accgroup $searchBy order by id_groupacc desc");
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
		
		$this->db->set("kode_group", $params->kode_group);
		$this->db->set("nama_group", $params->nama_group);
		
		if (!empty($params->id)) {
                        // change here by dwi wahyudi
                        // to record person who update this data
                        $this->db->set("modified_date", date('Y-m-d H:i:s'));
                        $this->db->set("modified_user", $this->session->userdata('userId'));
		
                        // end here
			$this->db->where("id_groupacc", $params->id);
			$valid = $this->db->update("mst_accgroup");
			$valid = $this->logUpdate->addLog("update", "mst_accgroup", $params);
		}
		else {
                        // change here by dwi wahyudi
                        // to record person who add this data
                        $this->db->set("add_date", date('Y-m-d H:i:s'));
                        $this->db->set("add_user", $this->session->userdata('userId'));
		
                        // end here
			$valid = $this->db->insert('mst_accgroup');
			$valid = $this->logUpdate->addLog("insert", "mst_accgroup", $params);
		}
		return $valid;		
	}
        
        // adding new function to delete data
        // by dwi wahyudi, 29 Jan 2015
        
        function del($params)
        {
            $result = array();
            $valid = $this->logUpdate->addLog("delete", "mst_accgroup", $params);
            $this->db->where("id_groupacc", $params->id);
            $this->db->delete('mst_accgroup');
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
        
        function check_kd($kdgroup)
        {
            $this->db->where('kode_group', $kdgroup);
            $data = $this->db->count_all_results('mst_accgroup');
            $result = array('jml'=>$data);
            return $result;
        }
}