<?php
session_start();
include("conexao/conexao.php");
include('validacao/verifica_login.php');
include('conexao/consulta.php');



?>


<h2>Olá,<?php echo $_SESSION['email'] ?></h2>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Cadastrar OS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css" />

    
    

</head>


<body>
     <a href="validacao/destroi_session.php"><input class="sair" id="btn-submit" type="submit" value="Sair"></a> 
     
     <form class="OS" method="POST" name="cadastro_os" action="conexao/insert_os_cadastro.php" onsubmit="return validateCadastro()">

        <h2>Cadastrar OS</h2>
        <div class="nome">
            <label>Nome</label>
            <input name="nome" type="text" id="nome"  placeholder="Nome do Cliente">
        </div>
        <div class="CPF">
            <label>CPF</label>
            <input name="cpf" type="text" id="cpf" placeholder="Digite o CPF">
        </div>
        <div class="endereço">
            <label>Endereço</label>
            <input name="endereco" type="text" id="endereço" placeholder="Endereço">
        </div>
        <div class="marca">
            <label>Marca do equipamento</label>
            <input name="marca" type="text" id="marca" placeholder="Marca do equipamento">
        </div>
        <div class="tecnico">
            <label>Técnico</label>
            <input name="tecnico" type="text" id="tecnico" placeholder="Tecnico responsavel">
        </div>
        <div class="data">
            <label>Data</label>
            <input name="data" type="date" id="data" placeholder="dd/mm/aaaa">
        </div>
        <div class="valor">
            <label>Valor</label>
            <input name="valor" type="text" id="tecnico" placeholder="$$$$$">
        </div>

        <div class="valor">
            <label>Telefone</label>
            <input name="telefone" type="text" id="tecnico" placeholder="(xx)000000000">
            
        </div>
        <div class="valor">
            <label>Status</label>
            <input name="status" type="text" value="Pendente">
            
        </div>
        <div class="valor">
            <label>Descrição</label>
            <input name="descricao" type="text" >
            
            
        </div>

        <div class="botao">
            <input id="btn-submit" type="submit" value="Enviar">
        </div>
    </form>


    <form class="consulta10" method="POST" action="cadastro.php">
        <div class="US">
            <label class="cpf1">Consulta</label>

            <input name="cpf" class="consultar3" type="text" placeholder="Digite o CPF">

            <input class="botao10" id="btn-submit" type="submit" value="Buscar">
        </div>
    </form>

 <form action="cadastro.php" method="POST">

    <section class="relatorio">
        
                        
                      
                   
                    <?php while($dado = $con->fetch_array()) { ?>
                           
                           <h2> Relatório de OS</h2>
                           <br><label class="form1" for="status">Status</label>        <input class="a1" type="text" name="status" value="<?php echo $dado["status"] ?>"> 
                           <br><label class="form1" for="id">OS</label>                <input class="a1" type="text" name="id" value="<?php echo $dado["id"] ?>"> 
                           <br><label class="form1" for="nome1">Nome</label>           <input class="a1" type="text" name="nome1" value="<?php echo $dado["nome"] ?>"> 
                           <br><label class="form1" for="cpf1">Cpf</label>             <input class="a1" type="text" name="cpf1" value="<?php echo $dado["cpf"] ?>"> 
                           <br><label class="form1" for="endereco1">Endereço</label>   <input class="a1" type="text" name="endereco1" value="<?php echo $dado["endereco"] ?>"> 
                           <br><label class="form1" for="marca1">Marca</label>         <input class="a1" type="text" name="marca1" value="<?php echo $dado["marca"] ?>"> 
                           <br><label class="form1" for="tecnico1">Técnico</label>     <input class="a1" type="text" name="tecnico1" value="<?php echo $dado["tecnico"] ?>"> 
                           <br><label class="form1" for="data1">Data</label>           <input class="a1" type="text" name="data1" value="<?php echo $dado["data"] ?>"> 
                           <br><label class="form1" for="valor1">Valor</label>         <input class="a1" type="text" name="valor1" value="<?php echo $dado["valor"] ?>"> 
                           <br><label class="form1" for="telefone1">Telefone</label>   <input class="a1" type="text" name="telefone1" value="<?php echo $dado["telefone"] ?>"> 
                           <br><label class="form1" for="descricao">Descriçao</label>   <input class="a1" type="text" name="descricao" value="<?php echo $dado["descricao"] ?>">  
                               
                               
                               
                               <div class="editar"><?php echo "<a href='edit_usuario.php?id=". $dado['id'] . "'>Editar</a><br><hr>"; ?></div>
                          
                    <?php  } ?>
                    
               
                
                
            
         
       
    </section>
    </form>

</body>

</html>