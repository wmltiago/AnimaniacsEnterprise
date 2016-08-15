<meta charset="utf-8">
<?php

include("conecta2.php");

try{

$stmt = $conexao->prepare("DELETE FROM usuario WHERE id_usuario=?");

$id_usuario=$_GET["idusuario"];

$stmt->bindParam(1,$id_usuario);

$stmt->execute();

header("Location: tabelausuario.php"); #redirecionando para essa pag "index.php


if($stmt->rowCount() >0){  #me mostra quantas linhas foram afetadas
	echo "Exclusão realizada com sucesso.";
}else{
	echo "Exclusão não pode ser realizada.";
	}
 
}catch(PDOException $e){
 echo $e->getMessage();
}
?>
