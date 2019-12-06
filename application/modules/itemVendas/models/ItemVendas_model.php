<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ItemVendas_model extends CI_Model
{	
    //Lista todos os clientes da tabela clientes	
    public function getItemVenda()
    {                                 
        $query = $this->db->get("itemvenda");
        return $query->result();
    }

    
    //Adiciona um novo cliente na tabela produtos
    public function addItemVenda($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('itemvenda', $dados);		
	endif;
    }   

    	//Get cliente by id
        public function getItemVendaByID($id=NULL)
        {
        if ($id != NULL):
            //Verifica se a ID no banco de dados
            $this->db->where('id', $id);        
            //limita para apenas um regstro    
            $this->db->limit(1);
            //pega os produto
            $query = $this->db->get("itemvenda");        
            //retornamos o produto
            return $query->row();   
        endif;
        } 

    //Atualizar um produto na tabela cliente
    public function editarItemVenda($dados=NULL, $id=NULL)
    {
    //Verifica se foi passado $dados e $id    
    if ($dados != NULL && $id != NULL):
        //Se foi passado ele vai a atualização
        $this->db->update('itemvenda', $dados, array('id'=>$id));      
    endif;
    }   

    //Apaga um cliente na tabela cliente 
    public function apagarItemVenda($id=NULL){
        //Verificamos se foi passado o a ID como parametro
        if ($id != NULL):
            //Executa a função DB DELETE para apagar o produto
            $this->db->delete('itemvenda', array('id'=>$id));            
        endif;
    }  
       	 	
}