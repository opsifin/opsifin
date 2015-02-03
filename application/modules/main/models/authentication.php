<?php
class Authentication extends CI_Model {
	
    function __construct(){
        parent::__construct();
    }
	
	public function loginAuth($userName, $password)
	{
		$valid = false;		
		$password = md5($password);
		
		$query = $this->db->get_where("mst_user", array("username" => $userName,"password" => $password));
		if($query->num_rows() > 0)
		{
		   $data = $query->row();
		   if($data->username == $userName and $data->password == $password)
		   {
		   		$conf = $this->db->get_where("mst_conf", array("id" => 1));
		   		$dataConf = $conf->row();
				
				$comp = $this->db->get_where("mst_company", array("id_company" => 1));
				$dataComp = $comp->row();
				
				$session = array(
				   'clientId' 			=> $dataComp->id_company,
				   'clientName' 		=> $dataComp->nama_company,
				   'clientAdress'  		=> $dataComp->alamat,
				   'clientCity'  		=> $dataComp->kota,
				   'clientCountry'  	=> $dataComp->negara,				
				   'userId' 			=> $data->id_user,
				   'userName' 			=> $data->username,
				   'userNamaLengkap'	=> $data->nama_lengkap,
				   'userPassword'  		=> $data->password,
				   'userLevel'     		=> $data->level,
				   'userGroup'     		=> $data->id_group,
				   'userLogged' 		=> TRUE,
				   'userTahun' 			=> $dataConf->tahun_anggaran,				   				   
				);
				
				$this->session->set_userdata($session);
				$valid = true;
				
				$this->db->set("last_login", date("Y-m-d H:i:s"));
				$this->db->where("id_user", $data->id_user);
				$this->db->update("mst_user");
		   }				  
		} 
		return $valid;		
	}	
	
	public function gantiPassword($password)
	{
		$log = $this->session->all_userdata();
		$userId = $this->session->userdata('userId');
		$valid = false; 
	
		$this->db->set("password", $password);
		$this->db->where("id_user", $userId);
		$valid = $this->db->update("mst_user");
	
		
		$session = array(
			  'userPassword' => $password,
		);
			
		$this->session->set_userdata($session);
		
		return $valid;
	}
	
}
?>