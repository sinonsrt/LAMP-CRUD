<?php

    include "../config/connect.php";
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if (!empty($id)){
        $result_user = "DELETE FROM pessoas WHERE id ='$id'";
        $resultado_user = mysqli_query($conn, $result_usuario);
        if (mysqli_affected_rows($conn)){
            $_SESSION['$msg'] = "<p> Usuario Apagado </p>";
            header("Location: paginas/listar-pessoa.php");
        } else {
            $_SESSION['$msg'] = "<p> Usuario não apagado </p>";
            header("Location: paginas/listar-pessoa.php");
        }
    }
