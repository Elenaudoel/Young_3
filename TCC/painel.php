<?php
session_start();
$nome_user = $_SESSION['user'];
include('../Connections/connections.php');
$sql = 'SELECT * FROM armazem';
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Bem vindo <?php echo $nome_user; ?></h1>
    <p class="sair_btn"> <a href="logout.php">sair </a> </p>

    <div class="main-content">

        <div>
            <?php if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    echo '<div class="itens">';
                    echo '<a href="' . $linha['site'] . '">' . $linha['nome']  . '</a>';
                    echo '<td>' . $linha['valor'] . '</td>';
                    echo '<img class="img_tenis" src="' . $linha['link'] . '">';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
    
    <footer>
        <p>"Não concordo nem discordo, muito pelo contrário"</p>
    </footer>
</body>

</html>