<?php

include("conexao.php");


try{
#COMEÇO DO IF
$stmt = $conexao->prepare("insert into funcionario (nome, cpf, endereco, login, senha, codigo_categoria) values(?,?,?,?,?,?)");

$nome=$_POST["nome"]; $cpf=$_POST["cpf"]; $endereco=$_POST["endereco"]; $login=$_POST["login"];$senha=$_POST["senha"];

$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$cpf);
$stmt->bindParam(3,$endereco);
$stmt->bindParam(4,$login);
$stmt->bindParam(5,$senha);
$stmt->bindValue(6,2);

$stmt->execute();

//$stmt->debugDumpParams();

if($stmt->rowCount() >0){
 echo "inserção realizada com sucesso !!!"; #msg exibida depois de enviado
}else{
	echo "Foi triste o fim";
}
#FIM DO IF

#header("Location: ../home/index.php"); #redirecionando para essa pag "index.php

}catch(PDOException $e){
	echo "Houve erro na inserção.".$e->getCode()." - ".$e->getMessage();
}
?>
