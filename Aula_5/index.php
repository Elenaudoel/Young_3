<?php
include('../Connections/connections.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-secondary d-flex justify-content-center align-items-center vh-100">
    <table class="table d-flex justify-content-center align-items-center vh-100">
        <tr>
            <th class="table-light" scope="col">Nome</th>
            <th class="table-light" scope="col">Sobrenome</th>
            <th class="table-light" scope="col">Data de nacimento</th>
        </tr>
        <?php
         include('pegar_dados.php');
        ?>
    </table>
</body>
</html>