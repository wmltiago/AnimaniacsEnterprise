<?php
try{
$conexao=new PDO("mysql:host=localhost;dbname=acessoria_esportiva","root","@luno1fpe");
}catch(PDOException $e){ "Codigo do Erro: ".$e->getCode()." Erro: ".$e->getMessage();
}




?>
