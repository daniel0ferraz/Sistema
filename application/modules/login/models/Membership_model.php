<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership_model extends CI_Model {

function validate()
{
$this->db->where('user', $this->input->post('login'));
$this->db->where('pws', $this->input->post('senha'));
$this->db->where('status', 1); // status deve estar ativo para o login
$query  = $this->db->get('user')->row();
if (count($query) > 0) {
  $row = $query;
  $dados_secao['user'] = $row->user;

  $this->session->set_userdata($dados_secao);
  $this->db->update('user',array('ultimo_acesso' =>date('Y-m-d h:i:s')),array('id' =>$row->id));
  return true; // RETORNA VERDADEIRO
 }
}
#VERIFICA SE O USUARIO ESTÁ LOGADO
function logged($pg_acesso=NULL) {
  $logged = $this->session->userdata('logged');

  if (!isset($logged) || $logged != true){
    redirect(base_url('/login')); 

   
  }
 }
}

/* End of file Membership_model.php */
/* Location: ./application/models/Membership_model.php */


