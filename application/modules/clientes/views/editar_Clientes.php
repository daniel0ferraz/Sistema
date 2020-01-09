<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atualizar Clientes</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('bibliotecas/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
    <style type="text/css">

      .container{
        
      }
      
      form{
        border: 1px solid #ddd;
        padding: 8px;
      }
      legend{
        border: none;
        font-size: 22px;
        font-weight: 500;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>


   <div class="container">
     <div class="row">

      <ol class="breadcrumb">
        <li><a href="http://localhost/Atividade/clientes">Inicio</a></li>          
        <li class="active">Adicionar Cliente</li>
      </ol> 
    </div>


 <form action="<?php echo base_url(); ?>/clientes/salvar/" name="form_add" method="post">
      <legend class="text-center">Editar Cliente</legend>

      <!-- Input text nome do produtos -->
  
      <div class="form-group">
          <label>Nome Produto</label>
          <input type="text" name="nome" value="<?php echo $clientes->nome?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Cpf</label>
          <input type="text" name="cpf" value="<?php echo $clientes->cpf?>" class="form-control">
        </div>
  
        <div class="form-group">
          <label>Rg</label>
          <input type="text" name="rg" value="<?php echo $clientes->rg?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Telefone</label>
          <input type="text" name="telefone" value="<?php echo $clientes->telefone?>" class="form-control">
        </div>


      <div class="form-group">
        <label>Email</label>
        <input type="text" name="Email" value="<?php echo $clientes->Email?>" class="form-control">
      </div>
       <input type="hidden" name="id" value="<?php echo $clientes->id ?>">
      <button type="submit" class="btn btn-success">Atualizar</button>

    </div>
  </form><!--Fim formulário de novo cadastro  -->


</div>




  <script src="<?php echo base_url('js/jquery-3.1.1.min.js')?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
