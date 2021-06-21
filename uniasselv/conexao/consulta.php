<?php

@$cpf = $_POST['cpf'];

// aqui  fiz a consulta do banco de dados  e  fiz se  caso acontecer um erro ele apareca na tela
$consulta = " SELECT * FROM cadastro_os WHERE  cpf  = '{$cpf}'";
$con = $mysqli->query($consulta) or die($mysqli->connect_errno);

