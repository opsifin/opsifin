<?php
class modelJurnal extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}
	
	private function getMaxJurnal(){
		$log = $this->session->all_userdata();
		$idCompany = $this->session->userdata("clientId");
		$data = $this->db->query("select max(id_jurnal) as maxJurnal from reff_journal where id_company=$idCompany")->row();
		$max = (float)$data->maxJurnal + 1;
		return $max;	
	}
	
	public function saveSingle($params){
		$log = $this->session->all_userdata();
		$idJournal = $this->getMaxJurnal();
		
		if(!empty($params->id))
			$idJournal = $params->id;
		
		$nilai = $params->debit;
		if($params->kredit > 0){
			$nilai = 0 - $params->kredit;
		}
		
		$this->db->set("id_company", $this->session->userdata("clientId"));
		$this->db->set("id_jurnal", $idJournal);
		$this->db->set("jurnal_type", "MANUAL");
		$this->db->set("trans_date", $params->trans_date);
		$this->db->set("nomor_acc", $params->nomor_acc);
		$this->db->set("nilai", $nilai);
		$this->db->set("memo", $params->memo);
		$this->db->set("reff", $params->reff);
		$this->db->set("status", 0);
		
		if(!empty($params->id_detail)) {
			$this->db->where("id", $params->id_detail);
			$this->db->update("reff_journal");
		}
		else{
			$this->db->insert("reff_journal");
		}
		
		return $idJournal;
	} 
	
	public function saveAll($params){
		$log = $this->session->all_userdata();
		$idJournal = $this->getMaxJurnal();
		
		$this->db->set("trans_date", $params->trans_date);
		$this->db->set("reff", $params->reff);
		$this->db->set("status", 1);
		
		$this->db->where(array("id_jurnal" => $params->id, "id_company" => $this->session->userdata("clientId")));
		$this->db->update("reff_journal");
		
		return true;
	} 
	
}
?>