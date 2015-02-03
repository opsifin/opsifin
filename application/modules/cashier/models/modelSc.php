<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// change update by dwi
// Jan, 29, 2015
// add new delete function

class modelSc extends CI_Model {
	
	public function __construct(){
            parent::__construct();
            $this->load->model('logUpdate');
	}
}	