<?php
	require_once('conexao.php');



  $gid = $_GET['id_usuario'];
	$show =$conexao->query("SELECT * FROM usuario WHERE id_usuario='$gid'");
	$row = $show->fetch();

	if(isset($_POST['submit'])){
			$nome = ['nome'];
			$telefone = ['telefone'];
			$cpf = ['cpf'];
			$rg = ['rg'];
			$endereco = ['endereco'];
			$data_nascimento = ['data_nascimento'];
			$email = ['email'];
	


}

?>

<html>
<head>
	<meta charset="utf-8">
	<title>editar</title>
</head>
<body>
<h2>Editar dados do usuário</h2>
	
<form action="#" method="POST">
	<table  cellpadding="5px" cellspacing="0">
	
		<tr>
			<td>Nome do Usuário</td>
			<td><input type="text" name="nome" value="<?=$nome;?>"></td>	
		</tr>	
	
		<tr>
			<td>telefone</td>
			<td><input type="text" name="telefone" value="<?=$telefone;?>"></td>	
		</tr>	

		<tr>
			<td>CPF</td>
			<td><input type="text" name="cpf" value="<?=$cpf;?>"></td>	
		</tr>	
		<tr>
 			<td>RG</td>
			<td><input type="text" name="rg" value="<?=$rg;?>"></td>	
		</tr>	
		<tr>
			<td>Endereço</td>
			<td><input type="text" name="endereco" value="<?=$endereco;?>"></td>	
		</tr>	
		<tr>
			<td>Data Nascimento</td>
			<td><input type="text" name="data_nascimento" value="<?=$data_nascimento;?>"></td>	
		</tr>	
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?=$email;?>"></td>	
		</tr>

		<tr>
		<td><input type="hidden" name="id_usuario" value="<?=$id_usuario;?>"></td>
		<td><input type="submit" name="submit"> </td>
		</tr>	
		
		

	</table>

</body>
</html>
