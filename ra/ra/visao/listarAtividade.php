<HTML>
	<HEAD>
		<TITLE> Lista de Atividades</TITLE>
		<META charset="utf-8" />
	</HEAD>
	<BODY>
		<?php
			include_once "../controle/controleListar.php";
			include_once "../controle/atividade.php";
			
		?>
		<H1> Lista de Atividades </H1>
		
		<TABLE border="1">
			<TR>
				<TH> Id </TH>
				<TH> Disciplina </TH>
				<TH> Tema </TH>
				<TH> Descrição </TH>
				<TH> Nota </TH>
				<TH> Data </TH>
			</TR>
		<?php
			foreach($lista as $i=>$ativ){
				$i++;
				echo "<TR>";
				echo "<TD>" . $ativ->id . "</TD>";
				echo "<TD>" . $ativ->disciplina . "</TD>";
				echo "<TD>" . $ativ->tema . "</TD>";
				echo "<TD>" . $ativ->descricao . "</TD>";
				echo "<TD>" . $ativ->nota . "</TD>";
				echo "<TD>" . $ativ->data . "</TD>";
				echo "</TR>";
			}
		?>
		
		</TABLE>
		
		
		
	</BODY>
</HTML>
