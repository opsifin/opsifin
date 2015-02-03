<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class vendor extends CI_Controller {
	private $valid = false;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->model('modelJenisvendor');
		$this->load->model('modelVendor');
		$this->load->model('modelAirlines');
	}
	
	public function save(){
		$params = (object) $this->input->post();
		$this->valid = $this->modelVendor->save($params);
		
		if (!$this->valid)
			$this->owner->alert("Please complete the form", "../index.php/ticketing/vendor/form");
		else
			redirect("../index.php/ticketing/vendor/form");				
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
            $config["base_url"] = base_url() . "index.php/ticketing/vendor/datalist";
            $config["total_rows"] = $this->modelVendor->totalData($find, $by);
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
           	$listData = $this->modelVendor->listData($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listvendor", $content);
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
			
			$airlines = $this->db->get("mst_airlines")->result();
			$jenis = $this->db->get_where("mst_jenisvendor", array("type" => 1))->result();		
			$country = $this->db->query("select * from mst_country order by nama_country asc")->result();
					
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"airlines" => $airlines,
				"jenis" => $jenis,
				"currency" => $country,
			);
			
			$this->twig->display("formvendor", $content);
		}
		else
			redirect("../");
	}
	
	public function delete()
	{		
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelVendor->delete($id);
		
		if ($valid)
			redirect("../index.php/ticketing/vendor/datalist");	
	}
	
	public function cari($page = 0, $find = NULL, $by = NULL)
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$idJenis = NULL;
			if ($_POST) {
				$idJenis = $this->input->post('id_jenis');
			}
			
			
			$config = array();
            $config["base_url"] = base_url() . "index.php/ticketing/vendor/cari/$page/$find/$by";
            $config["total_rows"] = $this->modelVendor->totalDataCari($idJenis);
            $config["per_page"] = 10;
			$config['num_links'] = 5;			
			$config['uri_segment'] = 4;			
			
           	$this->pagination->initialize($config);
           	$listData = $this->modelVendor->listDataCari($config["per_page"], $page, $idJenis);
            $links = $this->pagination->create_links();
			
          	$jenis = $this->db->get("mst_jenisvendor")->result();
			
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"idJenis" => $idJenis,
				"page" => $page,
				"jenis" => $jenis,
			);
			
			$this->twig->display("carivendor", $content);
		}
		else
			redirect("../");
	}
	
	public function dataListCharges($page = 0)
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
            $config["base_url"] = base_url() . "index.php/ticketing/vendor/datalist";
            $config["total_rows"] = $this->modelVendor->totalDataCharges($find, $by);
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
           	$listData = $this->modelVendor->listDataCharges($config["per_page"], $startFrom, $find, $by);
            $links = $this->pagination->create_links();
          	
			$content = array (
				"log" => $log,
				"base_url" => base_url(),
				"data" => $listData,
				"links" => $links,
				"find" => $find,
				"by" => $by,
			);
			
			$this->twig->display("listvendorcharges", $content);
		}
		else
			redirect("../");
	}
	
	public function formCharges()
	{
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
		
		if ($userLogged) {
		
			$edit = NULL;			
			$idEdit = $this->input->post('id_vendor');
			$totalItem = NULL;
			
			if (!empty($idEdit)) {
				$totalItem = $this->input->post("total_item");
				$q = $this->db->get_where("mst_vendorticket", array("id_vendor" => $idEdit));
				$edit = $q->row();
			}
			$itemCharge = $this->db->query("select *, if(persen_idr='1', concat(nilai, ' %'), concat(format(nilai, 0),' IDR')) as nilai_charge from mst_itembiayaticket")->result();
			
			$content = array (
				"log" => $log,
              	"base_url" => base_url(),
				"edit" => $edit,
				"total_item" => $totalItem,
				"item" => $itemCharge,
			);
			
			$this->twig->display("formvendorcharges", $content);
		}
		else
			redirect("../");
	}
	
	public function saveCharges(){
		$valid = false;
		$jumlah = $this->input->post("jumlah");
		$idVendor = $this->input->post("id_vendor");
		
		$valid = $this->modelVendor->resetItems($idVendor);
		
		if ($valid) {
			for ($x = 1; $x <= $jumlah; $x++) {
				$idItem = $this->input->post("id_item$x");
				$keterangan = $this->input->post("keterangan$x");
				
				$params["id_vendor"] = $idVendor;
				$params["id_item"] = $idItem;
				$params["keterangan"] = $keterangan;
								
				$valid = $this->modelVendor->saveCharges($params);
			}
		}
		
		redirect("../index.php/ticketing/vendor/dataListCharges");		
	}
	public function deleteCharges()
	{		
		$valid = false;
		$id = $this->input->get('id');
		$valid = $this->modelVendor->deleteCharges($id);
		
		if ($valid)
			redirect("../index.php/ticketing/vendor/datalistCharges");	
	}
	
}

?>