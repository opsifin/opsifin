<?php
class modelHitungpolicy extends CI_Model {
	
	var $totalPassenger;
	var $totalBiaya;
	var $publishFare;
	var $idPricing;
	var $idBooking;
	var $isGA = false;
	var $isDom = true;
	var $NTA;
	var $hargaCharges;

		
	var $kode_pricing;
	var $nama_pricing;
	var $keterangan;
	var $dom_ga_precentage;
	var $dom_ga_minprofit;
	var $dom_ga_baseammount;
	var $dom_non_ga_baseammount;
	var $dom_non_ga_minpublishfare;
	var $dom_non_ga_merchantfee;
	var $dom_non_ga_minprofit;
	var $ix_ga_precentage;
	var $ix_ga_minprofit;
	var $ix_non_ga_baseammount;
	var $stamp_limit;
	var $stamp_lower;
	var $stamp_higher;
	
	var $hargaMarkupFare;
	
	public function __construct(){
        parent::__construct();
		$this->load->model('main/logUpdate');
	}
	
	private function defineItems($idBooking, $idPassenger){		
		$book = $this->db->query("select a.*, a.total_biaya/a.total_passenger as publish_fare, b.id_pricing
								from trans_ticketbook a join mst_customer b on a.id_customer=b.id_customer 
								where a.id_booking=$idBooking")->row();
								
		$this->idBooking = $idBooking;
		$this->totalPassenger = $book->total_passenger;
		$this->totalBiaya = $book->total_biaya;
		$this->totalPassenger = $book->total_passenger;
		$this->idPricing = $book->id_pricing;
		$this->publishFare = $book->publish_fare;
		
		if($book->ga == 1)
			$this->isGA = true;
			
		if($book->tipe_flight == "I")
			$this->isDom = false;		
		
		$price = $this->db->query("select * from mst_pricingpolicy where id_pricing=".$this->idPricing)->row();
		
		$this->kode_pricing = $price->kode_pricing;
		$this->nama_pricing = $price->nama_pricing;
		$this->keterangan = $price->keterangan;
		$this->dom_ga_precentage = $price->dom_ga_precentage;
		$this->dom_ga_minprofit = $price->dom_ga_minprofit;
		$this->dom_ga_baseammount = $price->dom_ga_baseammount;
		$this->dom_non_ga_baseammount = $price->dom_non_ga_baseammount;
		$this->dom_non_ga_minpublishfare = $price->dom_non_ga_minpublishfare;
		$this->dom_non_ga_merchantfee = $price->dom_non_ga_merchantfee;
		$this->dom_non_ga_minprofit = $price->dom_non_ga_minprofit;
		$this->ix_ga_precentage = $price->ix_ga_precentage;
		$this->ix_ga_minprofit = $price->ix_ga_minprofit;
		$this->ix_non_ga_baseammount = $price->ix_non_ga_baseammount;
		$this->stamp_limit = $price->stamp_limit;
		$this->stamp_lower = $price->stamp_lower;
		$this->stamp_higher = $price->stamp_higher;
		
		$pass = $this->db->query("select * from trans_passenger where id_passenger=$idPassenger and id_booking=$idBooking")->row();
		$this->NTA = $pass->harga_tiket;
		$this->hargaCharges = $pass->harga_nta - $pass->NTA;
	}	
	
	public function HitungMarkup($idBooking, $idPassenger){
		$this->defineItems($idBooking, $idPassenger);
		
		if($this->isDom) 
			$this->DomesticFlight();
		else
			$this->internationalFlight();
		
		$markupReal = 0;
		$total = $this->hargaMarkupFare;
		
		if($total < $this->stamp_limit)
			$markupReal = $total + $this->stamp_lower;
		else
			$markupReal = $total + $this->stamp_higher;
		
		return $markupReal;
	}
	
	private	function DomesticFlight(){
		if($this->isGA){
			if(!empty($this->dom_ga_precentage)){
				$hargaActualPrice =  $this->NTA/(1 - $this->dom_ga_precentage/100);
				$profit = $hargaActualPrice - $this->NTA;
				
				if($profit < $this->dom_ga_minprofit) 
					$hargaActualPrice = $this->NTA + $this->dom_ga_minprofit;
									
				$this->hargaMarkupFare = $hargaActualPrice;
			}
			else{
				$this->hargaMarkupFare = $this->NTA + $this->dom_ga_baseammount;
			}
		}
		else{
			if($this->publishFare >= $this->dom_non_ga_minpublishfare) {
				$this->hargaMarkupFare = $this->publishFare / (1 - $this->dom_non_ga_merchantfee/100);
			}
			else {
				$this->hargaMarkupFare = $this->publishFare + $this->dom_non_ga_minprofit;
			}
		}
	}
	
	private function InternationalFlight(){
		if(!empty($this->ix_ga_precentage)) {
			$this->hargaMarkupFare = $this->NTA / (1- ($this->ix_ga_precentage/100));
		}
		else{
			$this->hargaMarkupFare = $this->NTA + $this->ix_non_ga_baseammount;
		}
	}
	
	
}
?>