<?php
include("conecta2.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Tabela Com Dados Dos Usuarios</title>
<meta charset="utf-8">
</head>
<body>
<h2> Atualiza Usuário</h2>

<form action="atualizafuncionario.php" method="POST">
	<table border="1px cellpadding="5px" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Nome Usuario</th>
			<th>Telefone</th>
			<th>CPF</th>
			<th>RG</th>
			<th>Endereço</th>
			<th>Data Nascimento</th>
			<th>Email</th>
			<th>Ações</th>
		</th>
		<?php
		$stmt=$conexao->prepare("SELECT * FROM usuario ORDER BY id_usuario ASC");
				$stmt->execute();
				$resultado= $stmt->fetchAll();
				foreach($resultado as $row){
				?>
		<tr>
			<td><input type="text" value="<?=$row['id_usuario'];?>" name="id_usuario" readonly="true"></td>
			<td><input type="text" value="<?=$row['nome'];?>" name="nome"></td>
			<td><input type="text" value="<?=$row['telefone'];?>" name="telefone"></td>
			<td><input type="text" value="<?=$row['cpf'];?>" name="cpf"></td>
			<td><input type="text" value="<?=$row['rg'];?>" name="rg"></td>
			<td><input type="text" value="<?=$row['endereco'];?>" name="endereco"></td>
			<td><input type="text" value="<?=$row['data_nascimento'];?>" name="data_nascimento"></td>
			<td><input type="text" value="<?=$row['email'];?>" name="email"></td>
			<td>
				<input type="submit" value="Salvar">
				
			</td>
		</tr>
				
			<?php
			}
			?>
	</table>
</form>
</body>
</html>
