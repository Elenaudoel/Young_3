<?php

include('../Connections/connections.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $codigo_sql = "SELECT nome,valor,quantidade FROM produtos WHERE id='$id'";
    $resultado = $mysqli->query($codigo_sql);
    
    if($resultado->num_rows == 1)
    {
        $linha = $resultado->fetch_array();
        $nome = $linha['nome'];
        $valor = $linha['valor'];
        $quantidade = $linha['quantidade'];

    }
    else
    {
        echo 'Produto não encontrado';
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE produtos SET nome='$nome', valor='$valor',quantidade='$quantidade' WHERE id='$id'";

    if($mysqli->query($sql) === TRUE)
    {
        header('Location: listar_produtos.php');
        exit();
    }
    else
    {
        echo'Erro ao atualizar'. $mysqli->error;
    }
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <div>
        <h1>Editar produto</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div>
                <label for="name">Nome do Produto</label>
                <input tipe="text" name="nome" id="nome" value="<?php echo $nome;?>"required>
            </div>
            <div>
                <label for="valor">Valor do Produto</label>
                <input tipe="number" name="valor" id="valor" value="<?php echo $valor;?>"required>
            </div>
            <div>
                <label for="quantidade">Quantidade do Produto</label>
                <input tipe="number" name="quantidade" id="quantidade" value="<?php echo $quantidade;?>"required>
            </div>
            <div>
                <button tipe="submit">Atualizar</button>
            </div>
        </form>
    </div>
</body>
</html>