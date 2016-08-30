<?php
session_start();
	if (!isset($_SESSION["login"])){ 
header("Location: ../home/index.php");
}

?>
<!DOCTYPE html>
<head><meta charset="utf-8">
	<title>Dicas</title>
    <link rel="stylesheet" type="text/css" href="../css/voltarDica.css"></link>
	<!--<script type="text/javascript" src="../javascript/voltarDica.js"></script>-->
	<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>-->
	<link rel="stylesheet" type="text/css" href="../css/body.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/div_back.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/promocao.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/rodape.css"></link> <!--Rodape-->
	<link rel="stylesheet" type="text/css" href="../css/css_cabecalho.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/menu.css"></link>
	<script type="text/javascript" src="../javascript/butoes.js"></script> <!--botoes aberto-->
	<link rel="stylesheet" type="text/css" href="../css/carrossel.css"></link>
	<script type="text/javascript" src="../javascript/carrossel.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/dicas.css"></link>
	
</head>
<body>


<a name="voltaraotopo"></a>
<div id="cabecalho">
<div align="right" id="botao">	
	  
</div>
		

		<h1>AE Grupo Personal </h1>
		<br>
		<h2> O melhor conceito em saúde e bem estar! </h2>
	
		<!-- em Aberto <input type="button" value="    cadastre-se    " id="but" onclick="Windows();">  BOTÃO CADASTRO -->
	
</div>
<div id='cssmenu'>  <!-- MENU INDEX EM ABERTO-->
  <ul>
     <li class='active'><a href="..\home/index.php">Home</a></li>
     <li class='has-sub '><a href="..\home/empresa.html">Empresa</a>
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
     <li><a href="..\dicas/dicas.html">Dicas</a>
	<ul>
           <li class='has-sub '><a href="#aumento_muscular">Aumento Muscular</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
           <li class='has-sub '><a href="#alimentacao">Alimentação</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   <li class='has-sub '><a href="#suplementacao">Suplementação</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   <li class='has-sub '><a href="#descanso">Descanso</a>
             <!-- <ul>
                 <li><a href='#'>Sub Item</a></li>
                 <li><a href='#'>Sub Item</a></li>
              </ul>-->
           </li>
		   </ul>	
	  </li>
		
		<li><a href="..\equipe/membros.html">Equipe</a>
		</li>
		<li><a href="..\galeria/fotos.html">Galeria</a>
		</li>
	  <li><a href="..\suporte/suporte.html" target="_blank">Suporte</a></li>
  </ul>
</div>
<div id="dicas">

<h1>DICAS</h1>
<div id="aumentoMusc">	
	<center> <a name="aumento_muscular"></a>	<h1>Aumento Muscular</h1>
	<h1>Treino</h1>
</center>
<center>	
<p>A famosa frase "No Pain, No Gain". Não há dor sem ganhos, aumento de massa muscular <br> vem além de outros fatores como alimentação,suplementação,e etc..., você tem que treinar muito!<br>
Confira algumas dicas de treinos para ajudar no seu objetivo de aumento de massa muscular."
</p>
<p>Fala-se muito sobre as diversas maneiras de adicionar intensidade aos treinos para <b>ganho de massa muscular</b>,<br>
técnicas como drop-sets, repetições forçadas, contrações de pico, treino suplemento, etc.<br>
Contudo existem algumas maneiras inovadoras que pouca gente conhece e auxiliam no desenvolvimento da <b>hipertrofia muscular</b>.
</p> 
<p><strong>TREINO COM REPETIÇÕES PARCIAIS</strong></p>
<p>Essa técnica envolve segurar o peso em diversas posições do exercício. Mantendo uma contração constante e por períodos mais longos. Vejamos como exemplo a elevação lateral (ombros), durante a elevação pare o halter no ponto máximo do movimento e mantenha até ele começar a descer sozinho (com certeza isso vai acontecer). Ao chegar ao final do movimento de um intervalo de 5 a 10 segundos e eleve novamente só que em um ângulo um pouco abaixo que máximo. Faça essa sequencia em pelo menos 3 ou 4 ângulos diferentes.</p>
<p><strong>TREINO COM MULTI EXERCÍCIOS</strong></p>
<p>Essa técnica envolve alterar os exercícios a cada série realizada, ou seja, ao invés de fazer quatro séries de um exercício, serão quatro exercícios diferentes para o mesmo grupo muscular. Usando o peito como exemplo, quatro séries de supino reto serão substituídas por uma séria de supino reto, uma de crucifixo, um de supino declinado com halteres e uma de supino inclinado, com descanso de um minuto entre cada exercício. Ao realizar quatro movimentos diferentes para um mesmo grupo muscular, você irá exigir diferentes ângulos e tensões sobre o grupo em questão favorecendo o rompimento das fibras e por consequência a&nbsp;<strong>hipertrofia muscular</strong>.</p>
<p><strong>TREINO MEIO A MEIO</strong></p>
<p>Essa técnica é muito parecida com o famoso Treino 21, onde são realizados sets movimentos e três ângulos diferentes. No nosso caso iremos utilizar dois ângulos e realizar seis movimentos em cada, ou seja, realiza-se metade do movimento seis vezes e logos após a segunda metade por mais seis vezes. O objetivo é semelhante aos anteriores, levar os músculos a contrações constantes e em diversos ângulos, recrutando e rompendo o maior número de feixes possíveis.</p>
</center>
</div>
<div id="alimentacao">
<center>	
	<a name="alimentação"></a> <h1>Alimentação</h1>	
	<p>30% treinos e 70% alimentação,regras básicas de todos praticantes de esportes que queiram bons resultados, principalmente os praticantes de musculação,alimentação é a chave de qualquer resultado, seja ele de hipertrofia, emagrecimento, definição muscular, etc. Você é o que você come, alimente-se  bem que 70% dos resultados estão garantidos.</p><br>
