<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="sessao.php" method="post">
        <h1 class="titulo-conteudo">
            Tela de Login
        </h1>
        <div>
            <label for="user">Usuário</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="text" name="password" id="password">
        </div>
        <div class="conteiner-btn">
            <button type="submit">Entrar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>