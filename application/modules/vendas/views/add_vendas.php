<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adiconar Cliente</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('bibliotecas/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
    <style type="text/css">

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
        <li><a href="http://localhost/Atividade/vendas">Inicio</a></li>          
        <li class="active">Nova Venda</li>
      </ol> 
    </div>


    <form action="<?php echo base_url(''); ?>vendas/salvar/" name="form_add" method="post">
      <legend class="text-center">Nova Venda</legend>

      <!-- Input text nome do produtos -->
  
        <div class="form-group ">
          <label>Código</label>
          <input type="text" name="codigo" value="" class="form-control">
        </div>


        <div class="form-group">
          <label>Data Venda</label>
          <input type="text" name="dataVenda" value="" class="form-control">
        </div>
  
        <div class="form-group">
          <label>Valor Total</label>
          <input type="text" name="valorTotal" value="" class="form-control">
        </div>

        <div class="form-group">
          <label>Valor Pago</label>
          <input type="text" name="valorPago" value="" class="form-control">
        </div>


      <div class="form-group">
        <label>Clientes Codigo</label>
        <input type="text" name="clientes_codigo" value="" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>

    </div>
  </form><!--Fim formulário de novo cadastro  -->


</div>




  <script src="<?php echo base_url('js/jquery-3.1.1.min.js')?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
</body>
</html>
