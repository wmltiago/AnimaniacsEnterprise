<?php

include("conexao.php");


try{
#COMEÇO DO IF
$stmt = $conexao->prepare("insert into usuario (nome, telefone, cpf,rg, endereco, data_nascimento, sexo, email, senha, login, cod_categoria) values(?,?,?,?,?,?,?,?,?,?,?)");

$nome=$_POST["nome"]; $telefone=$_POST["telefone"]; $cpf=$_POST["cpf"]; $rg=$_POST["rg"]; $endereco=$_POST["endereco"]; $data_nascimento=$_POST["data_nascimento"];$sexo=$_POST["sexo"];$email=$_POST["email"];$senha=$_POST["senha"];$login=$_POST["login"]; $cod_categoria=$_POST["cod_categoria"];

$stmt->bindParam(2,$telefone);
$stmt->bindParam(1,$nome);
$stmt->bindParam(3,$cpf);
$stmt->bindParam(4,$rg);
$stmt->bindParam(5,$endereco);
$stmt->bindParam(6,$data_nascimento);
$stmt->bindParam(7,$sexo);
$stmt->bindParam(8,$email);
$stmt->bindParam(9,$senha);
$stmt->bindParam(10,$login);
$stmt->bindValue(11,3);
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
