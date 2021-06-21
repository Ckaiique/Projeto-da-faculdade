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
  <title> Login Técnico</title>
  <link rel="stylesheet" href="css/login.css" />
</head>

<body>
  <div id="main-container">
    <h1>Área Técnica</h1>
    <form id="register-form" action="conexao/Login_tecnico.php" method="POST">
      <div class="full-box">
        <label for="email">Usuario</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Digite sua senha" data-password-validate data-required>
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
            <p> ERRO: Usuário ou senha inválidos ou você nao é o tecnico.</p>
          </strong>
        </div>
      <?php
      endif;
      unset($_SESSION['nao_autenticado']);
      ?>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="OK">
      </div>

    </form>
  </div>
</body>

</html>