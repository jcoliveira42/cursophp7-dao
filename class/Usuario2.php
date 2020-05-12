<?php 

class Usuario{

	private $idusuario;
	private $deslogin;
	private $desenha;
	private $dtcadastro;

	public function getIdusuario(){

		return $this->idusuario;
	}
	public function setIdusuario($value){

		$this->idusuario = $value;
	}


public function getDeslogin(){

		return $this->deslogin;
	}
	public function setDeslogin($value){

		$this->deslogin = $value;
	}

public function getDesenha(){

		return $this->desenha;
	}
	public function setDesenha($value){

		$this->desenha = $value;
	}


public function getDtcadastro(){

		return $this->dtcadastro;
	}
	public function setDtcadastro($value){

		$this->dtcadastro = $value;
	}


	public function loadById($id){

		$sql = new Sql ();

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if(count ($result) > 0){

			$this->setData($result[0]);

		}

	}

	public static function getList(){

		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");

	}

	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
		':SEARCH'=>"%".$login."%"
		));

	}


	public function login($login , $password){


		$sql = new Sql ();

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND desenha = :PASSWORD" , array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		if(count ($result) > 0){

			$this->setData($result[0]);

		} else{

			throw new Exception("Login e/ou senhas inválidos");

		}

	}


	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDesenha($data['desenha']);
		$this->setDtcadastro (new DateTime($data['dtcadastro']));



	}








//$result = $sql->select("EXEC sp_usuarios_insert :LOGIN, :PASSWORD", array(

				//':LOGIN'=>$this->getDeslogin(),
				//':PASSWORD'=>$this->getDeslogin(),
			//));

			//if(count($result)>0){

				//$this->setData($result[0]);



	public function insert(){

	$sql = new Sql ();


	$result = $sql->select("EXEC sp_usuarios_insert :LOGIN, :PASSWORD", array(
	//$result = $sql->select("CALL sp_usuarios_insert(:LOGIN,:PASSWORD)", array(
		':LOGIN'=>$this->getDeslogin(),
		':PASSWORD'=>$this->getDesenha()
	));

	if(count($result)>0){

	$this->setData($result[0]);

	}

	}



	public function __toString(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"desenha"=>$this->getDesenha(),
			"dtcadastro"=>$this->getDtcadastro()
			//"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));

	}



}

 ?>
