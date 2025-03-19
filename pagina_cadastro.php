<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    form {

        width: 500px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2px;


    }

    
</style>

<body>
    
<form name="cadastro" action="auxcadastro.php" method="POST" onsubmit="return validarFormulario()">
        <h2>CADASTRE-SE AQUI</h2>


        <label>Nome de Usuario</label>
        <input type="text" required name="usuario">

        <label>Nome verdadeiro</label>
        <input type="text" required name="nome" >

        <label>Senha</label>
        <input type="text"  required name="senha"  >

        <label>Ano Nascimento</label>
        <input type="number" required name="nasc">

        <label>CPF</label>
        <input type="number" required name="cpf">

        <label>Telefone 1</label>
        <input type="number" required name="tel1">

        <label>Telefone 2</label>
        <input type="number" required name="tel2">

        <label>Logradouro</label>
        <input type="text" required name="logradouro">

        <label>Numero da Casa</label>
        <input type="number" required name="ncasa">

        <label>Bairro</label>
        <input type="text" required name="bairro">

        <label>Cidade</label>
        <input type="text" required name="cid">



        <input type="submit" class="btn btn-primary" value="Cadastrar">


    </form>
    <script src="validacoes.js"></script>
</body>

</html>
