<?php
	require_once('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP PDO</title>
</head>
<body>
<h2>Lista de Clientes</h2>
	<a href="add.php">Adicionar novo Cliente</a>
	<table border="1px" cellpadding="5px" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Nome do Usuário</th>
			<th>Telefone</th>
			<th>CPF</th>
			<th>RG</th>
			<th>Endereço</th>
			<th>Data Nascimento</th>
			<th>Email</th>
			<th>Ações</th>
	
		</tr>
			<?php
				$stmt=$conexao->prepare("SELECT * FROM usuario ORDER BY id_usuario ASC");
				$stmt->execute();
				$resultado= $stmt->fetchAll();
				foreach($resultado as $row){
			?>
		<tr>
			<td><?=$row['id_usuario'];?></td>
			<td><?=$row['nome'];?></td>
			<td><?=$row['telefone'];?></td>
			<td><?=$row['cpf'];?></td>
			<td><?=$row['rg'];?></td>
			<td><?=$row['endereco'];?></td>
			<td><?=$row['data_nascimento'];?></td>
			<td><?=$row['email'];?></td>
			<td>
				<a href="edit.php?id=<?=$row['id_usuario'];?>">Editar</a> |
				<a href="#">Deletar</a>
		</tr>
		<?php
			}
		
		?>

	</table>

</body>
</html>
