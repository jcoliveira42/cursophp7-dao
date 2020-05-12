<?php 

require_once("config.php");

	//Consulta directa pela classe SQL
	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	//Carrega um usuario
	//$root = new Usuario();
	//$root->loadbyId(3);
	//echo $root;

	//Carrega uma lista de usuarios
	//$lista = Usuario::getList(); /*Maneira de chamar metodos estaticos*/
	//echo json_encode($lista);


	//Carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("Pedro","1233");
	//echo $usuario;

	//Insert de novo usuario usando stored procedure
	//$aluno = new Usuario("jenilson","4242");
	//$aluno->insert();
	//echo $aluno;

	//Alterar um usuario pelo ID
	//$usuario = new Usuario();
	//$usuario->loadById(8);
	//$usuario->update("JCOOO","996655");
	//echo $usuario;

	//Elimina um usuario pelo ID
	$usuario = new Usuario();
	$usuario->loadById(11);
	$usuario->delete();
	echo $usuario;

 ?>
