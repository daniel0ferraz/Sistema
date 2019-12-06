<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Produtos_model extends CI_Model
{	
    //Lista todos os produtos da tabela produtos	
    public function getProdutos()
    {                                 
        $query = $this->db->get("produtos");
        return $query->result();
    }

    
    //Adiciona um novo produtos na tabela produtos
    public function addProduto($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('produtos', $dados);		
	endif;
    }   

    	//Get produtos by id
        public function getProdutoByID($id=NULL)
        {
        if ($id != NULL):
            //Verifica se a ID no banco de dados
            $this->db->where('id', $id);        
            //limita para apenas um regstro    
            $this->db->limit(1);
            //pega os produto
            $query = $this->db->get("produtos");        
            //retornamos o produto
            return $query->row();   
        endif;
        } 

    //Atualizr um produto na tabela produtos
    public function editarProduto($dados=NULL, $id=NULL)
    {
    //Verifica se foi passado $dados e $id    
    if ($dados != NULL && $id != NULL):
        //Se foi passado ele vai a atualização
        $this->db->update('produtos', $dados, array('id'=>$id));      
    endif;
    }   

    //Apaga um produtos na tabela produtos 
    public function apagarProduto($id=NULL){
        //Verificamos se foi passado o a ID como parametro
        if ($id != NULL):
            //Executa a função DB DELETE para apagar o produto
            $this->db->delete('produtos', array('id'=>$id));            
        endif;
    }  
       	 	
}