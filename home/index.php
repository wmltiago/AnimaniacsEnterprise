<?php
$host = "localhost";
$user = "root";
$pass = "password";
$banco = "acessoria_esportiva";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acessoria Esportiva</title>
	<link rel="stylesheet" type="text/css" href="../css/botoes_redes_sociais.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/body.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/div_back.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/promocao.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/rodape.css"></link> <!--Rodape-->
	<link rel="stylesheet" type="text/css" href="../css/css_cabecalho.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/menu.css"></link>
	<script type="text/javascript" src="../javascript/butoes.js"></script> <!--botoes aberto-->
	<link rel="stylesheet" type="text/css" href="../css/carrossel.css"></link>
	<script type="text/javascript" src="../javascript/carrossel.js"></script>
	
	</head>
<body>


<?php

include "../php/cabecalho_include.php"; //Inclusao do cabeçalho 


?>
	<div id="x">
<div id="carrossel"><!-- INICIO DO CARROSEL -->
<center>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext"></div> <!-- NUMEROS QUE APARECEM EM CIMA DA IMAGEM DO CARROSSEL -->
 <div id="cor_L_carrossel">  <h1><b>CORRER JUNTO<b> </H1><br><h3>Praticar atividades físicas sempre é bom,<p> e acompanha com uma pessoa 
																que entende do assunto melhor ainda. <p>Conheça nossos personais capacitados para auxililiar
																você .</div>                 <!--<img src="../imagens/funcional.jpg" style="width:50%"> -->
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <div id="cor_L_carrossel">  <h1><b>NÓS ACREDITAMOS EM VOCÊ MESMO QUANDO VOCÊ DEIXA DE ACREDITAR.<b> </h1><h3>Sempre que se sentir desmotivado, pode contar com a nossa equipe para se animar.</h3></div>
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <div id="cor_L_carrossel">  <h1><b>TODO TREINO TEM UM PROPÓSITO.<b> </h1><h3>Em alguns dias você irá se sentir pressionado.Em outros, irá  se sentir motivado a seguir em frente.</h3></div>
					<!--<img src="../imagens/muscle.jpg" style="width:50%"> -->
    <div class="text"></div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

</center>
</div>
<script>
var slideIndex = 0;
showSlides();
</script>
<!-- FIM DO CARROSSEL -->

</div>

<center>
<div id="txt_entre_xz"> <h1>CORRA SEU PRIMEIRO QUILÔMETRO</h1> <!-- body.css -->

<h2><p>Em menos de uma hora, nossos especialistas vão deixar seu corpo e<p>
sua mente preparados para você nunca mais parar de correr.</h2>
</div>
</center>

<div id="z">                  <!-- bakcgroud das promoções -->

<div id="z2">

<table align="center" >

<tr>

<td><img src="../imagens/bck3.jpg"   hspace="100"  align="left" ></td><br>

<td><img src="../imagens/bck4.jpg"     hspace="20" align="center" ></td><br>

<td><img src="../imagens/bck5.jpg"     hspace="100" align="right" ></td><br>

</tr>
</table>
<!--<div id="z1">
	<img src="../imagens/bck3.jpg" id="img1" >
	<img src="../imagens/bck4.jpg" id="img2">
	<img src="../imagens/bck5.jpg" id="img3">
	
</div>-->


	
</div>
	
</div>


<div id="y"> 
<div id="promo">            
<h1></h1>
</div>
</div>

<div id="rede_social">

		<ul class="redes">
			<li><a href="#"><img src="../imagens_botoes/twitter.png"><span>Twitter</span></a></li>
			<li><a href="http://www.facebook.com"><img src="../imagens_botoes/face.png"><span>FaceBook</span></a></li>
			<li><a href="#"><img src="../imagens_botoes/tumb.png"><span>Tumblr</span></a></li>
			<li><a href="#"><img src="../imagens_botoes/blog2.png"><span>Blog</span></a></li>
			<li><a href="#"><img src="../imagens_botoes/insta.png"><span>Instagram</span></a></li>
			
		
		
		</ul>


</div>
<div id="rodape">
        <label>Copyright &copy; 2016 - Animaniacs Enterprise - Privacy Policy&nbsp;&copy;</label>
      <br><br>
        <label>&reg 2014 - 2016 Animaniacs Enterprise &reg</label>&nbsp;
        
    </div>
	
	</body>
</html>
