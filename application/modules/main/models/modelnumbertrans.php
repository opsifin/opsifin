<?php
class modelNumbertrans extends CI_Model {
	
	var $thnTrans;
	var $blnTrans;
	var $pvId;
	var $lastPV;
	var $groupId;
	var $userId;
	var $tglTrans;
	
	/* Get the paramater of auto numbering, set up in cosntruct */
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
		
		$data = $this->db->get_where("mst_conf", array("id" => 1))->row();
		
		$this->thnTrans = $data->thn_trans;
		$this->blnTrans = $data->bln_trans;
		$this->lastPV = $data->last_pv;
		
		$this->pvId = $data->pv_id;
		$this->groupId = $this->convertToChar($this->session->userdata('userGroup'), 2);
		$this->userId = $this->convertToChar($this->session->userdata('userId'), 2);
		$this->tglTrans = $this->convertToChar(date("d"), 2);		
	}
	/* end setup */
	
	/* convert to char from number */
	private function convertToChar($number, $maxLen = NULL)	{
		
		if(empty($maxLen)) {
			$maxLen = 3;
		}
		
		$len = $maxLen - strlen($number);
		$return = "";
		
		for ($x=1; $x<=$len; $x++) {
			$return.= "0";
		}
		$return.= $number;
		
		return $return;
	}
	/* end convert */
	
	
	/*  Get PV transaction and update the last Number */	
	public function getPVNumber	() {	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$PVNum = $this->lastPV + 1;
		$lastPV = $this->userId."".$this->tglTrans."".$this->blnTrans."".$this->thnTrans."".$this->convertToChar($PVNum, 2);
		
		return $lastPV;		
	}
	
	public function updatePVNumber(){
		$PVNum = $this->lastPV + 1;
		$lastPV = $this->convertToChar($PVNum);
		
		$this->db->set("last_pv", $lastPV);
		$this->db->where("id", 1);
		$this->db->update("mst_conf");
	}
	/* End PV Number handle */
	
	
	
}
?>