<h3>Valorize as proteínas na dieta</h3>
<p>Uma alimentação rica com as melhores proteínas ajuda na recuperação do atleta, após os treinos. De acordo com os especialistas, os nutrientes são responsáveis pela recuperação muscular. Ou seja, o grupo alimentar é uma dica para quem busca o aumento de massa muscular (hipertrofia).
Está indicado consumir 2 g por quilos do peso corporal, ou seja, o número de quilos deve ser metade do número de gramas ingeridas. Um atleta que pesa 80 kg deve ingerir 160 g de proteínas diárias. O consumo moderado deve também ser priorizado, visto que cada grama de proteína é equivalente a 4 cal.
As proteínas indicadas são ovos, leite, peito de frango e carnes vermelhas magras (desde que consumida com moderação). De acordo com os especialistas, as carnes são as melhores fontes de proteína, principalmente as do tipo magro (frango ou peixe).
Os experts no assunto explicam que as carnes de frango, boi, ou mesmo o peru, contêm todos os aminoácidos que o corpo humano precisa para a recuperação de um treino pesado. Por isso, é indicado para os alunos de academia consumir em cada refeição, pelo menos, um tipo de carne animal.
As carnes vermelhas, como já citado, são boas para consumir, porém têm o fato de que a gordura prejudica o desempenho corporal. Por isso, aproveite mais as carnes magras. Uma pedida é a de preferir os peixes, ricos em proteínas e leves como o salmão e atum.
Os ovos também são excelentes fontes de proteínas. O alimento tem dupla função: gordura saudável (gemas) e proteína de baixa caloria (clara). O leite (de preferência o desnatado) também tem boas fontes de proteína, além de ter nutrientes como o cálcio (que faz bem para os ossos).
</p>
<h3>Atenção aos carboidratos</h3>
<p>Como as proteínas, os carboidratos são indicados para a recuperação muscular, principalmente para os dias de treinos intensos. Além disso, o grupo alimentar ajuda a garantir mais energia para o corpo. Mas, nem sempre os nutrientes são indicados para a dieta, pois este fato depende do objetivo da dieta e de qual tipo de carboidrato o atleta ingere.
Um exemplo de carboidrato que devem ser evitados é o do tipo simples. Segundo os especialistas, o grupo alimentar tem a estrutura química molecular de tamanho reduzido e por isso é absorvido rapidamente pelo corpo, aumentando o estoque de açúcar no organismo e dificultando o desempenho corporal. Dentre os alimentos que fazem parte da classificação estão: mel, xarope de milho, açúcares, entre outros.
Já os carboidratos complexos são formados por correntes de açúcar maior, afinal a estrutura molecular destes alimentos é maior e mais complexa. São alimentos absorvidos lentamente pelo corpo e assim, aumentam gradualmente a glicemia, mais lentamente que os carboidratos simples. Os alimentos fontes de carboidratos complexos de baixo IG (índice glicêmico) são: arroz e pães integrais, batata doce, lentilha e fibras. 
Caso queira consultar mais alimentos de baixo IG para incluir em sua dieta, pode ver nossa tabela de índice glicêmico dos carboidratos e também nosso artigo sobre os melhores alimentos para ganho de massa muscular – Os Carboidratos.
Segundo os profissionais, o ideal é ingerir de 2 g para quilo (no mesmo esquema que as proteínas), ou, para um treino mais intenso, a ingestão de 4 g para cada quilo. Ou seja, um aluno que tem 80 kg deve ingerir 240 g diários de carboidratos complexos.
</p> </center>
	</div>
	<div id="suplementacao">
