<?php
$host = "localhost";
$user = "root";
$pass = "password";
$banco = "acessoria_esportiva";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>

<html>
<head>
<meta charset="utf-8">
<title> autenticando usuario</title>
<script type="text/javascript">
function loginOk(){
	setTimeout("window.location='index.php'", 3000);
}
function loginfail(){
	setTimeout("window.location='login.html'", 3000);
}
</script>
</head>
<body>

<?php
$login = $_POST['login'];	//recebe o login
$senha = $_POST['senha'];	//recebe a senha
$cod_categoria = $_POST['cod_categoria'];

$sql = mysql_query ("SELECT * FROM usuario WHERE login = '$login', cod_categoria='$cod_categoria' AND senha = '$senha'") or die(Mysql_error());

$row = mysql_num_rows($sql);

if($row == 1) {

	session_start();
	 $_SESSION['login'] =$_POST['login'];
	$_SESSION['senha'] = $_POST['senha'];
	$_SESSION['cod_categoria'];
		echo "<center><h1>Você foi logado com sucesso! Aguarde um instante.</h1></center>";
		echo "<script>loginOk();</script>";

}else{
	echo "<center><h1>Nome de usuario ou senha invalidos! Aguarde você vai ser redirecionado!!!</h1></center>";
	echo "<script>loginfail();</script>";


}






?>
</body>
</html>
