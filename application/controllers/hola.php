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
	
		
	public function comprueba(){
		if (null !==$this->input->post()){
			$data = array(
	          "name" => $this->input->post('name'),
              "lastname" => $this->input->post('lastname'));
			echo "<h1>Hola ".$data['name']." tu apellido es ".$data['lastname']."</h1>";
		}


}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */