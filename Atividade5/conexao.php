<?php

	//$link = mysqli_connect("127.0.0.1", "root", "1234", "webdev"); - Alternativa direta.	
	$server = "127.0.0.1";
	$user1 = "root";
	$pssword = "1234";
	$dbName = "webdev";
	
	//Variavel com o status da conexao do DB.
	$status = mysqli_connect($server, $user1, $pssword, $dbName);
	
	//verificando a conexao com o banco
	if ($status == false){
		echo "<br>Não foi possível se conectar ao banco!";
		exit;
	}
?>