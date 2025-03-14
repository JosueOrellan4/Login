<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<?php
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO ($dsn, $user, $password);

$select = 'SELECT * FROM tb_usuario';

$resultado = $banco ->query($select)->fetchALL();

?>


<table>
    <th>
        <td>id</td>
        <td>usuario</td>
    </th>
    <?php foreach ($resultado as $linha) { ?>
    <tr>
        <td> <?= $linha['id']?> </td>
        <td> <?= $linha['usuario']?></td>
        <td>
            <a href="./pagina_ficha_usuario.php?id_usuario=<?= $linha['id']?>" class="btn btn-primary">Abrir</a>
            <a href="./pagina_editar_usuario.php?id_usuario=<?= $linha['id']?>" class="btn btn-warning">Editar</a>
            <a href="./auxdeleter.php?id_usuario=<?= $linha['id']?>" class="btn btn-danger" >Excluir</a>
        </td>
    </tr>
    <?php } ?>
</table>