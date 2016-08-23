<?php

$login = $_POST['login'];	//recebe o login
$senha = $_POST['senha'];	//recebe a senha

//echo "$login <br>";
//echo "$senha <br>";


if($login == $_POST['login'] && $senha == $_POST['senha']){
session_start();
	echo "Seja bem vindo $login";
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
header("Location: index.php");

}else{
echo "Acesso negado";

}



?>
