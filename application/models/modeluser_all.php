<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modeluser_all extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            
	}
        
        function getoption()
        {
            $query = $this->db->get('mst_user');
            foreach($query->result() as $row):
                $data[] = array(
                    'id_user'  => $row->id_user, 
                    'username' => $row->username
                    );
            endforeach;
            return $data;
        }
        
}        
        
    