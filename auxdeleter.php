<?php



$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO ($dsn, $user, $password);

$idDeletar = $_GET ['id_usuario'];

$delete = 'DELETE FROM tb_usuario WHERE id = :id';

$banco->prepare($delete)->execute([
    'id' => $idDeletar
]);


$delete = 'DELETE FROM tb_pessoa WHERE id = :id';

$banco->prepare($delete)->execute([
    'id' => $idDeletar
]);