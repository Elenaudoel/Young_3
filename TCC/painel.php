<?php
session_start();
$nome_usuario = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    <h1>Bem vindo <?php echo $nome_usuario;?></h1>
    <p> <a href="logout.php">sair </a> </p>
    <a href="https://www.hupishop.com.br/tenis-olympikus-barra-masculino-cinza-e-preto/p/3751">
        <img src="https://static.hupishop.com.br/public/hupibikes/imagens/produtos/tenis-olympikus-barra-masculino-cinza-e-preto-637533390b9e0.png" alt=""> <h2>Tênis Olympikus Barra Masculino Cinza e Preto <br> preço:179,90</h2>
    </a>

    <footer>
        <p>"Não concordo nem discordo, muito pelo contrário"</p>
    </footer>
</body>
</html>