<html>
	<HEAD>
		<title> Informações sobre o INSTRUTOR - Academia </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"> 
</head>
	<body>
		
		<!--mostrar as informações contidas no banco para o usuário -->
		<?php
			include_once "../controle/instrutor.php";
			include_once "../controle/listarInstrutor.php";
			
		?>
		<h1> Tabela INSTRUTOR - Academia Ginastica </h1>

		<style>
			
		</style>
		
		
		<!--crição da tabela para a apresentação do banco -->
		<table border="1" class="alterar">
			<tr>
				<th> Id </th>
				<th> Nome </th>
				<th>  RG </th>
				<th>  Data de Nascimento </th>
				<th> Titulação </th>
				<th> Telefone </th>
</tr>
		
		<!--para cada célula da matriz, ele percorre os dados e mostra para o usuário -->  
		<?php
			foreach($lista as $i=>$instr){
				$i++;
				echo "<tr>";
				echo "<th> $instr->id_instrutor </th>"; 
				echo "<th> $instr->nome_instrutor </th>"; 
				echo "<th> $instr->rg_instrutor </th>"; 
				echo "<th> $instr->data_nasc_instrutor </th>"; 
				echo "<th> $instr->titulacao_instrutor </th>"; 
				echo "<th> $instr->telefone_instrutor </th>"; 
			}
		?>
		
		</table>
		
		
		
		</body>
		</html>
