<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Principal</title>
</head>

<body>
<?php
	session_start();

$login = @$_SESSION['login']; //esse "@" é para n aparece o eero qndo a variale login está vazia.
$senha = @$_SESSION['senha'];
	if($login == "tiago" && $senha == "123"){ //se login e senha conferem
		echo "Você está logado";
		echo "<br> <a href='sair.php'>Sair</a>";
}else{

	echo "<script> alert ('Algo errado ai em ');</script>";
	header("Location: formulario_login.php");


}

?>

</body>
</html>
