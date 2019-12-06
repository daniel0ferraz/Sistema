<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Membership_model' , 'membership');
	}



	public function index()
	{

	$this->load->view('login');
	
	}
	public function post()
	{
		$query = $this->membership->validate();
		if ($query){ // verifica login e senha
			$data = array(
				'login' => $this->input->post('login'),
				'logged' => true,
			);

			$this->session->set_userdata($data);
		
		  redirect(base_url('/produtos'));
		} 
		else{
		 redirect(base_url('/login'));
		}
	}

function logout(){
	$this->session->unset_userdata('login');
	$this->session->unset_userdata('logged');
	$this->session->sess_destroy();
	redirect(base_url('/login'));
}
}