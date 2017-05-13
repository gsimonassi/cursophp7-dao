<?php 

require_once("config.php");

//exemplo de uma consulta de usuarios
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuário
//utiliza um metodo static - não é necessário criar o objeto
//$lista = Usuario::getlist();
//echo json_encode($lista);

//carregar uma lista de usuario buscando pelo login
//$search = Usuario::search("user");
//echo json_encode($search);

//carregar um usuario 
//$usuario = new Usuario();
//$usuario ->login("user","12345");
//echo $usuario;

//criando um novo usuario
//$aluno = new Usuario("Aluno", "321");
//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadbyId(4);
//$usuario->update("Professor","4321");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadbyId(4);
$usuario->delete();

echo $usuario;

 ?>