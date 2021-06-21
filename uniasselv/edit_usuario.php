<?php
session_start();
include_once("conexao/conexao.php");
$id =filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$result_usuario ="SELECT * FROM cadastro_os WHERE id ='$id'";
$resultado_usuario = mysqli_query($mysqli,$result_usuario);

$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>editar usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/editarOS.css" />

</head>

<body>



<form method="POST" action="conexao/proc_edit_usuario.php">
<section class="relatorio">


                        <br><h2>Relatório da OS</h2>
                        <br><label class="form1" for="status">OS</label>         <input class="a1"type="text" name="id" value="<?php echo$row_usuario["id"] ?>"></td>
                        <br><label class="form1" for="status">Nome</label>       <input class="a1" type="text" name="nome1" value="<?php echo $row_usuario["nome"] ?>"> 
                        <br><label class="form1" for="status">Cpf</label>        <input class="a1" type="text" name="cpf1" value="<?php echo $row_usuario["cpf"] ?>"> 
                        <br><label class="form1" for="status">Endereço</label>   <input class="a1" type="text" name="endereco1" value="<?php echo $row_usuario["endereco"] ?>">  
                        <br><label class="form1" for="status">Marca</label>      <input class="a1" type="text" name="marca1" value="<?php echo $row_usuario["marca"] ?>"> 
                        <br><label class="form1" for="status">Técnico</label>    <input class="a1" type="text" name="tecnico1" value="<?php echo $row_usuario["tecnico"] ?>"> 
                        <br><label class="form1" for="status">Data</label>       <input class="a1" type="text" name="data1" value="<?php echo $row_usuario["data"] ?>">  
                        <br><label class="form1" for="status">Valor</label>      <input class="a1" type="text" name="valor1" value="<?php echo $row_usuario["valor"] ?>"> 
                        <br><label class="form1" for="status">Contato</label>    <input class="a1" type="text" name="telefone1" value="<?php echo$row_usuario ["telefone"] ?>"> 
                          
                
                            <br><select id="mySelect" name="status">
                                <option class="cor1" value="em andameto">em andamento</option>
                                <option class="cor2" value="pendente">pendente</option>
                                <option class="cor3" value="concluido">concluido</option>
                            </select>
                            
                  
                        <br> <input class="editar1"  type="submit" value="editar">
        <br><br><a type="button" class="voltar" href="cadastro.php">Voltar</a>
     
    </section>
    </form>

</body>

</html>
