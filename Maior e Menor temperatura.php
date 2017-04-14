
<html>
<head>
	<title>Exer1 aula4</title>
	</head>
	<body><h1>Digite aqui a temperatura media:</h1>
	
	<p>
	<form action="A1.php"method="POST">
	<table>
	<tr>
		<td>Janeiro:</td>
		<td><input type ='text' value='0' name='m1'></td>
		</tr>
	<tr>
		<td>Fevereiro:</td>
		<td><input type = 'Text' value='0' name='m2'></td>
		</tr>
<tr>
		<td>Marco:</td>
		<td><input type = 'Text' value='0' name='m3'></td>
		</tr>
<tr>
		<td>Abril:</td>
		<td><input type = 'Text' value='0' name='m4'></td>
		</tr>
<tr>
		<td>Maio:</td>
		<td><input type = 'Text' value='0' name='m5'></td>
		</tr>
		<tr>
		<td>Junho:</td>
		<td><input type = 'Text' value='0' name='m6'></td>
		</tr>
		<tr>
		<td>Julho:</td>
		<td><input type = 'Text' value='0' name='m7'></td>
		</tr>
		<tr>
		<td>Agosto:</td>
		<td><input type = 'Text' value='0' name='m8'></td>
		</tr>
		<tr>
		<td>Setembro:</td>
		<td><input type = 'Text' value='0' name='m9'></td>
		</tr>
		<tr>
		<td>Outubro:</td>
		<td><input type = 'Text' value='0' name='m10'></td>
		</tr>
		<tr>
		<td>Novembro:</td>
		<td><input type = 'Text' value='0' name='m11'></td>
		</tr>
		<tr>
		<td>Dezembro:</td>
		<td><input type = 'Text' value='0' name='m12'></td>
		</tr>
		
		
		<tr>
		<td><input type='submit' value='Calcular'/></td>
		<td><input type='reset' value='Limpar'/></td>
		</tr>
		</table>
		</form>
		<?php
		if(isset($_POST["m1"]))
		{
			$vetor[]=$_POST["m1"];
			$vetor[]=$_POST["m2"];
			$vetor[]=$_POST["m3"];
			$vetor[]=$_POST["m4"];
			$vetor[]=$_POST["m5"];
			$vetor[]=$_POST["m6"];
			$vetor[]=$_POST["m7"];
			$vetor[]=$_POST["m8"];
			$vetor[]=$_POST["m9"];
			$vetor[]=$_POST["m10"];
			$vetor[]=$_POST["m11"];
			$vetor[]=$_POST["m12"];
			
			$menor=$vetor[0];
			$maior=$vetor[0];
			
			foreach($vetor as $numero)
			{
				if($numero < $menor)
					$menor=$numero;
				
				if($numero > $maior)
					$maior=$numero;
			}
			echo("<br><h2>A menor media encontra e: $menor");
			echo("<br>A maior media encontra e: $maior</h2>");
		}
		?>
		
	</body>
</html>