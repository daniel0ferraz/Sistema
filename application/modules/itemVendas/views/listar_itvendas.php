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
       <li><a href="http://localhost/Atividade/login">Sair</a></li>
      </ul>

     </div>
  </nav>
  



  <div class="container">
    <div class="page-header">
      <h2>Item vendas</h2>
    </div>

  
    <a class="btn btn-success margin" href='itemvendas/add'>Nova Venda</a>

    
 <div class="table-responsive">
	<table class="table table-striped table-hover table">
		<thead>
			<tr>
				<th>Código</th>
				<th>Código do Produto</th>
				<th>Quantidade</th>
				<th>Valor de Venda</th>
				<th>Valor de Compra</th>
				<th>Código de Vendas</th>
				<th>Ações</th>
			</tr>
		</thead>
    <tbody>
        <?php
        
        foreach ($itemvendas as $itemvenda)
        {        
          echo '<tr>';
          echo '<td>'.$itemvenda->codigo.'</td>'; 
          echo '<td>'.$itemvenda->codigoProduto.'</td>'; 
          echo '<td>'.$itemvenda->quantidade.'</td>';
          echo '<td>'.$itemvenda->val_venda.'</td>';
          echo '<td>'.$itemvenda->val_compra.'</td>';
          echo '<td>'.$itemvenda->vendas_codigo.'</td>';
          echo '<td>';
  
           echo '<a href="itemvendas/editar/'.$itemvenda->id.'"class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';

           echo ' <a href="itemvendas/apagar/'.$itemvenda->id.'" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
          echo '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
      </div>
	</table>
    </div>

  


  <script src="<?php echo base_url('js/jquery-3.1.1.min.js')?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>