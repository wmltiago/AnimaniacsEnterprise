<html>
<head>
<meta charset="utf-8">
<title> autenticando usuario</title>
<script type="text/javascript">
function loginOk(){
	setTimeout("window.location='index.php'", 2000);
}

</script>
</head>
<body>

<?php
session_start();
session_destroy();

echo "<center><h1>Saindo . . .</h1></center>";
echo "<center><h1>(╥﹏╥)</h1></center>";
echo  "<script>loginOk();</script>";

//header("Location: index.php");


?>

</body>
</html>

