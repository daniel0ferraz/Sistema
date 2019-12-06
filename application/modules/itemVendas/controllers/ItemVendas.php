<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ItemVendas extends CI_Controller {	
	
	//Página de listar produtos
	public function index()
	{					
		//Carrega o Model Produto
		$this->load->model('itemvendas_model', 'itemvendas');			
		//Criamos um Array dados para armazenas os produtos
		//Executamos a função no produtos_model getProdutos
		$data['itemvendas'] = $this->itemvendas->getItemVenda();
		//Carregamos a view listarprodutos e passamos como parametro a array produtos que guarda todos os produtos da db produtos
		$this->load->view('listar_itvendas', $data);
	}
	//Página de adicionar produto
	public function add()
	{	
		//Carrega o Model Produtos				
		$this->load->model('itemvendas_model', 'itemvendas');					
		//Carrega a View
		$this->load->view('add_itvendas');
	}
	
//Página de editar produto
public function editar($id=NULL)	
{						
	//Verifica se foi passado um ID, se não vai para a página listar produtos
	if($id == NULL) {
		redirect('/itemvendas');
	}

	//Carrega o Model Produtos				
	$this->load->model('itemvendas_model', 'itemvendas');

	//Faz a consulta no banco de dados pra verificar se existe
	$query = $this->itemvendas->getItemVendaByID($id);

	//Verifica que a consulta voltar um registro, se não vai para a página listar produtos
	if($query == NULL) {
		redirect('/itemvendas');
	}
	
	//Criamos uma array onde vai guardar os dados do produto e passamos como parametro para view;	
	$dados['itemvenda'] = $query;

	//Carrega a View
	$this->load->view('editar_itvendas', $dados);		
}


	//Função salvar no DB
	public function salvar()
	{
		 //Verifica se foi passado o campo codigo vazio.
		if ($this->input->post('codigo') == NULL) {
	 	echo 'O compo codigo é obrigatório.';
	 	echo '<a href="http://localhost/Atividade/index.php/itemVendas/add" title="voltar">Voltar</a>';
	 } else {

			//Carrega o Model Cleintes			
			$this->load->model('itemvendas_model', 'itemvendas');

			//Pega dados do post e guarda na array $dados
		$dados['codigo'] = $this->input->post('codigo');
		$dados['codigoProduto'] = $this->input->post('codigoProduto');
		$dados['quantidade'] = $this->input->post('quantidade');
		$dados['val_venda'] = $this->input->post('val_venda');
		$dados['val_compra'] = $this->input->post('val_compra');
		$dados['vendas_codigo'] = $this->input->post('vendas_codigo');

		//Verifica se foi passado via post a id do clientes
		if ($this->input->post('id') != NULL) {		
			//Se foi passado ele vai fazer atualização no registro.	
			$this->itemvendas->editarItemvenda($dados, $this->input->post('id'));
		} else {
			//Se Não foi passado id ele adiciona um novo registro
			$this->itemvendas->addItemvenda($dados);
		}	
					
		//Fazemos um redicionamento para a página 		
	    redirect("/itemvendas");	
		// redirect(base_url('/clientes'));
		}		

	}
	//Função Apagar registro
	public function apagar($id=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar clientes
		if($id == NULL) {
			redirect('/itemvendas');
		}

		//Carrega o Model Clientes				
		$this->load->model('ItemVendas_model', 'itemvendas');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->itemvendas->getItemvendaByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarCliente do Clientes_model
			$this->itemvendas->apagarItemvenda($query->id);
			redirect('/itemvendas');

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar produtos
			redirect('/itemvendas');
		}	
	}
		
}
