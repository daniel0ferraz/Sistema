<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendas extends CI_Controller {	
	

	//Página de listar produtos
	public function index()
	{					
		//Carrega o Model Produto
		$this->load->model('vendas_model', 'vendas');			
		//Criamos um Array dados para armazenas os produtos
		//Executamos a função no produtos_model getProdutos
		$data['vendas'] = $this->vendas->getVenda();

		//Carregamos a view listarprodutos e passamos como parametro a array produtos que guarda todos os produtos da db produtos
		$this->load->view('listar_vendas', $data);
	}
	//Página de adicionarvendas
	public function add()
	{	
		//Carrega o Model vendas				
		$this->load->model('vendas_model', 'vendas');					
		//Carrega a View
		$this->load->view('add_vendas');
	}
	
//Página de editarvendas
public function editar($id=NULL)	
{						
	//Verifica se foi passado um ID, se não vai para a página listar vendas
	if($id == NULL) {
		redirect('/vendas');
	}

	//Carrega o Model Produtos				
	$this->load->model('vendas_model', 'vendas');

	//Faz a consulta no banco de dados pra verificar se existe
	$query = $this->vendas->getVendaByID($id);

	//Verifica que a consulta voltar um registro, se não vai para a página listar produtos
	if($query == NULL) {
		redirect('/vendas');
	}
	
	//Criamos uma array onde vai guardar os dados do produto e passamos como parametro para view;	
	$dados['vendas'] = $query;

	//Carrega a View
	$this->load->view('editar_vendas', $dados);		
}

	//Função salvar no DB
	public function salvar()
	{
		 //Verifica se foi passado o campo codigo vazio.
		if ($this->input->post('codigo') == NULL) {
	 	echo 'O compo codigo é obrigatório.';
	 	echo '<a href="http://localhost/Atividade/index.php/vendas/add" title="voltar">Voltar</a>';
	 } else {

			//Carrega o Model Cleintes			
			$this->load->model('vendas_model', 'vendas');

			//Pega dados do post e guarda na array $dados
		$dados['codigo'] = $this->input->post('codigo');
		$dados['dataVenda'] = $this->input->post('dataVenda');
		$dados['valorTotal'] = $this->input->post('valorTotal');
		$dados['valorPago'] = $this->input->post('valorPago');
		$dados['clientes_codigo'] = $this->input->post('clientes_codigo');
			
		//Verifica se foi passado via post a id do clientes
		if ($this->input->post('id') != NULL) {		
			//Se foi passado ele vai fazer atualização no registro.	
			$this->vendas->editarVenda($dados, $this->input->post('id'));
		} else {
			//Se Não foi passado id ele adiciona um novo registro
			$this->vendas->addVenda($dados);
		}	
					
		//Fazemos um redicionamento para a página 		
	    redirect("/vendas");	
		// redirect(base_url('/clientes'));
		}		

	}
	//Função Apagar registro
	public function apagar($id=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar vendas
		if($id == NULL) {
			redirect('/vendas');
		}

		//Carrega o Model vendas				
		$this->load->model('vendas_model', 'vendas');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->vendas->getVendaByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarvendas do  vendas_model
			$this->vendas->apagarVenda($query->id);
			redirect('/vendas');

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar vendas
			redirect('/vendas');
		}	
	}
		
}
