
<?php

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);
 // Habilita erros para depuração

$usuarioconfirmar = $_POST['usuarioconfirmar'] ?? '';
$cpfconfirmar = $_POST['cpfconfirmar'] ?? '';
$senhaupdate = $_POST['senhanova'];

$consultaUsuarioeCpf = 'SELECT tb_pessoa.id AS id_pessoa, tb_usuario.id AS id_usuario
                        FROM tb_pessoa
                        JOIN tb_usuario ON tb_pessoa.id = tb_usuario.id_pessoa
                        WHERE tb_pessoa.cpf = :cpf
                        AND tb_usuario.usuario = :usuario'; 
                        // ela renomeia os id das duas tabelas depois junta as informações das duas e define a condição  de como as duas tabelas devem ser combinadas em um só id que seria a chave estrangeira e da o parametro de procurar com base nos campos cpf e usuario
                        //é bom renomear para n dar conflito

$box = $banco->prepare($consultaUsuarioeCpf);

$box->execute([
    ':cpf' => $cpfconfirmar,
    ':usuario' => $usuarioconfirmar
]);

$resultado = $box->fetch(); 

$id_usuario_editar = $resultado['id_usuario'] ;





if(!empty($id_usuario_editar) && ($id_usuario_editar != false)){ 

$atualizar = 'UPDATE tb_usuario SET senha = :senha WHERE id = :id';

$banco->prepare($atualizar)->execute([
    'id' => $id_usuario_editar,
    'senha' => $senhaupdate ,
]);

} else {
    echo '<script>
    alert("Usuario ou CPF invalido tente novamente");
    window.location.replace("pagina_esqueci_senha.php");
  </script>';
}


