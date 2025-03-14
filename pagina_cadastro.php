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
    
    <form action="auxcadastro.php" method="POST">
        <h2>CADASTRE-SE AQUI</h2>


        <label>Nome de Usuario</label>
        <input type="text" name="usuario">

        <label>Nome verdadeiro</label>
        <input type="text" name="nome">

        <label>Senha</label>
        <input type="passsword" name="senha">

        <label>Ano Nascimento</label>
        <input type="number" name="nasc">

        <label>CPF</label>
        <input type="number" name="cpf">

        <label>Telefone 1</label>
        <input type="number" name="tel1">

        <label>Telefone 2</label>
        <input type="number" name="tel2">

        <label>Logradouro</label>
        <input type="text" name="logradouro">

        <label>Numero da Casa</label>
        <input type="number" name="ncasa">

        <label>Bairro</label>
        <input type="text" name="bairro">

        <label>Cidade</label>
        <input type="text" name="cid">



        <input type="submit" class="btn btn-primary" value="Cadastrar">


    </form>
    
</body>

</html>