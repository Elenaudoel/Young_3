<?php
include('../Connections/connections.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $cod_sql = "DELETE fROM produtos WHERE id='$id'";

  if($mysqli->query($cod_sql) === TRUE)
  {
    header('Location: painel.php');
    exit();
  }
  else
  {
    echo'deu ruim' . $mysqli->error;
  }
}
$mysqli->close();
?>