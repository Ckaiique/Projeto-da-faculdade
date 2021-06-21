<?php
//session_start();
include('conexao.php');   //inclui a conexao com o banco de dados aqui 

//  criei as varias para  poder  enviar meu cadastro ( via POST)
@$email = $_POST['email'];
@$cpf = $_POST['cpf'];
@$usuario = $_POST['usuario'];
@$sobrenome = $_POST['sobrenome'];
@$senha = $_POST['senha'];
@$confsenha = $_POST['confsenha'];



//  so  aqui  fiz uma validaçao,  so vai inserir o cadastro se senha  for  igual a confirmaçao da senha
if ($senha == $confsenha) {

  // criei uma variavel chamada query onde esta recebendo minha funçao do SQl para inserir no banco de dadoos
  $query = "insert into usuario (email,cpf,usuario,sobrenome,senha,confsenha) values ('$email','$cpf','$usuario','$sobrenome','$senha ','$confsenha ')";
  $result = mysqli_query($mysqli, $query);
  @$row = mysqli_num_rows($result);
  echo  "<script> alert('Cadastro feito !');history.back()</script>";
} else {
  echo  "<script> alert('Senhas não coincidem  !');history.back()</script>";
}