<center>		<a name="suplementacao"></a> <h1>Suplementação</h1>
<p>Alimentação combinada com uma suplementação correta, para quem quer ganhar massa muscular é indispensavel. Não conseguimos(até conseguimos, mas é muito difícil) tirar todas nossas necessidades diárias dos alimentos. É ai que entra o grande parceiro de todo praticante de atividades físicas, em especial, a musculação, os Suplementos Alimentares.
Nos dão suportes a todas as deficiências diárias complementando nossa alimentação, deixando nosso corpo saciado de todas as nescessidades e gastos energéticos.
</p>
<h3>Ingira suplementos com moderação</h3>
<p>Os suplementos, como sugere o nome, são para suprir deficiências alimentares e para auxiliar o desempenho nos resultados na academia.
Antes mesmo de apostar todas as fichas nos suplementos, lembre-se de que o bom resultado é garantido na união entre academia, nutrição e suplementos. O uso dos suplementos deve ser bem planejado, regados a árduos dias de treinos que só serão alcançados, após muito tempo de dedicação. 
Um dos suplementos indicados pelos experts no assunto é a Whey Protein, que podem ser ingeridos uma vez ao dia, na ausência de treinos. Em dias de treino é recomendando usar duas doses ao dia. A quantidade é o equivalente a 80 g de proteína no corpo, o suficiente para acelerar o crescimento muscular. 
Nesse artigo sobre a Whey Protein você poderá se informar mais a respeito de como tomar, efeitos além dos benefícios da Whey Protein.
A Beta-Alanina é um aminoácido que ajuda na força e resistência do atleta. De acordo com estudiosos, o suplemento ajuda também no crescimento muscular. O indicado é ingerir de 1 a 2 g antes e depois dos exercícios.
Já a Glutamina, que também é um aminoácido, tem propriedades imunológicas, ajuda no crescimento muscular e auxilia na taxa metabólica do corpo. Os especialistas recomendam usar de 5 a 10 g do suplemento, antes de dormir.
A Creatina pode ajudar no aceleramento da recuperação, após os exercícios. O suplemento ajuda a diminuir a dor, ocasionada pelos exercícios pesados, e ajuda na força muscular. Os especialistas indicam a ingestão de 3 a 5 gramas de Creatina, antes e após a musculação. 
Nesse artigo falamos como tomar a creatina.
Os multivitamínicos são indicados para o uso diário no café da manhã e janta. São auxiliares para a queima de gordura corporal. A Arginina, por sua vez, ajuda a fluir o sangue melhor ao se converter para óxido nítrico (as veias ficam mais aparentes).
Além dos já citados, os treinos podem ser balanceados com Tirosina (queima de gordura), ZMA (altera o nível de hormônios anabólicos), BCCA’S (ajuda no crescimento muscular, Glucosamina e Condroitina (previne lesões).
</p></center>
	</div>
	<div id="descanso">
<center>		<a name="descanso"></a> <h1>Descanso</h1>
<p>8 Horas de sono (bem dormido) por dia, é o minimo depois de um dia de trabalho, treino pesado,para o corpo recompor as energias e crescer, sim, crescer!
Seu corpo cresce durante seu sono, por isso a hora do descanso é sagrada. Durma bem, e repita o processo! Quem disse que aumentar a massa muscular é facil?</p>
<h3>Tenha uma boa noite de sono</h3>
<p>O hormônio GH, também chamado de hormônio do crescimento, ajuda diretamente no crescimento, principalmente durante a puberdade. 
À medida que você envelhece, o GH continua sendo produzido, em quantidades menores, mas ainda com um papel muito importante. 
Ele otimiza a regeneração muscular, desde que existam algumas horas de sono, pois é apenas nesse momento que o GH é liberado. 
"Costumo dizer aos meus atletas que o sono faz parte do treino", afirma o educador físico Gustavo Abade.
</p>
<h3>Descanse logo após o exercício</h3>
<p>É fato que a correria do dia a dia torna quase impossível um bom descanso depois do treino. 
Mas vale a pena achar uma brecha na agenda para relaxar após a atividade física. 
"O período em repouso melhora a oxigenação das células musculares, o que acelera bastante a recuperação das microlesões das fibras musculares", afirma o educador físico Adriano Braga, personal trainer em São Paulo. 
Se não der mesmo para fazer a pausa, opte por treinar depois do trabalho, período em que você já se livrou de todos os compromissos do dia e pode ficar mais relaxado.
</p>
</center>

</div>

<a href="#voltaraotopo" class="voltarTopo"></a>	   
	</div>
	</body>
</html>
