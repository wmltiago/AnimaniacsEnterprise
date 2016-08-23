

<?php
try{
$conexao=new PDO("mysql:host=localhost;dbname=acessoria_esportiva","root","password");
}catch(PDOException $e){ "Codigo do Erro: ".$e->getCode()." Erro: ".$e->getMessage();
}


try{

$login = $_POST["login"];
    $senha = $_POST["senha"];



// Preparando statement 
$stmt = $conexao->prepare("SELECT * FROM usuario WHERE nome = ? AND senha = ?"); 
$stmt->bindParam(1, $_POST['login']); 
$stmt->bindParam(2, $_POST['senha']);
   
//executando
$stmt->execute();



$obj = $stmt->fetchObject(); 

if ($obj) { 
$_SESSION['login'] = $_POST['login']; 
header('Location: ../home/index.html'); 
} else { 
echo '<p class="erro">Login/Senha inv&aacute;lidos</p>'; 
} 


}catch(PDOException $e){
	echo "Houve erro na inserção.".$e->getCode()." - ".$e->getMessage();
}
?>