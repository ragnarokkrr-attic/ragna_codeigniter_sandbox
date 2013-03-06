<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// class deve ter o mesmo nome do arquivo, SEM EXTENSAO e COM O PRIMEIRO CARACTER MAIUSCULO


class Primeiro extends CI_Controller {

//index da URL 'primeiro'
	public function index(){
		$this->load->view('primeiro_view');
	}
	
	


}


?>