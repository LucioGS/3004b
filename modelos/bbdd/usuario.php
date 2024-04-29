<?php


	function listado_usuarios(){

		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$usuarios = $mbd->query('SELECT * FROM usuarios');
		$array = $usuarios->fetchAll(PDO::FETCH_ASSOC);
		return $array;
		
	}
	
	
	function login($user, $password){	
	
		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$sql = "SELECT * FROM usuarios WHERE user='" . $user . "' AND password='" . $password ."'";
		$usuarios = $mbd->query($sql);
		if ($usuarios->rowCount() > 0){	
			return 1;
		}else{
			return 0;
		}
		
    }


?>