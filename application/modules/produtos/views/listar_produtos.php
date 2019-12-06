<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabela Produtos</title>

  <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>">
   <link rel="stylesheet" href="<?php echo base_url('bibliotecas/bootstrap/css/bootstrap.min.css'); ?>">
   <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style>
  .margin {
    margin-bottom: 15px;
  }
  
</style>

<body>

 <nav class="navbar navbar-default">
    <div class="container">
     <div class="navbar-header">
       <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
       </button>

       <a href="#" class="navbar-brand">Sistema de cadastro</a>

     </div>

     <div class="collapse navbar-collapse" id="barra-navegacao">
      <ul class="nav navbar-nav ">
       <li><a href="http://localhost/Atividade/produtos">Produtos</a></li>
       <li><a href="http://localhost/Atividade/vendas">Vendas</a></li>
       <li><a href="http://localhost/Atividade//itemvendas">Item Vendas</a></li>
       <li><a href="http://localhost/Atividade/clientes">Clientes</a></li>
      </ul>

       <ul class="nav navbar-nav navbar-right">
       <li><a href="login/logout">Sair</a></li>
      </ul>

     </div>
  </nav>
  


  <div class="container">
    <div class="page-header">
      <h2>Produtos</h2>
    </div>


    <a class="btn btn-success margin" href='produtos/add'>Cadastrar Novo</a>
    


  
     <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Nome Produto</th>
          <th>Valor Compra</th>
          <th>Valor Venda</th>
          <th>Descrição</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
        <?php
        
        foreach  ($produtos as $produto)
        {       
          echo '<tr>';
          echo '<td>'.$produto->codigo.'</td>'; 
          echo '<td>'.$produto->nome_produto.'</td>'; 
          echo '<td>'.$produto->val_compra.'</td>';
          echo '<td>'.$produto->val_venda.'</td>';
          echo '<td>'.$produto->descricao.'</td>';
          echo '<td>';
  
           echo '<a href="produtos/editar/'.$produto->id.'" title="Editar cadastro" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';

           echo ' <a href="produtos/apagar/'.$produto->id.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
          echo '</td>';
          echo '</tr>';
          
        }
        ?>
      </tbody>
    </table>
    </div>



     <div class="modal fade" id="modal-id">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Cadastrar Produto</h4>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url(); ?>/produtos/salvar/" name="form_add" method="post">
    

      <!-- Input text nome do produtos -->
  
        <div class="form-group">
          <label>Nome Produto</label>
          <input type="text" name="nome_produto" value="" class="form-control">
        </div>

        <div class="form-group">
          <label>Codigo</label>
          <input type="text" name="codigo" value="" class="form-control">
        </div>
  
        <div class="form-group">
          <label>Valor Compra</label>
          <input type="text" name="val_compra" value="" class="form-control">
        </div>

        <div class="form-group">
          <label>Valor Venda</label>
          <input type="text" name="val_venda" value="" class="form-control">
        </div>


      <div class="form-group">
        <label>Descricao</label>
        <input type="text" name="descricao" value="" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>

    </div>
  </form><!--Fim formulário de novo cadastro  -->

     
  </div>




  <script src="<?php echo base_url('js/jquery-3.1.1.min.js')?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>