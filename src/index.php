<?php
	include "config/connect.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro de Pessoas - CRUD</title>
</head>
<body>
<div class="container mt-4">    
        <h1 class="text-center"> Cadastro de Pessoas </h1>
        <div class="float-right">
        <a class="btn btn-outline-success" href="paginas/listar-pessoa.php">Lista de Pessoas</a>
        </div>
        <form name="formPessoas" method="POST" action="paginas/salvar-pessoa.php">  
		    <div class="row mt-5">
                <div class="col-12 col-md-2">
				    <label for="id"> ID: </label>
				<input type="text" name="id" class="form-control" id="id" placeholder="ID">
    			</div>
			    <div class="col-12 col-md-5">
				    <label for="nome"> Nome: </label>
				<input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o Nome ...">
    			</div>										
    			<div class="col-12 col-md-4">
    				<label for="cpf"> CPF: </label>
    				<input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite o CPF...">
                 </div>
	    		<div class="col-12 col-md-7 mt-3">
	    			<label for="email"> E-mail: </label>
	    			<input type="text" name="email" class="form-control" id="email" placeholder="Digite o e-mail...">
                </div>
	    		<div class="col-12 col-md-4 mt-3">
	    			<label for="datanascimento"> Data de Nascimento: </label>
	    			<input type="text" name="datanascimento" class="form-control" id="datanascimento" placeholder="08/11/2001">
	    		</div>
            </div>
	    	<div class="mt-4 float-right">
	    		<button class="btn btn-outline-success" type="submit"> Salvar </button>
	    		<button class="btn btn-outline-danger" type="reset"> Apagar </button>
	    	</div>
		</form>			
    </div>
</body>
</html>