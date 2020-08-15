<?php

$server = 'crud-mysql'; 
$user = 'root';
$pass = 'root';
$db = 'crudg'; 

try {
    $pdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    $msg = $e->getMessage();
    echo "Não foi possivel se conectar ao BD: $msg";
}
