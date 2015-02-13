<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelcompany_all extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            
	}
        
        function getoption()
        {
            $query = $this->db->get('mst_company');
            foreach($query->result() as $row):
                $data[] = array(
                    'id_company'  => $row->id_company, 
                    'nama_company' => $row->nama_company
                    );
            endforeach;
            return $data;
        }
        
}