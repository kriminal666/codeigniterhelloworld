<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hola extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}


	
	public function index()
	{
		$this->greeting("mundo");
	}
	 
        public function greeting($name){
	$data['nombre'] = $name;
	$this->load->view('welcome_message',$data);
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */