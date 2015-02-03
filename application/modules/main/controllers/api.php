<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include(APPPATH.'libraries/REST_Controller.php');
class Api extends REST_Controller {

  public function world_get() {
    $data = new StdObject;
    $data->name = "TESTNAME";
    $this->response($data); 
  }
  
}
?>