<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

$meusDados['pgView'] = 'Home';
$meusDados['usuario'] = ['nome'=>'JOABE NASCIMENTO', 'login'=>'jobs'];



		$this->load->view('Layout',$meusDados);
	}

	public function cadastros()
	{
$meusDados['pgView'] = 'Listagem';

// $meusDados['usuario'] = ['nome'=>'JOABE NASCIMENTO', 'login'=>'jobs'];
$meusDados['usuario'] = ['nome'=>'JOABE NASCIMENTO', 'login'=>'jobs'];
$meusDados['cadastros'] = $this->db->get('pessoa')->result_array();
[ 

	['nome'=>'heloara'] ,
	['nome'=>'Pablo']   ,
	['nome'=>'Uemys'] 

];

		$this->load->view('Layout',$meusDados);
	}

}

/* End of file Template.php */
/* Location: ./application/controllers/Template.php */