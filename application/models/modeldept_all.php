<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modeldept_all extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            
	}
        
        function getoption()
        {
            $query = $this->db->get('mst_dept');
            foreach($query->result() as $row):
                $data[] = array(
                    'id_dept'  => $row->id_dept, 
                    'nama_dept' => $row->nama_dept
                    );
            endforeach;
            return $data;
        }
        
}        
        
    