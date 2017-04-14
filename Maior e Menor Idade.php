
<html>
<head>
	<title>Exer2 aula4</title>
	</head>
	<body><h1>Digite aqui o nome, idade e time:</h1>
	
	<p>
	<form action="A2.php"method="POST">
	<table>
	<tr>
		<td>Aluno 1:</td>
		<td><input type= 'text' value='0' name='nome01'></td>
		<td>Idade 1:</td>
		<td><input type ='text' value='0' name='idade01'></td>
		<td>Time 1:</td>
		<td><input type ='text' value='0' name='time01'></td>
		</tr>
		<tr>
		<td>Aluno 2:</td>
		<td><input type ='text' value='0' name='nome02'></td>
		<td>Idade 2:</td>
		<td><input type ='text' value='0' name='idade02'></td>
		<td>Time 2:</td>
		<td><input type ='text' value='0' name='time02'></td>
		</tr>
		<tr>
		<td>Aluno 3:</td>
		<td><input type ='text' value='0' name='nome03'></td>
		<td>Idade 3:</td>
		<td><input type ='text' value='0' name='idade03'></td>
		<td>Time 3:</td>
		<td><input type ='text' value='0' name='time03'></td>
		</tr>
	
		
		
		<tr>
		<td><input type='submit' value='Calcular'/></td>
		<td><input type='reset' value='Limpar'/></td>
		</tr>
		</table>
		</form>
		<?php
		
		if (isset ($_POST["nome01"])){
			$vetor_nome[]=$_POST["nome01"];
			$vetor_nome[]=$_POST["nome02"];
			$vetor_nome[]=$_POST["nome03"];
			
			$vetor_idade[]=$_POST["idade01"];
			$vetor_idade[]=$_POST["idade02"];
			$vetor_idade[]=$_POST["idade03"];
			
			$vetor_time[]=$_POST["time01"];
			$vetor_time[]=$_POST["time02"];
			$vetor_time[]=$_POST["time03"];
			
			$menor=0;
			$maior=0;
			
			for($i=0; $i<3; $i++){
				if($vetor_idade[$i] < $vetor_idade[$menor])
					$menor=$i;
				
				if($vetor_idade[$i] > $vetor_idade[$maior])
					$maior=$i;
			}
			echo("<br><h2>Aluno com menor idade e:".$vetor_nome[$menor]. "Idade:".$vetor_idade[$menor]."Time".$vetor_time[$menor]."<br>");
			echo("<br>Aluno com maior idade e:".$vetor_nome[$maior]. "Idade:".$vetor_idade[$maior]."Time".$vetor_time[$maior]."<br>");
		}
		
		
		
		?>
		
	</body>
</html>
