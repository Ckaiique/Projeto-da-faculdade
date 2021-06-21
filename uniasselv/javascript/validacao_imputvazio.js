function validateForm() {
    var senha = document.forms["login"]["senha"].value;
    var email = document.forms["login"]["email"].value;
    if (email == "") {
      alert("falta preencher email");
      return false;
    }
    if(senha == ""){
        alert("falta preencher a senha");
        return false;

    }
  }



  function validateCadastro() {
    var nome = document.forms["cadastro_os"]["nome"].value;
    var cpf = document.forms ["cadastro_os"]["cpf"].value;
    var endereco = document.forms["cadastro_os"]["endereco"].value;
    var marca = document.forms["cadastro_os"]["marca"].value;
    var tecnico = document.forms["cadastro_os"]["tecnico"].value;
    var data = document.forms["cadastro_os"]["data"].value;
    var valor = document.forms["cadastro_os"]["valor"].value;
    var telefone = document.forms["cadastro_os"]["telefone"].value;
    
    if (nome == "") {
      alert("falta preencher Nome")
      return false
    }

    if (cpf == "") {
      alert("falta preencher o CPF")
      return false
    }

    if (endereco == "") {
      alert("falta preencher Endereço")
      return false;
    }

    if (marca == "") {
      alert("falta preencher Marca")
      return false
    }

    if (data == "") {
      alert("falta preencher Data")
      return false
    }

    if (valor == "") {
      alert("falta preencher Valor")
      return false
    }

    if (telefone == "") {
      alert("falta preencher Telefone")
      return false
    }

  }




