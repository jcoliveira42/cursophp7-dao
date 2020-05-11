<?php 

//$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");


$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESSPHP;ConnectionPooling=0", "", "423027@@@Jco");

$conn->beginTransaction();



$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");





$id  = 2;






$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();



echo "Dados excluidos com sucesso !!!"

 ?>
