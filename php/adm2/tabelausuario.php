<?php
session_start();
	if ($_SESSION["login"] != "adm"){ 
header("Location: ../../home/index.php");
}
?>
<?php
include("conecta2.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Tabela Com Dados Dos Usuarios</title>
<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../css/body.css"></link>
	<link rel="stylesheet" type="text/css" href="../../css/css_cabecalho.css"></link>
	<link rel="stylesheet" type="text/css" href="../../css/menu.css"></link>
	<link rel="stylesheet" type="text/css" href="../../css/css_adm.css"></link>
	
</head>
<body>

	
<div id="cabecalho">
<!--<div align="right" id="botao">	
	 <input type="text" name="login" id="login" placeholder="Login"> 			
	 <input type="password" name="password" id="pass" placeholder="Senha"> 		
	 <input type="submit" name="Login" value="Login" id="botLogin">     		
	  
</div> -->
<img src="../../imagens/logo4.png">


		<h1>AE Assessoria Esportiva </h1>
		<br>
		<h2> O melhor conceito em saúde e bem estar! </h2>
	
		<!-- em Aberto <input type="button" value="    cadastre-se    " id="but" onclick="Windows();">  BOTÃO CADASTRO -->
	
</div>

<div id='cssmenu'>  <!-- MENU INDEX EM ABERTO-->
  <ul>
     <li class='active'><a href="../../home/index.php">Home</a></li>
     <li class='has-sub '><a href="..\home/empresa.php" target="blank">Empresa</a>
        <!--<ul>
           <li class='has-sub '><a href='..\[secretaria]/cadastrar_professor.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
           <li class='has-sub '><a href='..\[secretaria]/cadastrar_cursos_disciplinas.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
		   <li class='has-sub '><a href='..\[secretaria]/realizar_matricula.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
		   <li class='has-sub '><a href='..\[secretaria]/emitir_historico.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
        </ul>-->
     </li>
     <li><a href="">Serviços</a>
	 <ul>
           <li class='has-sub '><a href='..\../servicos/crossfit.php'>CrossFit</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
           <li class='has-sub '><a href='..\../servicos/funcional.php'>Funcional</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   <li class='has-sub '><a href='..\../servicos/musculacao.php'>Musculação</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   
        </ul>
		</li>
     <li><a href="..\../dicas/dicas.php">Dicas</a>
	 <ul>
           <!--<li class='has-sub '><a href='..\dicas/dicas.html'>Dicas</a> em aberto
             <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>-->
     		   
     </ul>
		</li>
		<li><a href="">Programas</a>
	 <ul>
           <li class='has-sub '><a href='..\../programas/aum_muscular.php'>Aumento Muscular</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
           <li class='has-sub '><a href='..\../programas/perd_gordura.php'>Perda de Gordura</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   <li class='has-sub '><a href='..\../programas/idosos.php'>Idosos</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   <li class='has-sub '><a href='..\../programas/pos_parto.php'>Gestantes/Pós-Parto</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   
        </ul>
		</li>
		<li><a href="..\../equipe/membros.php">Equipe</a>
	<!-- <ul>
           <li class='has-sub '><a href='..\[professor]/registrar_faltas.html'>xxxxxxxxxx</a>
              <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
           <li class='has-sub '><a href='..\[professor]/registrar_notas.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
		   <li class='has-sub '><a href='..\[professor]/registrar_projeto_pesquisa.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
		   
        </ul>-->
		</li>
		<li><a href="..\../galeria/fotos.php">Galeria</a>
	 <!--<ul>
           <li class='has-sub '><a href='..\[professor]/registrar_faltas.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
           <li class='has-sub '><a href='..\[professor]/registrar_notas.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
		   <li class='has-sub '><a href='..\[professor]/registrar_projeto_pesquisa.html'>xxxxxxxxxx</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>
		   
        </ul>-->
		</li>
	  <li><a href="..\../suporte/suporte.php" target="_blank">Suporte</a></li>
  </ul>
</div>

<br>

<h2>Pesquisar usuario!</h2>

<form name="frmPesq" action="tabelausuario.php" method="POST">
<table width="350" bgcolor="#888">
	<tr>
		<td>	
			<input type="text" name="txtPesq" value="" size="40"/>
		</td>
		<td colspan="2">
			<input type="submit" name="btnBusca" value="Buscar"/>
		</td>
	</tr>
</table>
</form>







<br>
<div #search>
<h2> Lista De Usuarios</h2>
	<table border="1px" bgcolor="#D3D3D3" cellpadding="5px" cellspacing="0">
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
			if(isset($_POST['txtPesq'])){
			$pesq = $_POST['txtPesq'];
		$stmt=$conexao->prepare("SELECT * FROM usuario WHERE nome LIKE '%".$pesq."%'");
				$stmt->execute();
				$resultado= $stmt->fetchAll();
}else{
		$stmt=$conexao->prepare("SELECT * FROM usuario ORDER BY id_usuario ASC");
				$stmt->execute();
				$resultado= $stmt->fetchAll();
}
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
				<a href="formulario_atualiza_usuario.php?idusuario=<?=$row['id_usuario'];?>">Editar</a> |
				<a href="exclui_funcionario.php?idusuario=<?=$row['id_usuario'];?>">Deletar</a>
			</td>
		</tr>
				
			<?php
			}
				
			?>
	</table>
</div>
</body>
</html>
