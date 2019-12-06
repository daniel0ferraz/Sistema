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
        <li><a href="http://localhost/Atividade/itemvendas">Inicio</a></li>          
        <li class="active">Adicionar Item Vendas</li>
      </ol> 
    </div>


    <form action="<?php echo base_url(); ?>/itemvendas/salvar/" name="form_add" method="post">
      <legend class="text-center">Editar Item Vendas</legend>

      <!-- Input text nome do produtos -->
       <div class="form-group">
          <label>Codigo </label>
          <input type="text" name="nome" value="<?php echo $itemvenda->codigo?>" class="form-control">
        </div>

      <div class="form-group">
          <label>Codigo do Produto</label>
          <input type="text" name="nome" value="<?php echo $itemvenda->codigoProduto?>" class="form-control">
        </div>
  
      <div class="form-group">
          <label>Quantidade</label>
          <input type="text" name="nome" value="<?php echo $itemvenda->quantidade?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Valor Venda</label>
          <input type="text" name="cpf" value="<?php echo $itemvenda->val_venda?>" class="form-control">
        </div>
  
        <div class="form-group">
          <label>Valor Compra</label>
          <input type="text" name="rg" value="<?php echo $itemvenda->val_compra?>" class="form-control">
        </div>

        <div class="form-group">
          <label>venda codigo</label>
          <input type="text" name="vendas_codigo" value="<?php echo $itemvenda->vendas_codigo?>" class="form-control">
        </div>


    


       <input type="hidden" name="id" value="<?php echo $itemvenda->id ?>">
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
