<?php
session_start();
include("conexao/conexao.php");
include('validacao/verifica_login.php');
include('conexao/consulta.php');



?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Cliente</title>
    <link rel="stylesheet" href="css/consulta.css" />
    <link rel="stylesheet" type="text/css" href="css/cadastro.css" />

    <a href="validacao/destroi_session.php"><input class="sair" id="btn-submit" type="submit" value="Sair"></a> 

</head>


<body>


 

    <form action="consulta.php" method="POST">

        <div class="half-box">
            <h2>Consultar OS</h2>
            <label for="CPF"><b>Consulta</b></label>
            <input  name="cpf" type="text" id="CPF" placeholder="digite o CPF">
            <input id="btn-submit" type="submit" value="Buscar">
        </div>

    </form>


    <form action="consulta.php" method="POST">

    <section class="formulario">
      
                        
                    
                
                    <?php while($dado = $con->fetch_array()) { ?>
                      
                        <h3 class="titulo">Ordem de Serviço</h3>
                        <br><label class="form1" for="status">Status</label>      <input class="a1" type="text" name="status" value="<?php echo $dado["status"] ?>"> 
                        <br><label class="form1" for="id">OS</label>                <input class="a1" type="text" name="id" value="<?php echo $dado["id"] ?>"> 
                        <br><label class="form1" for="nome1">Nome</label>      <input class="a1" type="text" name="nome1" value="<?php echo $dado["nome"] ?>"> 
                        <br><label class="form1" for="cpf1">Cpf</label>      <input class="a1" type="text" name="cpf1" value="<?php echo $dado["cpf"] ?>"> 
                        <br><label class="form1" for="endereco1">Endereço</label>      <input class="a1" type="text" name="endereco1" value="<?php echo $dado["endereco"] ?>"> 
                        <br><label class="form1" for="marca1">Marca</label>      <input class="a1"type="text" name="marca1" value="<?php echo $dado["marca"] ?>">  
                        <br><label class="form1" for="tecnico1">Técnico</label>      <input class="a1" type="text" name="tecnico1" value="<?php echo $dado["tecnico"] ?>">  
                        <br><label class="form1" for="data1">Data</label>      <input class="a1" type="text" name="data1" value="<?php echo $dado["data"] ?>"> 
                        <br><label class="form1" for="valor1">Valor</label>      <input class="a1" type="text" name="valor1" value="<?php echo $dado["valor"] ?>"> 
                        <br><label class="form1" for="telefone1">Contato</label>      <input class="a1" type="text" name="telefone1" value="<?php echo $dado["telefone"] ?>"> 
                        <br><label class="form1" for="descricao">Descriçao</label>   <input class="a1" type="text" name="descricao" value="<?php echo $dado["descricao"] ?>">  
                        
                          
                        
                    <?php  } ?>
                    
              
                
                
            
         
        </div>
    </section>
    </form>




</body>