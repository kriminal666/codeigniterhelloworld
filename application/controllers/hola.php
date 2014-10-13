<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hola extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
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
		
		if (isset($_POST)&&($_POST['name'] !="")&&($_POST['lastname'] !="")){
			$data = array(
	          "name" => $this->input->get_post('name'),
              "lastname" => $this->input->get_post('lastname'));
			
		}else{
			$data['error']= "<h1>Debes enviar algo</h1>";
	    }
	    $this->load->view('welcome_message',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */