<?php 

require_once("config.php");

/* Exemplo - Carrega todos */
/* $sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

/* Exemplo - Carrega somente um*/
/*$tony = new Usuario();
$tony->loadById(2);
echo $tony;*/


/* Exemplo - Carrega uma lista de usuarios */
/* $lista = Usuario::getList();
echo json_encode($lista); */

/* Exemplo - Busca usuario */
/*$busca = Usuario::search("to");
echo json_encode($busca);*/

/* Exemplo - Buscando usuario com login e senha */
$usuario = new Usuario();
$usuario->login("tony", "123");

echo $usuario;

?>