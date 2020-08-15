<?php

    var_dump($_POST);

    if($_POST){
        $nome = $cpf = $email = $datanascimento = "";

        if(isset($_POST['nome']))
            $nome = $_POST['nome'];

        if(isset($_POST['cpf']))
            $cpf = $_POST['cpf'];

        if(isset($_POST['email']))
            $email = $_POST['email'];

        if(isset($_POST['datanascimento']))
            $datanascimento = $_POST['datanascimento'];

        include "../config/connect.php";

        $sql = "INSERT INTO pessoas (nome, cpf, email, datanascimento) values ( ?, ?, ?, ?)";

        $consult = $pdo->prepare($sql);

        $consult->bindParam(1, $nome);
        $consult->bindParam(2, $cpf);
        $consult->bindParam(3, $email);
        $consult->bindParam(4, $datanascimento);

        if($consult->execute()){
            echo '<script>alert("Registro Salvo");location.href="paginas/listar-pessoa.php";</script>';
        } else {
            echo '<script>alert("Não salvou");location.href="paginas/listar-pessoa.php";</script>';
            echo $consult->errorInfo[2];
        }

        
        
    }