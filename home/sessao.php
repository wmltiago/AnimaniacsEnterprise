<meta charset="utf-8">
<!--<script>

function exit(){
location.href="sair.php"



}

</script>-->
<?php
include("conexao.php")

 $login = $_POST["login"];
    $senha = $_POST["senha"];

$stmt = $conexao->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ?"); 
$stmt->bindParam(1, $_POST['login']); 
$stmt->bindParam(2, $_POST['senha']);   

$stmt->execute();

if(isset($_POST['nome']) != ""){

    $login=$_POST['login']; $nome=$_POST['nome']; $cpf=$_POST['cpf'];
	
   session_start();
    
    $_SESSION["nome"] = $nome;
 
    echo "Olá ".$nome." você está logado como ".$login;

   }

echo "<br> <input type='submit' name='botao' value='EXITE' onclick='exit();'>";
?>
