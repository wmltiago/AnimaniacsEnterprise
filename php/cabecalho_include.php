<?php
session_start();

	if (isset($_SESSION["login"])){ 
$login = $_SESSION['login'];
 echo "<div style='background-color:#FFF'><center>Seja bem vindo $login</center><div>";


?>
<div id="link">
<center><a href='sair.php' style='background-color:#FFF'>Sair</a></center>
<center><a href='../php/adm2/tabelausuario.php' style='background-color:#FFF'>ADM</a></center>

</div>
<?php

}else{

?>


<div id="tarja_pre_cabecalho" >
<a href="../home/login.html" class="sem_linha" >Login </a>
<a href="../cadastro/cadastro_cliente.html" target="blank" class="sem_linha2" >Cadastre-se</a>
</div>
<?php
}
?>
	
<div id="cabecalho">

<img src="../imagens/a.png">


		<h1>AE Assessoria Esportiva </h1>
		<br>
		<h2> O melhor conceito em saúde e bem estar! </h2>
	
		<!-- em Aberto <input type="button" value="    cadastre-se    " id="but" onclick="Windows();">  BOTÃO CADASTRO -->
	
</div>

<div id='cssmenu'>  <!-- MENU INDEX EM ABERTO-->
  <ul>
     <li class='active'><a href="..\home/index.php">Home</a></li>
     <li class='has-sub '><a href="..\home/empresa.html" target="blank">Empresa</a>
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
           <li class='has-sub '><a href='..\servicos/crossfit.html'>CrossFit</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
           <li class='has-sub '><a href='..\servicos/funcional.html'>Funcional</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   <li class='has-sub '><a href='..\servicos/musculacao.html'>Musculação</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   
        </ul>
		</li>
     <li><a href="..\dicas/dicas.php">Dicas</a>
	 <ul>
           <!--<li class='has-sub '><a href='..\dicas/dicas.html'>Dicas</a> em aberto
             <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>
           </li>-->
     		   
     </ul>
		</li>
		<li><a href="..\equipe/membros.html">Equipe</a>
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
		<li><a href="..\galeria/fotos.html">Galeria</a>
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
	  <li><a href="..\suporte/suporte.html" target="_blank">Suporte</a></li>
  </ul>
</div>
