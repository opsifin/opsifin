<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_data extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function currency()
    {
        //$this->db->like('currency', $currency);
        $this->db->order_by('currency asc');
        $query = $this->db->get('mst_currency');
        foreach($query->result() as $row):
            $data[] = $row->currency; 
        endforeach;
        
        echo json_encode($data);
    }
    
}    