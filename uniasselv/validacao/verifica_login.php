<?php
// se minha  sessao email nao existir ela  ira  redirecionar para o index

if(!$_SESSION['email']){
    header('location:/uniasselv/index.php');
    exit();
}