<?php

$host = 'localhost';
$user = 'root';
$password = '';
$banco = 'gestaoEducar+';
$port= 3308;

try {
    $conexao = new \pdo ("mysql:host=$host; port=$port; dbname=$banco", $user, $password);
    // echo 'conexao com banco estabelecida';
} catch (\PDOException $e) {
    echo "Error: conexão com o banco de dados não realixada com sucesso" . $e->getMessage();
}