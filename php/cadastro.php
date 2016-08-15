<?php
try{
$conexao=new PDO("mysql:host=localhost;dbname=acessoria_esportiva","root","password");
}catch(PDOException $e){ "Codigo do Erro: ".$e->getCode()." Erro: ".$e->getMessage();
}


try{
#COMEÇO DO IF
$stmt = $conexao->prepare("insert into usuario (nome, telefone, cpf,rg, endereco, data_nascimento, sexo, email, senha) values(?,?,?,?,?,?,?,?,?)");

$nome=$_POST["nome"]; $telefone=$_POST["telefone"]; $cpf=$_POST["cpf"]; $rg=$_POST["rg"]; $endereco=$_POST["endereco"]; $data_nascimento=$_POST["data_nascimento"];$sexo=$_POST["sexo"];$email=$_POST["email"];$senha=$_POST["senha"];

$stmt->bindParam(2,$telefone);
$stmt->bindParam(1,$nome);
$stmt->bindParam(3,$cpf);
$stmt->bindParam(4,$rg);
$stmt->bindParam(5,$endereco);
$stmt->bindParam(6,$data_nascimento);
$stmt->bindParam(7,$sexo);
$stmt->bindParam(8,$email);
$stmt->bindParam(9,$senha);

#$stmt->bindValue(1,1);
#$stmt->bindValue(2,"Zé Maria");

$stmt->execute();
 echo "inserção realizada com sucesso !!!"; #msg exibida depois de enviado

#FIM DO IF

header("Location: ../home/index.html"); #redirecionando para essa pag "index.php

}catch(PDOException $e){
	echo "Houve erro na inserção.".$e->getCode()." - ".$e->getMessage();
}
?>
