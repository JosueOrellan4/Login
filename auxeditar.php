<?php

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO ($dsn, $user, $password);

$editarid = $_POST ['id_usuario_editar'];

$editarsenha = $_POST['senha'];
$editartel1 = $_POST['tel1'];
$editartel2 = $_POST['tel2'];
$editarlogradouro = $_POST['logradouro'];
$ncasaeditar = $_POST['ncasa'];
$bairroeditar = $_POST['bairro'];
$cideditar = $_POST['cid'];

$atualizar = 'UPDATE tb_usuario SET senha = :senha WHERE id = :id';

$banco->prepare($atualizar)->execute([
    'id' => $editarid,
    'senha' => $editarsenha,
]);

$atualizar = 'UPDATE tb_pessoa SET telefone_1 = :telefone_1, telefone_2 = :telefone_2, logradouro = :logradouro, n_casa = :n_casa, bairro = :bairro, cidade = :cidade WHERE id = :id';

$banco->prepare($atualizar)->execute([
':id' => $editarid,
':telefone_1' => $editartel1,
':telefone_2' => $editartel2,
':logradouro' => $editarlogradouro,
':n_casa' => $ncasaeditar,
':bairro' => $bairroeditar,
':cidade' => $cideditar

]);