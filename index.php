<?php 

require_once("config.php");

/* Exemplo aula 1 $sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

$tony = new Usuario();

$tony->loadById(2);

echo $tony;


?>