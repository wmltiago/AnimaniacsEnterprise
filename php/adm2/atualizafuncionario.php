<meta charset="utf-8">
<?php

include("conecta2.php");




try{
$stmt = $conexao->prepare("UPDATE usuario SET cpf=?,telefone=?, nome=? WHERE id_usuario=?");

$telefone=$_POST["telefone"]; $cpf=$_POST["cpf"]; $id_usuario=$_POST["id_usuario"]; $nome=$_POST["nome"];


$stmt->bindParam(2,$telefone);
$stmt->bindParam(1, $cpf);
$stmt->bindParam(4, $id_usuario);
$stmt->bindParam(3, $nome);

$stmt->execute();


if($stmt->rowCount() >0){  #me mostra quantas linhas foram afetadas
	echo "Atualização realizada com sucesso.";
}else{
	echo "Nenhuma atualização foi realizada.";
	}
 
}catch(PDOException $e){
 echo $e->getMessage();
}


?>
