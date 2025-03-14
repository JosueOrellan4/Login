

<?php


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO ($dsn, $user, $password);

$usuarioconfirmar = $_POST['usuarioconfirmar'];
$cpfconfirmar = $_POST['cpfconfirmar'];




$resultado = $banco->query($consultaUsuarioCpf)->fetch();


if(!empty($resultado) && $resultado != false){ 
    header('location:loginSucesso.php');
} else {
    header('location:pagina_esqueci_senha.php');
}

