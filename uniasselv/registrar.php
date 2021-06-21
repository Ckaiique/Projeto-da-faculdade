


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
  <link rel="stylesheet" href="css/cadastrarcliente.css">
  <img src="img/logotipo20.png">
</head>

<body>
  <div id="main-container">
    <h1>Cadastro </h1>
    <form id="register-form" action="conexao/cadrastro_registrar.php" method="POST">

      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email"  placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="full-box">
        <label for="email">CPF</label>
        <input  name="cpf"  placeholder="Digite seu CPF" data-min-length="2" data-cpf-validate>
      </div>
      <div class="half-box spacing">
        <label for="name">Nome</label>
        <input type="text" name="usuario"placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box">
        <label for="lastname">Sobrenome</label>
        <input type="text" name="sobrenome"  placeholder="Digite seu sobrenome" data-required data-only-letters>
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha" data-password-validate data-required>
      </div>
      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="confsenha"  placeholder="Digite novamente sua senha" data-equal="password">
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar">
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>

</body>

</html>