<meta charset="utf-8">
<?php

include("conecta2.php");




try{
$stmt = $conexao->prepare("UPDATE usuario SET cpf=?,telefone=?, nome=?, rg=?, endereco=?, data_nascimento=?, email=? WHERE id_usuario=?");

$telefone=$_POST["telefone"];
 $cpf=$_POST["cpf"];
 $id_usuario=$_POST["id_usuario"];
 $nome=$_POST["nome"];
$rg=$_POST["rg"];
$endereco=$_POST["endereco"];
$data_nascimento=$_POST["data_nascimento"];
$email=$_POST["email"];


$stmt->bindParam(2,$telefone);
$stmt->bindParam(1, $cpf);
$stmt->bindParam(8, $id_usuario);
$stmt->bindParam(3, $nome);
$stmt->bindParam(4, $rg);
$stmt->bindParam(5, $endereco);
$stmt->bindParam(6, $data_nascimento);
$stmt->bindParam(7, $email);

$stmt->execute();


if($stmt->rowCount() >0){  #me mostra quantas linhas foram afetadas
	echo "<center><h1>Atualização realizada com sucesso.</h1></center>";
	echo "<br><center><h3><a href='tabelausuario.php'>Voltar</a></h3></center>";
}else{
	echo "Nenhuma atualização foi realizada.";
	}
 
}catch(PDOException $e){
 echo $e->getMessage();
}


?>
