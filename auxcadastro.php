<?php

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO ($dsn, $user, $password);

$usuariocadastro = $_POST['usuario'];
$nomecadastro = $_POST['nome'];
$senhacadastro = $_POST['senha'];
$nasccadastro = $_POST['nasc'];
$cpfcadastro = $_POST['cpf'];
$tel1cadastro = $_POST['tel1'];
$tel2cadastro = $_POST['tel2'];
$logradourocadastro = $_POST['logradouro'];
$ncasacadastro = $_POST['ncasa'];
$bairrocadastro = $_POST['bairro'];
$cidcadastro= $_POST['cid'];

$cadastrar = 'INSERT INTO tb_usuario(usuario, senha) VALUES (:usuario, :senha)';

$banco->prepare($cadastrar)->execute([
    ':usuario' => $usuariocadastro,
    ':senha' => $senhacadastro
]);

$cadastrar2= 'INSERT INTO tb_pessoa(nome, ano_nascimento, cpf, telefone_1, telefone_2, logradouro, n_casa, bairro, cidade) VALUES (:nome, :ano_nascimento, :cpf, :telefone_1, :telefone_2, :logradouro, :n_casa, :bairro, :cidade)';

$banco->prepare($cadastrar2)->execute([
    ':nome' => $nomecadastro,
    ':ano_nascimento' => $nasccadastro,
    ':cpf' => $cpfcadastro,
    ':telefone_1' => $tel1cadastro,
    ':telefone_2' => $tel2cadastro,
    ':logradouro' => $logradourocadastro,
    ':n_casa' => $ncasacadastro,
    ':bairro' => $bairrocadastro,
    ':cidade' => $cidcadastro //a
]);



