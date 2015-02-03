<?php
class modelItemcharge extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	public function listData($limit, $start, $find = NULL, $by = NULL){	
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select *, if(persen_idr='1', concat(nilai, ' %'), concat(format(nilai, 0),'')) as nilai_charge from mst_itembiayaticket $searchBy order by id_item desc limit $start, $limit");
		$result = $query->result();
		
		return $result;	
	}
	
	public function totalData($find = NULL, $by = NULL) {
		$searchBy = "";	
		
		if (!empty($find)) 
			$searchBy = "WHERE $by LIKE '%$find%'";
				
		$query = $this->db->query("select *, if(persen_idr='1', concat(nilai, ' %'), concat(format(nilai, 0),'')) as nilai_charge from mst_itembiayaticket $searchBy order by id_item desc");
		$result = $query->num_rows();
		return $result;	
	}
	
	public function save($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("nama_item", $params->nama_item);
		$this->db->set("nilai", $params->nilai);
		$this->db->set("persen_idr", $params->persen_idr);
		$this->db->set("currency", $params->currency);
		$this->db->set("keterangan", $params->keterangan);
		$this->db->set("status", 1);
		
		if (!empty($params->id)) {
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('userId'));
			$this->db->where("id_item", $params->id);
			$valid = $this->db->update("mst_itembiayaticket");
			$valid = $this->logUpdate->addLog("update", "mst_itembiayaticket", $params);
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('userId'));
			$valid = $this->db->insert('mst_itembiayaticket');
			$valid = $this->logUpdate->addLog("insert", "mst_itembiayaticket", $params);
		}
		return $valid;		
	}
	
	public function savePolicy($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("currency", $params->currency);
		$this->db->set("pricing_policy", $params->pricing_policy);
		$this->db->where("id_item", $params->id);
		$valid = $this->db->update("mst_itembiayaticket");
	
		return $valid;		
	}
	
	public function hitungCharge($price, $idAirlines){
		$log = $this->session->all_userdata();
		$valid = false;
		
		$row = $this->db->query("select a.*, b.nama_item, b.nilai, b.persen_idr from mst_airlinescharges a join mst_itembiayaticket 
								b on a.id_item=b.id_item where a.id_airlines=$idAirlines")->result();
		
		$nilaiCharge = 0;
		
		foreach($row as $data){
			$nilaiPlus = $data->nilai;
			if ($data->persen_idr == 1){
				$nilaiPlus = (float)$price * $data->nilai/100;
			}
			
			$nilaiCharge = $nilaiPlus + $nilaiCharge; 
		}
		
		return $nilaiCharge;		
	}
	
	public function delete($id)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		$valid = $this->logUpdate->addLog("delete", "mst_itembiayaticket", array("id_item" => $id));	
		
		if ($valid){
			$this->db->where('id_item', $id);
			$valid = $this->db->delete('mst_itembiayaticket');
		}
		
		return $valid;		
	}
	
}
?>