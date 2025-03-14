<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

<form action="auxesquecisenha.php" method="POST">
<h2>Confirmar Nome e CPF para alterar a senha</h2>

<label>Digite seu Nome de Usuario</label>
<input type="text" name="usuarioconfirmar">

<label>Digite seu CPF</label>
<input type="text" name="cpfconfirmar">

<label>Digite sua Nova senha</label>
<input type="text" name="senhanova">

<input type="submit" class="btn btn-primary" value="Enviar">

</form>

</body>
</html>