<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora IMC</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="container">
		<h2>Calculadora de IMC</h2>
		<hr/>
		
		<form method="POST" action="calculo.php">
			<div class="form-group">
				<input class="form-control" type="number" name="height" placeholder="Please type your height">
			</div>
			<div class="form-group">
				<input class="form-control" type="number" name="weight" placeholder="Please type your weight">
			</div>
				<button class = "btn btn-success btn-block">Calculate</button>
		</form>
	</div>

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
