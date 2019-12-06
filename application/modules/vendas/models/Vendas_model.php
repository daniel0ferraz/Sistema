<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Vendas_model extends CI_Model
{	
    //Lista todos os clientes da tabela clientes	
    public function getVenda()
    {                                 
        $query = $this->db->get("vendas");
        return $query->result();
    }

    
    //Adiciona um novo cliente na tabela produtos
    public function addVenda($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('vendas', $dados);		
	endif;
    }   

    	//Get cliente by id
        public function getVendaByID($id=NULL)
        {
        if ($id != NULL):
            //Verifica se a ID no banco de dados
            $this->db->where('id', $id);        
            //limita para apenas um regstro    
            $this->db->limit(1);
            //pega os produto
            $query = $this->db->get("vendas");        
            //retornamos o produto
            return $query->row();   
        endif;
        } 

    //Atualizar um produto na tabela cliente
    public function editarVenda($dados=NULL, $id=NULL)
    {
    //Verifica se foi passado $dados e $id    
    if ($dados != NULL && $id != NULL):
        //Se foi passado ele vai a atualização
        $this->db->update('vendas', $dados, array('id'=>$id));      
    endif;
    }   

    //Apaga um cliente na tabela cliente 
    public function apagarVenda($id=NULL){
        //Verificamos se foi passado o a ID como parametro
        if ($id != NULL):
            //Executa a função DB DELETE para apagar o produto
            $this->db->delete('vendas', array('id'=>$id));            
        endif;
    }  
       	 	
}