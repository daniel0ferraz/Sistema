<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('bibliotecas/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Última versão CSS compilada e minificada -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <style type="text/css">
    .box {
      width:480px;
      border: 1px solid #ddd;
      padding: 8px;
      margin:0 auto;
    }

    legend {
      border: none;
      font-size: 22px;
      font-weight: 500;
      margin-top: 10px;
    }

    .container {
      margin-top:80px;
    }
    .box-icon{
      padding:20px;
      text-align: center;
      font-size:50px;
    }
  </style>
</head>

<body>



  <div class="container">
<div class="box">

    <form action="<?php echo base_url('/login/post'); ?>" method="post">

    <div class="box-icon">
     <i class=" glyphicon glyphicon-user"></i>
     <h2>Login</h2>
    </div>

      <div class="form-group ">
        <label>Usuário</label>
        <input type="text" name="login" class="form-control">
      </div>

      <div class="form-group ">
        <label>Senha</label>
        <input type="text" name="senha"  class="form-control">
      </div>

      <button type="submit" class="btn btn-success btn-block">Entrar</button>

    </form>
  </div>
  </div>

  <script src="<?php echo base_url('js/jquery-3.1.1.min.js')?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>

</body>
</html>
