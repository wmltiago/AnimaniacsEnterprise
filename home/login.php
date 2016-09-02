
<html>
<head>
<head><meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/menu.css"></link>
<link rel="stylesheet" type="text/css" href="../css/login.css"></link>
<link rel="stylesheet" type="text/css" href="../css/css_cabecalho.css"></link>
<title>Login</title>
</head>

<body>
<?php

include "../php/cabecalho_include2.php";
?>

<!--../php/login.php-->
<div id="login">
<form action="recebe_login2.php" method="POST" id="legendForm">
    <legend>Login</legend>
    <input type="text" placeholder="Usuário"  name="login" value="" required autofocus/>
    <input type="password" placeholder="Password" name="senha" value="" required/>
    <button type="submit" name="entrar" >Login</button>
</form>
<center>
<h3><a href="www.xxxx.com.br" >esqueceu sua senha?</a></h3>
<h3><a href="../cadastro/cadastro_cliente.html" target="blank" >Cadastre-se</a></h3>
</center>
</div>


</body>

</html>
