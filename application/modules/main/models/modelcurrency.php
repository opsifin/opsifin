<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// change update by dwi
// Jan, 29, 2015
// add new delete function

class modelCurrency extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}
	
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_currency $searchBy order by currency desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_currency $searchBy order by currency desc");
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
		
		$this->db->set("currency", $params->currency);
		$this->db->set("desc", $params->desc);
		
		if (!empty($params->id)) {
                        // change here by dwi wahyudi
                        // to record person who update this data
                        $this->db->set("modified_date", date('Y-m-d H:i:s'));
                        $this->db->set("modified_user", $this->session->userdata('userId'));
		
                        // end here
			$this->db->where("currency", $params->id);
			$valid = $this->db->update("mst_currency");
			$valid = $this->logUpdate->addLog("update", "mst_currency", $params);
		}
		else {
                        // change here by dwi wahyudi
                        // to record person who add this data
                        $this->db->set("add_date", date('Y-m-d H:i:s'));
                        $this->db->set("add_user", $this->session->userdata('userId'));
		
                        // end here
			$valid = $this->db->insert('mst_currency');
			$valid = $this->logUpdate->addLog("insert", "mst_currency", $params);
		}
		return $valid;		
	}
        
        // adding new function to delete data
        // by dwi wahyudi, 29 Jan 2015
        
        function del($params)
        {
            $result = array();            
            $valid = $this->logUpdate->addLog("delete", "mst_currency", $params);
            
            //$this->db->where("currency", $params->id);
            //$this->db->delete('mst_currency');
            
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
        
        function check_currency($kdgroup)
        {
            $this->db->where('currency', $kdgroup);
            $data = $this->db->count_all_results('mst_currency');
            $result = array('jml'=>$data);
            return $result;
        }
}