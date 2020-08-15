<?php
	include "../config/connect.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Cadastro de Pessoas - CRUD</title>
</head>
<body>
<div class="container">
   	 <h1 class="float-left mt-4">Listar Pessoas</h1>

		<div class="float-right mt-5">
			<a href="../index.php" class="btn btn-success">Cadastrar</a>
		</div>

		<div class="clearfix"></div>

		<table class="table table-striped table-bordered table-hover mt-5" id="tabela">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nome</td>
					<td>CPF</td>
    	            <td>E-mail</td>
    	            <td>Data de Nascimento</td>
				</tr>
			</thead>
  	  <tbody>
		  <?php
			  $sql = "SELECT * FROM pessoas ORDER BY nome";
			  $consult = $pdo->prepare($sql);
			  $consult->execute();

			  while ( $dados = $consult->fetch(PDO::FETCH_OBJ)){
				  $id				= $dados->id;
				  $nome				= $dados->nome;
				  $cpf		 		= $dados->cpf;
				  $email 			= $dados->email;
				  $datanascimento	= $dados->datanascimento;

				  echo '
				  <tr>
					  <td>'.$id.'</td>
					  <td>'.$nome.'</td>
					  <td>'.$cpf.'</td>
					  <td>'.$email.'</td>
					  <td>'.$datanascimento.'</td>
					  <td>
					  	  <a href="paginas/editar-pessoas/<?= $dados->id ?>" class="btn btn-success btn-sm" title="Editar <?= $dados->id ?>"> Editar </a>
						  <a href="paginas/excluir-pessoa.php?id='.$id.'" class="btn btn-outline-danger btn-sm" onclick="excluir"('.$id.')>Excluir</a>
					  </td>
				  </tr>';
			  }
		  ?>
   	 </tbody>
		</table>
	</div>
	<script>
	function excluir( id ){
		//perguntar
		if(confirm("Deseja mesmo excluir?")){
			//direcionar pra exclusao
			location.href="excluir/cliente/"+id;
		}
	}  
	</script>		
	</body>
</html>