<?php
$host = "localhost";
$user = "root";
$pass = "@luno1fpe";
$banco = "acessoria_esportiva";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>

<?php
session_start();
	if (isset($_SESSION["login"])){ 

 echo "PARTE SO PARA QUEM TA LOGADO";

?>
<h1> SETOR DE COMPRAS </H1>

<?php

}else{

echo "OLHA ISSO AQUI SÓ SE VC FIZER LOGIN";

}
?>


<html>
<head>
<meta charset="utf-8">
<title>Painel</title>

</head>
<body>
<a href="sair.php">Sair</a>

</body>
</html>
