
<html>
	<head>
	</head>
	<title>Exer6 aula4</title>
	<body>		
	<h1>Digite o nome e Selecione o Estado</h1>
		<p>
		<form action="A6.php" method='post'>
			<table>
<tr>
	<td>Nome</td>
	<td><input type = 'Text' name='nome'></td>
</tr>
<tr>
	<td>UF</td>
	<td><select name='uf'>
	<option value ="sc">SC</option>
	<option value ="pr">PR</option>
	<option value ="rs">RS</option>
	
	<option value ="sp">SP</option>
	<option value ="rj">RJ</option>
	<option value ="mg">MG</option>
	<option value ="es">ES</option>
	</select>
	</td>
</tr>
<tr>
		<input type = 'submit' value='Enviar'/>
		<input type = 'reset' value='Limpar'/>
</tr>
</table>
</form>
<?php
	if (isset($_POST["nome"])) 
		{			
		$estados = array(	'sc'=>'Santa Catarina',
							'pr'=>'Parana', 
							'rs'=>'Rio Grande do Sul', 
							'sp'=>'Sao Paulo', 
							'rj'=>'Rio De Janeiro', 
							'mg'=>'Minas Gerais', 
							'es'=>'Espirito Santo'
		);
		
		$regioes = array(	'sc'=>'Sul',
							'pr'=>'Sul', 
							'rs'=>'Sul', 
							'sp'=>'Sudeste', 
							'rj'=>'Sudeste', 
							'mg'=>'Sudeste', 
							'es'=>'Sudeste'
		);
			
		$nome = $_POST["nome"];
		$uf = $_POST["uf"];
		
		echo("<br><h2> Nome: $nome");
		echo("<br><h2> Estado: ".$estados[$uf]);
		echo("<br><h2> Regiao: ".$regioes[$uf]);
		
		}

?>		
</body>
</html>