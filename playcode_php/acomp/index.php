
<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registro de Acompanhamento</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<div class="container">

	<h1>Registro de Acompanhamento</h1>
	<hr/>

	<button class="btn btn-success"><a id="add-user" href="adicionar.php">Adicionar novo registro</a></button>

	<br/><br/>

	<table border="0" width="100%" class="table table-stiped">
		<tr>
			<th>Aluno</th>
			<th>Matrícula</th>
			<th>Turma</th>
			<th>Responsável</th>
			<th>Tipo de contato</th>
			<th>Registro</th>
			<th>Observações</th>
		</tr>

<?php
	$sql = "SELECT * FROM registro";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $registro) {
			echo '<tr>';
			echo '<td>'.$registro['aluno'].'</td>';
			echo '<td>'.$registro['matricula'].'</td>';
			echo '<td>'.$registro['turma'].'</td>';
			echo '<td>'.$registro['responsavel'].'</td>';
			echo '<td>'.$registro['contato'].'</td>';
			echo '<td>'.$registro['msg'].'</td>';
			echo '<td>'.$registro['observacoes'].'</td>';
			echo '<td><a href="editar.php?id='.$registro['id'].'"><img src="assets/images/tools.png" width="25px"></a>  <a href="excluir.php?id='.$registro['id'].'"><img src="assets/images/trash.png" width="25px"></a></td>';
			echo '</tr>';
		}
	}

?>

	</table>

</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>