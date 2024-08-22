<?php
	include_once "atividade.php";
	
	$con = mysqli_connect("localhost", "root", "vertrigo", "ra");
	$dados = mysqli_query($con, "SELECT * FROM atividade");
	//matriz de resultado
	
	$lista = array();
	
	while($a = mysqli_fetch_array($dados)){
		//listar todas as atividades
			
		//agora criação de uma instância de animal
		$ativ = new Atividade($a["id"], $a["disciplina"],
		$a["tema"], $a["descricao"], $a["nota"], 
		$a["data"]);
		
		//criar uma lista com todos os animais
		//cada animal será um objeto da classe Animal
		$lista[] = $ativ;
	}		
?>
	
	
	
	
	
	