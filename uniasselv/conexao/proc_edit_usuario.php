<?php
//session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST,'nome1',FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST,'cpf1',FILTER_SANITIZE_SPECIAL_CHARS);
$endereco = filter_input(INPUT_POST,'endereco1',FILTER_SANITIZE_SPECIAL_CHARS);
$marca = filter_input(INPUT_POST,'marca1',FILTER_SANITIZE_SPECIAL_CHARS);
$tecnico =filter_input(INPUT_POST,'tecnico1',FILTER_SANITIZE_SPECIAL_CHARS);
$data = filter_input(INPUT_POST,'data1',FILTER_SANITIZE_SPECIAL_CHARS);
$valor =filter_input(INPUT_POST,'valor1',FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST,'telefone1',FILTER_SANITIZE_SPECIAL_CHARS);
$status = filter_input(INPUT_POST,'status',FILTER_SANITIZE_SPECIAL_CHARS);

$query = "UPDATE cadastro_os  SET nome='$nome', cpf='$cpf', endereco='$endereco', marca='$marca', tecnico='$tecnico', data ='$data',valor ='$valor',telefone='$telefone',status='$status', modified=NOW() WHERE id='$id'";


$result = mysqli_query($mysqli, $query);


@$row = mysqli_num_rows($result);

if ($row != 0) {
  header('Location:/cadastro.php');
} else {
  echo  "<script> alert('Cadastro feito !');history.back()</script>";
}

exit();




