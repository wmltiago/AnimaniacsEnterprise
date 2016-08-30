<?php

include("conexao.php");


try{
#COMEÇO DO IF
$stmt = $conexao->prepare("insert into funcionario (nome, cpf, endereco, foto, codigo_categoria, login, senha) values(?,?,?,?,?,?,?)");

$nome=$_POST["nome"]; $cpf=$_POST["cpf"]; $endereco=$_POST["endereco"]; $foto=$_POST["foto"];$codigo_categoria=$_POST["codigo_categoria"];$login=$_POST["login"];$senha=$_POST["senha"];

$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$cpf);
$stmt->bindParam(3,$endereco);
$stmt->bindParam(4,$foto);
$stmt->bindValue(5,2);
$stmt->bindParam(6,$login);
$stmt->bindParam(7,$senha);
#$stmt->bindValue(1,1);
#$stmt->bindValue(2,"Zé Maria");

$stmt->execute();
 echo "inserção realizada com sucesso !!!"; #msg exibida depois de enviado

#FIM DO IF

header("Location: ../home/index.php"); #redirecionando para essa pag "index.php

}catch(PDOException $e){
	echo "Houve erro na inserção.".$e->getCode()." - ".$e->getMessage();
}
?>
