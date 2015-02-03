<?php
class modelUser extends CI_Model {
	
	public function __construct(){
        parent::__construct();
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select a.*, if(a.level=0,'User Administrator','User SKPD') as nama_level, b.nama_jabatan from mst_user a left join mst_jabatan b on a.id_jabatan=b.id_jabatan		
								$searchBy order by a.id_user desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select * from mst_user $searchBy order by id_user desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function gantiPassword($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("password", md5($params->pass2));
		
		$this->db->set("modified_date", date("Y-m-d H:i:s"));
		$this->db->set("modified_user", $this->session->userdata('userId'));
		$this->db->where("id_user", $this->session->userdata('userId'));
		$valid = $this->db->update("mst_user");
		if ($valid) {
			$session = array(
				   'userPassword' => md5($params->pass2),
			);
			$valid = $this->session->set_userdata($session);
			$valid = true;
		}		
		return $valid;		
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$level = 0;
		if($params->id_jabatan > 0)
			$level = 1;
		
		$this->db->set("username", $params->username);
		$this->db->set("password", md5($params->password));
		$this->db->set("nama_lengkap", $params->nama_lengkap);
		$this->db->set("id_jabatan", $params->id_jabatan);
		$this->db->set("level", $level);
		$this->db->set("status", 1);
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_user", $params->id);
			$valid = $this->db->update("mst_user");
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_user');
		}
		return $valid;		
	}
}
?>