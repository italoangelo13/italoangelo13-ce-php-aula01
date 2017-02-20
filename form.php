<?php
	$a = $_REQUEST['num1'];
	$b = $_REQUEST['num2'];

	$soma = $a + $b;
	$sub = $a - $b;
	$mult = $a * $b;
	$div = $a / $b;
	$pot = pow($b, $a);
	$potf = number_format($pot, 0, '.', '.');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP - Aula 01</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>
	<div id="geral" class="container-fluid">
		<header id="header" class="row">
			<h1 class="col-lg-12" style="text-align: center;">PHP - ATIVIDADE 01</h1>
		</header><!-- /header -->

		<div class="row">
			<h5 class="col-lg-12" style="text-align: center;">Considere que A seja igual a 10 e B seja igual a 20, eis os seguintes calculos:</h5>
		</div>
		
		
		<div class="row">
			<table class="table" style="text-align: center;">
			  <thead class="thead-striped">
			    <tr>
			      <th style="text-align: center;">Operação</th>
			      <th style="text-align: center;">Resultado</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>A + B</td>
			      <td><?php echo $soma; ?></td>
			    </tr>
			    <tr>
			      <td>A - B</td>
			      <td><?php echo $sub; ?></td>
			    </tr>
			    <tr>
			      <td>A x B</td>
			      <td><?php echo $mult; ?></td>
			    </tr>
			    <tr>
			      <td>A / B</td>
			      <td><?php echo $div; ?></td>
			    </tr>
			    <tr>
			      <td>B<sup>A</sup></td>
			      <td><?php echo $potf ; ?></td>
			    </tr>
			  </tbody>
			</table>
		</div>
		

		<div class="row">
			<h3>Calcular com novos valores</h3>
		</div>

		<div class="row">
			<form action="form.php" method="POST" accept-charset="utf-8">
				<p>A = <input type="number" name="num1"></p>
				<p>B = <input type="number" name="num2"></p>
				<button class="btn btn-success" type="submit">Calcular</button>
			</form>
		</div>
	</div>
	
</body>
</html>