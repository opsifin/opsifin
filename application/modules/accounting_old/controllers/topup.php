<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topup extends CI_Controller {
	private $valid = false;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelTopup');
		$this->load->model('main/modelNumbertrans');
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelTopup->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/ticketing/topup/form");
		else
			redirect("../index.php/ticketing/topup/form");
	}

	public function dataList($page = 0)
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$find = NULL;
			$by = NULL;
			
			if ($_POST) {
				$find = $this->input->post('find');
				$by = $this->input->post('by');
			}
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/ticketing/topup/datalist";
            $config["total_rows"] = $this->modelTopup->totalData($find, $by);
            $config["per_page"] = 10;
			$config['num_links'] = 5;			
			$config['uri_segment'] = 4;
			
			
			$endFrom = $config["per_page"];
			$startFrom = $page;
			if (!empty($page)) {
				$endFrom = ($config["per_page"] * $page); 
				$startFrom = ($endFrom - $config["per_page"]);
			}
			
           	$this->pagination->initialize($config);
           	$listData = $this->modelTopup->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listtopup", $content);
		}
		else
			redirect("../");
	}
	
	public function topupHistory($page = 0)
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
			
			$id_vendor = NULL;
			
			if ($_POST) 
				$id_vendor = $this->input->post('id_vendor');
			
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/ticketing/topup/topupHistory";
            $config["total_rows"] = $this->modelTopup->totalTopup($id_vendor);
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
           	$listData = $this->modelTopup->listTopup($config["per_page"], $startFrom, $id_vendor);
            $links = $this->pagination->create_links();
          	$vendor = $this->db->get("mst_vendorticket")->result();
			
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"id_vendor" => $id_vendor,
				"vendor" => $vendor,
			);
			
			$this->twig->display("listtopuphistory", $content);
		}
		else
			redirect("../");
	}
	
	public function form()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->get('id');
			
			if (!empty($idEdit)) {
				$q = $this->db->get_where("mst_vendorticket", array("id_vendor" => $idEdit));
				$edit = $q->row();
			}
						
			$country = $this->db->query("select distinct currency from mst_country where currency <>'' order by currency asc")->result();			
			$vendor = $this->db->get("mst_vendorticket")->result();
			$dpNumber = $this->modelNumbertrans->getDPNumber();
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"currency" => $country, 
				"vendor" => $vendor,
				"dp_number" => $dpNumber,
			);
			
			$this->twig->display("formtopup", $content);
		}
		else
			redirect("../");
	}
	
	public function delete()
	{	
	
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelDeposit->delete($id);
		
		if ($valid)
			redirect("../index.php/ticketing/desposit/datalist");
	
	}
}
?>