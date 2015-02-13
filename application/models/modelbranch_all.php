<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelbranch_all extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            
	}
        
        function getoption()
        {
            $query = $this->db->get('mst_branch');
            foreach($query->result() as $row):
                $data[] = array(
                    'id_branch'  => $row->id_branch, 
                    'nama_branch' => $row->nama_branch
                    );
            endforeach;
            return $data;
        }
        
}