<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    







    form{
        width: 500px;
    }
</style>
<body>
    <form action="auxlogin.php" method="POST">
        <h1>Login</h1>


        <label class="">Usuario</label>
        <input type="text" name="user" >
        
        <label for="" class="">Senha</label>
        <input type="passsword" name="password">
        
        <input type="submit" class="btn btn-primary" value="Entrar">
        <a href="pagina_cadastro.php" class="btn btn-success">Cadastre-se</a>



    </form>
</body>
</html>