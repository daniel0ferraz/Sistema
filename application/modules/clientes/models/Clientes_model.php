<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clientes_model extends CI_Model
{	
    //Lista todos os clientes da tabela clientes	
    public function getCliente()
    {                                 
        $query = $this->db->get("clientes");
        return $query->result();
    }

    
    //Adiciona um novo cliente na tabela produtos
    public function addCliente($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('clientes', $dados);		
	endif;
    }   

    	//Get cliente by id
        public function getClienteByID($id=NULL)
        {
        if ($id != NULL):
            //Verifica se a ID no banco de dados
            $this->db->where('id', $id);        
            //limita para apenas um regstro    
            $this->db->limit(1);
            //pega os produto
            $query = $this->db->get("clientes");        
            //retornamos o produto
            return $query->row();   
        endif;
        } 

    //Atualizar um produto na tabela cliente
    public function editarCliente($dados=NULL, $id=NULL)
    {
    //Verifica se foi passado $dados e $id    
    if ($dados != NULL && $id != NULL):
        //Se foi passado ele vai a atualização
        $this->db->update('clientes', $dados, array('id'=>$id));      
    endif;
    }   

    //Apaga um cliente na tabela cliente 
    public function apagarCliente($id=NULL){
        //Verificamos se foi passado o a ID como parametro
        if ($id != NULL):
            //Executa a função DB DELETE para apagar o produto
            $this->db->delete('clientes', array('id'=>$id));            
        endif;
    }  
       	 	
}