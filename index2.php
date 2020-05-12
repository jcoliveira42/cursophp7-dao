<?php 

require_once("config.php");


//carrega apenas um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getlist();
//echo json_encode($lista);


//Carrega uma lista de usuarios por uma lista de login
//$search = Usuario::search("jo");
//echo json_encode($search);


//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("joao","1236");
//echo $usuario;



$aluno->setDeslogin("aluno");
$aluno->setDesenha("5522");
$aluno->insert();

echo $aluno;

 ?>
