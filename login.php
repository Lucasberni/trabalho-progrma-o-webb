<?php
	session_start();

	$usuario= $_POST["usuario"];
	$senha= $_POST["senha"]; 

	if($usuario === "" && $senha === ""){
		$_SESSION["Login"] = "s"; 
		$_SESSION["user"] = "$usuario"; 
		$_SESSION["erro"] = ""; 

	}
	else{
		$_SESSION["erro"] = "Usuário ou senha incorretos!";
	}

	header("Location: index.php");
?>