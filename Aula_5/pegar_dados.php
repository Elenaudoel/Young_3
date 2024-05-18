<?php
include('../Connections/connections.php');

$codigo_sql = "SELECT * FROM pessoas";
$resultado = $mysqli->query($codigo_sql);
var_dump($resultado);
?>