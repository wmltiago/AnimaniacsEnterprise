<!DOCTYPE html>
<html>
	<head><meta charset="utf-8">
	<title>Animaniacs Enterprise</title>
	<link rel="stylesheet" type="text/css" href="../css/alteraDados.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/cadastro_aluno.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/div_back.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/promocao.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/css_cabecalho.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/menu.css"></link>
        <script type="text/javascript" src="../javascript/validacao_cadastro_cliente.js"></script>
	</head>
	<body>
	<div id="cabecalho">
	<h1>AE Grupo Personal </h1>
		<br>
		<h2> O melhor conceito em saúde e bem estar! </h2>
	</div>
	<div id='cssmenu'>
  <ul>
     <li class='active'><a href="..\home/index.php">Home</a></li>
     <li class='has-sub '><a href="..\home/empresa.html" target="blank">Empresa</a></li>
     <li><a href="">Serviços</a>
	 <ul>
           <li class='has-sub '><a href='..\servicos/crossfit.html'>CrossFit</a>
        
           </li>
           <li class='has-sub '><a href='..\servicos/funcional.html'>Funcional</a>
            
           </li>
		   <li class='has-sub '><a href='..\servicos/musculacao.html'>Musculação</a>
           </li>
		   
        </ul>
           </li>
     <li><a href="..\dicas/dicas.html">Dicas</a></li>
     
		<li><a href="..\equipe/membros.html">Equipe</a></li>
		<li><a href="..\galeria/fotos.html">Galeria</a>
	
		</li>
	  <li><a href="..\suporte/suporte.html" target="_blank">Suporte</a></li>
  </ul>
</div>
	<h1>Bem Vindo</h1>
<div id="geral">	 
<div id="dados">
        <center><h3>Meus dados cadastrais</h3></center>
</div>
<div id="formulario">

<form action="#" method="post" name="dados_cadastrados">

<div>
  <fieldset>
   <label>ID</label><input type="text" name="id_usuario" id="id_usuario" value="" readonly="true"><br>
   <label>Nome</label> <input type="text" name="nome" id="nome" value=""><br>
   <label>CPF</label> <input type="text" name="cpf" id="cpf" value="" readonly="true"><br>
   <label>RG</label><input type="text" name="rg" id="rg" value=""><br>
   <label>Data Nascimento</label> <input type="date" name="data_nasc" id="data_nasce" value=""><br>
   <label>Telefone</label> <input type="text" name="telefone" id="telefone" value=""><br>   
   <label>Endereço</label> <input type="text" name="endereco" id="endereco" value=""> 
   <label>Sexo</label> Masculino<input type="radio" name="sexo" id="masculino" value="M">
                       Feminino<input type="radio" name="sexo" id="feminino" value="F">
<br>
	  </fieldset>

	  <br>

	  </div>

	  <input type="submit" name="salvar" value="Salvar" onclick="return validaTudo2();"> 

<br>
</form>
</div>
</div>
	</body>
</html>
