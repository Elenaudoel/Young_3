<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - login com DB</title>
</head>
<body>
    <h1>
        Acesse a sua conta
    </h1>
    <form action="" method="post">
        <div>
            <label>Email</label>
            <input type="password" name="email" required>
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="pass" required>
        </div>
        <button type="submit">Entre</button>
    </form>
</body>
</html>


<?php
include('conexao.php');

if(isset($_POST['email'])|| isset($_POST["pass"]))
{
    if(strlen($_POST['email']) == 0 )
    {
        echo "preencha o seu e-mail";
    }
    else if (strlen($_POST['pass']) == 0 )
    {
        echo"preencha a sua senha";
    }
    else
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql_codigo = "SELECT * FROM dados WHERE email = '$email' AND senha = '$pass'";
        $sql_query = $mysqli->query($sql_codigo) or die("Falha de execução". $mysqli->error); 
        $quantidade = $sql_query->num_rows;
        
        if ($quantidade == 1)
        {
            $usuario = $sql_query->fetch_assoc();
            echo $usuario['nome'];
            echo $usuario['id'];
        }
    }
}

?>

