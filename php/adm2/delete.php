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

<form action="excluifuncionario.php" method="POST">
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
			<td><?=$row['nome'];?></td>
			<td><?=$row['telefone'];?></td>
			<td><?=$row['cpf'];?></td>
			<td><?=$row['rg'];?></td>
			<td><?=$row['endereco'];?></td>
			<td><?=$row['data_nascimento'];?></td>
			<td><?=$row['email'];?> </td>
			<td>
				<input type="submit" value="Deletar">
				
			</td>
		</tr>
				
			<?php
			}
			?>
	</table>
</form>
</body>
</html>
