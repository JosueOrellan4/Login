<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<?php
echo '<h1>Auxlogin.php</h1>';



$userForm = $_POST['user'];
$passwordForm = $_POST['password'];


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO ($dsn, $user, $password);

$consultaUsuarioSenha = 'SELECT * FROM tb_usuario WHERE usuario = "' . $userForm . '" AND senha = "' . $passwordForm . '"'; 



$resultado = $banco->query($consultaUsuarioSenha)->fetch();

$status = $resultado['status'];

?>

<?php if ($status == 'admin'){?>
<h1>Bem Vindo USUARIO ADMIN</h1>
<?php } ?>



<h1>Bem Vindo USUARIO COMUM</h1>

<a href="#">cadastrar -comum</a>
<a href="#">abrir - comum</a>

<a href="#" <?= $status != 'admin' ? 'disabled' : '' ?>>editar -admin</a>
<a href="#">Excluir admin</a>


<?php
var_dump($resultado);

if(!empty($resultado) && $resultado != false){ 
    header('location:loginSucesso.php');
} else {
    echo '<script>
alert("Usuario ou Senha invalido.")
window.location.replace("index.php")
</script>';
}

