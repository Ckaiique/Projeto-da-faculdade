<?php
//session_start();
include('conexao.php');


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$marca = $_POST['marca'];
$tecnico = $_POST['tecnico'];
$data = $_POST['data'];
$valor = $_POST['valor'];
$telefone = $_POST['telefone'];
$status = $_POST['status'];
$descricao= $_POST['descricao'];


$query = "insert into cadastro_os (nome,cpf,endereco,marca,tecnico,data,valor,telefone,status,descricao) values ('$nome','$cpf','$endereco','$marca','$tecnico ','$data ','$valor','$telefone','$status','$descricao' )";

$result = mysqli_query($mysqli, $query);
@$row = mysqli_num_rows($result);

if ($row != 0) {
  header('Location: index.php');
} else {
  echo  "<script> alert('Cadastro feito !');history.back()</script>";
}
$_SESSION['autenticado'] = true;

exit();
