<?php
include('../Connections/connections.php');

if ($_SERVER['REQUEST_METHOD'] = 'POST')
{
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $sit = $_POST['site'];
    $link = $_POST['link'];

    $sql = "INSERT INTO produtos (id, nome, valor, sit ,link ) VALUES (NULL,'$nome','$valor','$sit','$link')";

    if($mysqli->query($sql) == TRUE)
    {
        header('location: painel.php');
        exit();
    }
    else
    {
        echo'Deu ruim, sou uma farsa ;-;' . $mysqli->error;
    }
    $mysqli->close();
}
?>