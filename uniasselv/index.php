<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <img src="img/logotipo20.png">
  <title> Login</title>
  <link rel="stylesheet" href="css/login.css"/>
  <script src="javascript/validacao_imputvazio.js"></script>
</head>

<body>
  <div id="main-container">
    <h1>Login</h1>
    <form id="register-form" name="login" action="conexao/login_conexao.php" method="POST" onsubmit="return validateForm()">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Digite sua senha" required>
      </div>

      <?php
      if (isset($_SESSION['nao_autenticado'])) :
      ?>
        <div class="notification ">
          <style>
            p {
              color: red;
            }
          </style>
          <strong>
            <p> ERRO: Usuário ou senha inválidos.</p>
          </strong>
        </div>
      <?php
      endif;
      unset($_SESSION['nao_autenticado']);
      ?>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="OK">
      </div>

      <div class="template">
        <a href="tecnico_login.php">Área Técnica</a>
      </div> <br>
      <div class="template">
        <a href="registrar.php"> Registrar</a>
      </div>


    </form>
  </div>
</body>

</html>