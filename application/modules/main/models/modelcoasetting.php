<?php
class modelCoaSetting extends CI_Model {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('logUpdate');
	}
	
	public function savelcc($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("deposit_d", $params->deposit_d);
		$this->db->set("deposit_c", $params->deposit_c);
		$this->db->set("price_d", $params->price_d);
		$this->db->set("price_c", $params->price_c);
		$this->db->set("cost_d", $params->cost_d);
		$this->db->set("cost_c", $params->cost_c);
		$this->db->set("airlinecost_d", $params->airlinecost_d);
		$this->db->set("airlinecost_c", $params->airlinecost_c);
		$this->db->set("commission_d", $params->commission_d);
		$this->db->set("commission_c", $params->commission_c);
		$this->db->set("discount_d", $params->discount_d);
		$this->db->set("discount_c", $params->discount_c);
		$this->db->set("retapprove_d", $params->retapprove_d);
		$this->db->set("retapprove_c", $params->retapprove_c);
		$this->db->set("retprice_d", $params->retprice_d);
		$this->db->set("retprice_c", $params->retprice_c);
		$this->db->set("retadmin_d", $params->retadmin_d);
		$this->db->set("retadmin_c", $params->retadmin_c);
		$this->db->where("id_company", $this->session->userdata("clientId"));
		$valid = $this->db->update("coalcc_setting");
		return $valid;		
	}
	
	public function savebsp($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("vat_d", $params->vat_d);
		$this->db->set("vat_c", $params->vat_c);
		$this->db->set("price_d", $params->price_d);
		$this->db->set("price_c", $params->price_c);
		$this->db->set("cost_d", $params->cost_d);
		$this->db->set("cost_c", $params->cost_c);
		$this->db->set("commission_d", $params->commission_d);
		$this->db->set("commission_c", $params->commission_c);
		$this->db->set("discount_d", $params->discount_d);
		$this->db->set("discount_c", $params->discount_c);
		$this->db->set("retapprove_d", $params->retapprove_d);
		$this->db->set("retapprove_c", $params->retapprove_c);
		$this->db->set("retprice_d", $params->retprice_d);
		$this->db->set("retprice_c", $params->retprice_c);
		$this->db->set("retadmin_d", $params->retadmin_d);
		$this->db->set("retadmin_c", $params->retadmin_c);
		$this->db->where("id_company", $this->session->userdata("clientId"));
		$valid = $this->db->update("coabsp_setting");
		return $valid;		
	}
	
	public function savehotel($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("deposit_d", $params->deposit_d);
		$this->db->set("deposit_c", $params->deposit_c);
		$this->db->set("price_d", $params->price_d);
		$this->db->set("price_c", $params->price_c);
		$this->db->set("cost_d", $params->cost_d);
		$this->db->set("cost_c", $params->cost_c);
		$this->db->set("commission_d", $params->commission_d);
		$this->db->set("commission_c", $params->commission_c);
		$this->db->set("discount_d", $params->discount_d);
		$this->db->set("discount_c", $params->discount_c);
		$this->db->set("retcost_d", $params->retcost_d);
		$this->db->set("retcost_c", $params->retcost_c);
		$this->db->set("retprice_d", $params->retprice_d);
		$this->db->set("retprice_c", $params->retprice_c);
		$this->db->set("retadmin_d", $params->retadmin_d);
		$this->db->set("retadmin_c", $params->retadmin_c);
		$this->db->where("id_company", $this->session->userdata("clientId"));
		$valid = $this->db->update("coahotel_setting");
		return $valid;		
	}
	
	public function savetour($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("supplierdeposit_d", $params->supplierdeposit_d);
		$this->db->set("supplierdeposit_c", $params->supplierdeposit_c);
		$this->db->set("price_d", $params->price_d);
		$this->db->set("price_c", $params->price_c);
		$this->db->set("cost_d", $params->cost_d);
		$this->db->set("cost_c", $params->cost_c);
		$this->db->set("discount_d", $params->discount_d);
		$this->db->set("discount_c", $params->discount_c);
		$this->db->set("retcost_d", $params->retcost_d);
		$this->db->set("retcost_c", $params->retcost_c);
		$this->db->set("retprice_d", $params->retprice_d);
		$this->db->set("retprice_c", $params->retprice_c);
		$this->db->set("retadmin_d", $params->retadmin_d);
		$this->db->set("retadmin_c", $params->retadmin_c);
		$this->db->where("id_company", $this->session->userdata("clientId"));
		$valid = $this->db->update("coatour_setting");
		return $valid;		
	}
	
	public function savedocument($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("price_d", $params->price_d);
		$this->db->set("price_c", $params->price_c);
		$this->db->set("cost_d", $params->cost_d);
		$this->db->set("cost_c", $params->cost_c);
		$this->db->set("payment_d", $params->payment_d);
		$this->db->set("payment_c", $params->payment_c);
		$this->db->where("id_company", $this->session->userdata("clientId"));
		$valid = $this->db->update("coadocument_setting");
		return $valid;		
	}
	
	public function saveothers($params)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("rentalprice_d", $params->rentalprice_d);
		$this->db->set("rentalprice_c", $params->rentalprice_c);
		$this->db->where("id_company", $this->session->userdata("clientId"));
		$valid = $this->db->update("coaother_setting");
		return $valid;		
	}
}
?>