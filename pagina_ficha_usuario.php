<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha</title>
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
<?php
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO ($dsn, $user, $password);

$id_usuarios = $_GET['id_usuario'];

$select = 'SELECT tb_pessoa.*, tb_usuario.* FROM tb_pessoa INNER JOIN tb_usuario ON tb_pessoa.id = tb_usuario.id  WHERE tb_pessoa.id = ' . $id_usuarios;

$dados = $banco->query($select)->fetch();


?>
<body>
    
<form action="#" >
        
        <label>Nome de Usuario</label>
        <input type="text" name="usuario" disabled  value="<?php echo $dados ['usuario']?>">

        <label>Nome verdadeiro</label>
        <input type="text" name="nome" disabled  value="<?php echo $dados ['nome']?>">

        <label>Senha</label>
        <input type="passsword" name="senha" disabled  value="<?php echo $dados ['senha']?>">

        <label>Ano Nascimento</label>
        <input type="number" name="nasc" disabled  value="<?php echo $dados ['ano_nascimento']?>">

        <label>CPF</label>
        <input type="number" name="cpf" disabled  value="<?php echo $dados ['cpf']?>">

        <label>Telefone 1</label>
        <input type="number" name="tel1" disabled  value="<?php echo $dados ['telefone_1']?>">

        <label>Telefone 2</label>
        <input type="number" name="tel2" disabled  value="<?php echo $dados ['telefone_2']?>">

        <label>Logradouro</label>
        <input type="text" name="logradouro" disabled  value="<?php echo $dados ['logradouro']?>">

        <label>Numero da Casa</label>
        <input type="number" name="ncasa" disabled  value="<?php echo $dados ['n_casa']?>">

        <label>Bairro</label>
        <input type="text" name="bairro" disabled  value="<?php echo $dados ['bairro']?>">

        <label>Cidade</label>
        <input type="text" name="cid" disabled  value="<?php echo $dados ['cidade']?>">





</body>
</html>