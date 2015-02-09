<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pv extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelPv');
		$this->load->model('modelNumbertrans');
	}
	
	
	
	public function getCurrValue(){
		$from = $this->input->post("from");
		$to = "IDR";
		$request = file_get_contents("http://rate-exchange.appspot.com/currency?from=". $from ."&to=". $to);
		$data = json_decode($request, true);
		
		echo $data["rate"];
	}
	
	

	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$PVNumber = $this->modelNumbertrans->getPVNumber();
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("trans_pv", array("id_pv" => $idEdit));
				$edit = $q->row();
				$PVNumber = $edit->no_pv;
			}	
			
			
			$country = $this->db->query("select distinct currency from mst_country where currency <>'' order by currency asc")->result();
			$getRow = $this->modelPv->dataList($page = 0, "index.php/main/pv/form");
			
			$content = array (
				"log" => $log,
				"pv_number" => $PVNumber,
                                "base_url" => base_url(),
				"currency" => $country,
				"data" => $getRow["data"],
				"edit" => $edit,
				"links" => $getRow["links"],
			);
			
			$this->twig->display("formpv", $content);
		}
		else
			redirect("../");
	}
	
	public function save() {
	
		$params = (object) $this->input->post();
		$emptyData = true;
		$valid = false;
		
		$valid = $this->modelPv->save($params);		
		if (empty($valid))
			$this->owner->alert("Please complete the form", "../index.php/main/pv/form");
		else
			redirect("../index.php/main/pv/form");
		
	}
	
	public function delete()
	{		
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelPv->delete($id);
		
		if ($valid)
			redirect("../index.php/main/pv/form");	
	}
}
?>