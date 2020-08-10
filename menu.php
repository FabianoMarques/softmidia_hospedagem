<?php 
    include_once("tratamento.php"); 
    include_once("conexao_class.php");
    include_once("crud.php");
    include_once("modal_cadastrar.php");
    include_once("modal_atualizar.php");
    include_once("modal_excluir.php");
    include_once("modal_prontuario.php");
    $mysqli = new Conexao();

?>



<head>
<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--load all styles -->
<link href="fontawesome/fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet">

<link href="fontawesome/fontawesome-free-5.14.0-web/css/fontawesome.css" rel="stylesheet">
<link href="fontawesome/fontawesome-free-5.14.0-web/css/brands.css" rel="stylesheet">
<link href="fontawesome/fontawesome-free-5.14.0-web/css/solid.css" rel="stylesheet">

</head>

<div class="container">
    <nav class="navbar navbar-default" style="background-color:white; border-color:white">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">LISTA DE PACIENTES</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#" type="submit" data-toggle="modal" data-target="#myModalCadastrar"><i class="fas fa-user-plus"></i> CADASTRAR PACIENTE</a></li>
        
    </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../bootstrap/js/bootstrap.min.js"></script>