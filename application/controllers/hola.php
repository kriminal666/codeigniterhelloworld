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
		$nombre = $this->input->post('name');
		$apellido = $this->input->post('lastname');
		if (($nombre !=="")||($apellido !=="")){
			$data = array(
	          "name" => $this->input->post('name'),
              "lastname" => $this->input->post('lastname'));
			$this->load->view('saluda_user',$data);
		}else{
			echo "<h1>Debes enviar algo</h1>";
			
		}
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */