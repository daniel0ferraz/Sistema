<html>
<head>
	<meta charset="UTF-8">
	<title>meu template personalite</title>
<style>
	div{border:1px solid;}
	.container{
	width: 80%;
	margin:auto;
}
.cabecalho{
	width: 100%;
	height: 120px;
}
.menu{
	width: 30%;
	height: 400px;
float: left;
}
.central{
	width: 68%;
	height: 400px;
float: right;
}
.rodape{
	width: 100%;
	height: 120px;
	clear: both;
}
</style>

</head>
<body>
	
	<div class="container">
		<?php $this->load->view('Cabecalho'); ?>
		<?php $this->load->view('Menu'); ?>
		<?php $this->load->view('Central'); ?>
		<?php $this->load->view('Rodape'); ?>
	</div>

</body>
</html>