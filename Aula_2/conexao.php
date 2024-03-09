<?php
$sevidor = "localhost";
$banco_de_dados = "login";
$usuario = "root";
$senha = "";

$myaqli = new mysqli($sevidor,$usuario,$senha,$banco_de_dados);

if($mysqli -> error)
   die("Falha ao conectar ao banco de dados :( ")
?>