<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes extends CI_Controller {	

	
	//Página de listar produtos
	public function index()
	{					
		//Carrega o Model Produto
		$this->load->model('clientes_model', 'clientes');			
		//Criamos um Array dados para armazenas os clientes
		//Executamos a função no produtos_model getClientes
		$data['clientes'] = $this->clientes->getCliente();
		//Carregamos a view listar clientes e passamos como parametro a array clientes que guarda todos os produtos da db produtos
		$this->load->view('listar_clientes', $data);
	}
	//Página de adicionar clientes
	public function add()
	{	
		//Carrega o Model Clientes				
		$this->load->model('clientes_model', 'clientes');					
		//Carrega a View
		$this->load->view('add_clientes');
	}
	
//Página de editar clientes
public function editar($id=NULL)	
{						
	//Verifica se foi passado um ID, se não vai para a página listar clientes
	if($id == NULL) {
		redirect('/clientes');
	}

	//Carrega o Model clientes			
	$this->load->model('clientes_model', 'clientes');

	//Faz a consulta no banco de dados pra verificar se existe
	$query = $this->clientes->getClienteByID($id);

	//Verifica que a consulta voltar um registro, se não vai para a página listar clientes
	if($query == NULL) {
		redirect('/clientes');
	}
	
	//Criamos uma array onde vai guardar os dados do produto e passamos como parametro para view;	
	$dados['clientes'] = $query;

	//Carrega a View
	$this->load->view('editar_clientes', $dados);		
}


	//Função salvar no DB
	public function salvar()
	{
		 //Verifica se foi passado o campo codigo vazio.
		if ($this->input->post('nome') == NULL) {
	 	echo 'O compo nome é obrigatório.';
	 	echo '<a href="http://localhost/Atividade/index.php/clientes/add" title="voltar">Voltar</a>';
	 } else {

			//Carrega o Model Cleintes			
			$this->load->model('clientes_model', 'clientes');

			//Pega dados do post e guarda na array $dados
			$dados['nome'] = $this->input->post('nome');
			$dados['cpf'] = $this->input->post('cpf');
			$dados['rg'] = $this->input->post('rg');	
			$dados['telefone'] = $this->input->post('telefone');	
			$dados['Email'] = $this->input->post('Email');		
			
		//Verifica se foi passado via post a id do clientes
		if ($this->input->post('id') != NULL) {		
			//Se foi passado ele vai fazer atualização no registro.	
			$this->clientes->editarCliente($dados, $this->input->post('id'));
		} else {
			//Se Não foi passado id ele adiciona um novo registro
			$this->clientes->addCliente($dados);
		}	
					
		//Fazemos um redicionamento para a página 		
	    redirect("/clientes");	
		// redirect(base_url('/clientes'));
		}		

	}
	//Função Apagar registro
	public function apagar($id=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar clientes
		if($id == NULL) {
			redirect('/clientes');
		}

		//Carrega o Model Clientes				
		$this->load->model('clientes_model', 'clientes');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->clientes->getClienteByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarCliente do Clientes_model
			$this->clientes->apagarCliente($query->id);
			redirect('/clientes');

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar produtos
			redirect('/clientes');
		}	
	}
		
}
