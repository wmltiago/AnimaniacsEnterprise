<?php

include("conexao.php");


try{
#COMEÇO DO IF
$stmt = $conexao-> prepare("insert into usuario (nome,telefone,cpf,rg,endereco,data_nascimento,sexo,email,login,senha,cod_categoria) values(?,?,?,?,?,?,?,?,?,?,?)");

$nome=$_POST["nome"]; 
$telefone=$_POST["telefone"]; 
$cpf=$_POST["cpf"];
$rg=$_POST["rg"]; 
$endereco=$_POST["endereco"];
$data_nascimento=$_POST["data_nascimento"];
$sexo=$_POST["sexo"];
$email=$_POST["email"];
$login=$_POST["login"];
$senha=$_POST["senha"]; 
$cod_categoria=3;


$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$telefone);
$stmt->bindParam(3,$cpf);
$stmt->bindParam(4,$rg);
$stmt->bindParam(5,$endereco);
$stmt->bindParam(6,$data_nascimento);
$stmt->bindParam(7,$sexo);
$stmt->bindParam(8,$email);
$stmt->bindParam(9,$login);
$stmt->bindParam(10,$senha);
$stmt->bindValue(11,$cod_categoria);


#$stmt->bindValue(1,1);
#$stmt->bindValue(2,"Zé Maria");

$stmt->execute();




if($stmt->rowCount() >0){
 echo "inserção realizada com sucesso !!!"; #msg exibida depois de enviado
	header("Location: ../home/index.php"); #redirecionando para essa pag "index.php
}else{
	echo "Foi triste o fim";
}
 





}catch(PDOException $e){
	echo "Houve erro na inserção.".$e->getCode()." - ".$e->getMessage();
}
?>
