<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelcurrency_all extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            
	}
        
        function getoption()
        {
            $query = $this->db->get('mst_currency');
            foreach($query->result() as $row):
                $data[] = array(
                    'id_currency'  => $row->id_currency, 
                    'currency' => $row->currency
                    );
            endforeach;
            return $data;
        }
        
}