<?php
include('../Connections/connections.php');

if ($_SERVER['REQUEST_METHOD'] = 'POST')
{
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos (id, nome, valor, quantidade) VALUES (NULL,'$nome','$valor','$quantidade')";

    if($mysqli->query($sql) == TRUE)
    {
        header('location: listar_produtos.php');
        exit();
    }
    else
    {
        echo'Deu ruim, sou uma farsa ;-;' . $mysqli->error;
    }
    $mysqli->close();
}
?>