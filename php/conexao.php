<?php
try{
$conexao=new PDO("mysql:host=localhost;dbname=acessoria_esportiva","root","password");
}catch(PDOException $e){ "Codigo do Erro: ".$e->getCode()." Erro: ".$e->getMessage();
}




?>
