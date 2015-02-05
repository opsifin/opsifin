<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {	
	function __construct()
	{
		parent::__construct();
                $this->load->library('twig');
                $this->load->helper('url');
                $this->load->library("pagination");
                //$this->load->model('Authentication');
	}
        
       function home()
       {
           //echo "est";
           $content = array();
           //print_r($this->twig);
           //$this->twig->display();
           $this->twig->display("home", $content);
       } 
}        