<?php

	include "modelos/bbdd/usuario.php"; 
	
	if(login($_POST["user"],$_POST["password"]) == 1){
		header('Location: filtro.php');
	}else{
		header('Location: index.php');
	}

?>
