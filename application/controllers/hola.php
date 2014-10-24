<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hola extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');

       
}
public function form(){
 $data = array (
			"formOpen"=>form_open(base_url().'index.php/hola/comprueba',array('name'=>'formulario','id'=>'form')),
			"label1"=>form_label('Nombre','name'),
			"input1"=>form_input('name'),
			"label2"=>form_label('Apellido','lastname'),
			"input2"=>form_input('lastname'),
			"submit"=>form_submit('send','Saludar'),
			"formClose"=>form_close());
 			return $data;
}

	public function index()
	{
		$data = $this->form();
	
		$this->load->view('welcome_message',$data);
	}
	 
	
	public function comprueba(){
		$data = $this->form();
		//Si existe la variable y los campos no están vacíos
		if (isset($_POST)&&($_POST['name'] !="")&&($_POST['lastname'] !="")){
			$data ['name'] = $this->input->get_post('name');
            $data ['lastname'] = $this->input->get_post('lastname');
			
		}else{
			$data['error']= "<h1>Debes enviar algo</h1>";
	    }
	    $this->load->view('welcome_message',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */