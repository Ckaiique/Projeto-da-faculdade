<?php

// aqui inclui a minha conexao com o banco de dados

session_start();
include('conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location:/uniasselv/index.php ');
    exit();
}


// vou fazer meu acesso do login via POST 

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

//aqui eu crei uma variavel para  poder receber o comando do banco de dados 
$query = "select * from tecnico where email = '{$email}' and senha = ('{$senha}')";

$result = mysqli_query($mysqli, $query);
$row = mysqli_num_rows($result);

// aqui fiz uma comparacao se o result for true ou 1  ele redireciona a pagina se nao ele continua no na tela de login
if ($row == 1) {
    $_SESSION['email'] = $email;
    header('Location:/uniasselv/cadastro.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location:/uniasselv/index.php');
    exit();
}
