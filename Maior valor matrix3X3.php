
<html>
<head>
	<title>Exer5 aula4</title>
	</head>
	<body><h1>Digite o valor da matriz 3x3:</h1>
	
	<p>
	<form action="A5.php"method="POST">
	<table>
	<tr>
	<td><input type="text" size="15" name="00"></td>
	<td><input type="text" size="15" name="01"></td>
	<td><input type="text" size="15" name="02"></td>
	</tr>
	<tr>
	<td><input type="text" size="15" name="10"></td>
	<td><input type="text" size="15" name="11"></td>
	<td><input type="text" size="15" name="12"></td>
	</tr>
	<tr>
	<td><input type="text" size="15" name="20"></td>
	<td><input type="text" size="15" name="21"></td>
	<td><input type="text" size="15" name="22"></td>
	</tr>
		
		
		
		<tr>
		<td><input type='submit' value='Calcular'/></td>
		<td><input type='reset' value='Limpar'/></td>
		</tr>
		</table>
		</form>
		<?php
		
		if (isset ($_POST["00"])){
			$matriz[0][0]=$_POST["00"];
			$matriz[0][1]=$_POST["01"];
			$matriz[0][2]=$_POST["02"];
			
			$matriz[1][0]=$_POST["10"];
			$matriz[1][1]=$_POST["11"];
			$matriz[1][2]=$_POST["12"];
			
			$matriz[2][0]=$_POST["20"];
			$matriz[2][1]=$_POST["21"];
			$matriz[2][2]=$_POST["22"];
			
			$maior=$matriz[0][0];
			for ($i=0;$i<3; $i++)
				for($j=0;$j<3;$j++)
				{
					if($matriz[$i][$j]>$maior)
						$maior=$matriz[$i][$j];
				}
				
			
			
			echo("<br>A maior e:$maior");
		
		}
		
		
		
		?>
		
	</body>
</html>
