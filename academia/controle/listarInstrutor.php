<?php
	include_once "instrutor.php";
	
	$conexao = mysqli_connect("localhost", "root", "vertrigo", "academia-ginastica");
	$dados = mysqli_query($conexao, "SELECT * FROM instrutor");
	//matriz de resultado
	
	$lista = array();
	
	while($instr = mysqli_fetch_array($dados)){
	
	//listar a tabela INSTRUTOR do banco de dados no PHPmyadmin

	$id_instrutor = $instr["id_instrutor"]; 
	$nome_instrutor = $instr["nome_instrutor"]; 
	$rg_instrutor = $instr["rg_instrutor"]; 
	$data_nasc_instrutor = $instr["data_nasc_instrutor"];
	$titulacao_instrutor = $instr["titulacao_instrutor"];
	$telefone_instrutor = $instr["telefone_instrutor"]; 

		//criação de uma nova variável instrutor com a declaração das variavéis entre parênteses
		$instr = new Instrutor($id_instrutor, $nome_instrutor, $rg_instrutor, $data_nasc_instrutor, $titulacao_instrutor, $telefone_instrutor); 
		
		//ao final do processo, o banco irá listar todas as informações da tabela INSTRUTOR 
		$lista[] = $instr;
	}		
?>
	
	
	
	
	
	