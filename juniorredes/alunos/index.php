<?php
session_start();
if($session_start['login']==null){
	header("Location: ../index.php");
}else{
	echo "Bem vindo".$_SESSION['login'];
}
?>
<a href="../controle/sair.php">Sair</a>