function validarFormulario() {

    // Validação da nome
    var nome = document.cadastro.nome.value;
    var regexNome = /^[a-zA-Z\s]+$/;  
    if (!regexNome.test(nome)) {
        alert("O nome não pode conter números.");
        document.cadastro.nome.focus();
        return false; 
    }

    // Validação da senha
    var senha = document.cadastro.senha.value;
    if (senha.length < 8) {
        alert("A senha deve conter no mínimo 8 dígitos!");
        document.cadastro.senha.focus();
        return false; // Impede o envio do formulário
    }

    // Validação do CPF (deve ter 11 dígitos)
    var cpf = document.cadastro.cpf.value;
    if (cpf.length !== 11) {
        alert("O CPF deve conter exatamente 11 dígitos!");
        document.cadastro.cpf.focus();
        return false;
    }

    // Validação do telefone (deve ter 10 ou 11 dígitos)
    var telefone1 = document.cadastro.tel1.value;
    
    if (telefone1.length < 10 || telefone1.length > 11) {
        alert("O telefone 1 deve conter 10 ou 11 dígitos!");
        document.cadastro.tel1.focus();
        return false;
    }

    var telefone2 = document.cadastro.tel2.value;

    if (telefone2.length < 10 || telefone2.length > 11) {
        alert("O telefone 2 deve conter 10 ou 11 dígitos!");
        document.cadastro.tel2.focus();
        return false;
    }

    

    // Se todas as validações passarem, o formulário será enviado
    return true;
}
