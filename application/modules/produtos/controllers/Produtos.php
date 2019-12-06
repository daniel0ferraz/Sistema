<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produtos extends CI_Controller {	

	public function __construct()
	{
		parent::__construct();

		$this->load->model('login/Membership_model' , 'membership');
		$this->membership->logged();
	}

	//Página de listar produtos
	public function index()
	{					
		//Carrega o Model Produto
		$this->load->model('produtos_model', 'produtos');			
		//Criamos um Array dados para armazenas os produtos
		//Executamos a função no produtos_model getProdutos
		$data['produtos'] = $this->produtos->getProdutos();
		//Carregamos a view listarprodutos e passamos como parametro a array produtos que guarda todos os produtos da db produtos
		$this->load->view('listar_Produtos', $data);
	}
	//Página de adicionar produto
	public function add()
	{	
		//Carrega o Model Produtos				
		$this->load->model('produtos_model', 'produtos');					
		//Carrega a View
		$this->load->view('add_produtos');
	}
	
//Página de editar produto
public function editar($id=NULL)	
{						
	//Verifica se foi passado um ID, se não vai para a página listar produtos
	if($id == NULL) {
		redirect('/produtos');
	}

	//Carrega o Model Produtos				
	$this->load->model('produtos_model', 'produtos');

	//Faz a consulta no banco de dados pra verificar se existe
	$query = $this->produtos->getProdutoByID($id);

	//Verifica que a consulta voltar um registro, se não vai para a página listar produtos
	if($query == NULL) {
		redirect('/produtos');
	}
	
	//Criamos uma array onde vai guardar os dados do produto e passamos como parametro para view;	
	$dados['produto'] = $query;

	//Carrega a View
	$this->load->view('editar_produtos', $dados);		
}


	//Função salvar no DB
	public function salvar()
	{
		 //Verifica se foi passado o campo codigo vazio.
		if ($this->input->post('codigo') == NULL) {
	 	echo 'O compo nome do produto é obrigatório.';
	 	echo '<a href="http://localhost/Atividade/index.php/produtos/add" title="voltar">Voltar</a>';
	 } else {

			//Carrega o Model Produtos				
			$this->load->model('produtos_model', 'produtos');

			//Pega dados do post e guarda na array $dados
			$dados['codigo'] = $this->input->post('codigo');
			$dados['nome_produto'] = $this->input->post('nome_produto');
			$dados['val_compra'] = $this->input->post('val_compra');	
			$dados['val_venda'] = $this->input->post('val_venda');	
			$dados['descricao'] = $this->input->post('descricao');		
			
		//Verifica se foi passado via post a id do produtos
		if ($this->input->post('id') != NULL) {		
			//Se foi passado ele vai fazer atualização no registro.	
			$this->produtos->editarProduto($dados, $this->input->post('id'));
		} else {
			//Se Não foi passado id ele adiciona um novo registro
			$this->produtos->addProduto($dados);
		}	
					
		//Fazemos um redicionamento para a página 		
		redirect("/produtos");	
		}		

	}
	//Função Apagar registro
	public function apagar($id=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar produtos
		if($id == NULL) {
			redirect('/produtos');
		}

		//Carrega o Model Produtos				
		$this->load->model('produtos_model', 'produtos');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->produtos->getProdutoByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarProdutos do produtos_model
			$this->produtos->apagarProduto($query->id);
			redirect('/produtos');

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar produtos
			redirect('/produtos');
		}	
	}
		
}
