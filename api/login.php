<?php

session_start();
require ('../database/conexao.php');

$email = $_POST['email'];
$password = $_POST['password'];

function loginAluno($conexao, $email, $password) {

    $query = 'SELECT * FROM alunos WHERE email = :email AND cpf = :cpf';

    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cpf', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "login sucedido";
        
        $aluno = $stmt->fetch();
        
        $_SESSION['logado'] = true;
        $_SESSION['id'] = $aluno['id'];

    } else {
        echo "Login falhou";
    }
}

loginAluno($conexao, $email, $password);