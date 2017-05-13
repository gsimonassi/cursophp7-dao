<?php 

require_once("config.php");

//exemplo de uma consulta de usuarios
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

$root = new Usuario();

$root->loadbyId(3);

echo $root;

 ?>