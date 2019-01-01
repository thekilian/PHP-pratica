
<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Usuários</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<div class="container">

	<h1>Cadastro de Usuários</h1>
	<hr/>

	<button class="btn btn-success"><a id="add-user" href="adicionar.php">Adicionar novo usuário</a></button>

	<br/><br/>

	<table border="0" width="100%" class="table table-stiped">
		<tr>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>E-mail</th>
			<th>Ações</th>
		</tr>

<?php
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $usuario) {
			echo '<tr>';
			echo '<td>'.$usuario['nome'].'</td>';
			echo '<td>'.$usuario['sobrenome'].'</td>';
			echo '<td>'.$usuario['email'].'</td>';
			echo '<td><a href="editar.php?id='.$usuario['id'].'"><img src="assets/images/tools.png" width="25px"></a>  <a href="excluir.php?id='.$usuario['id'].'"><img src="assets/images/trash.png" width="25px"></a></td>';
			echo '</tr>';
		}
	}

?>

	</table>

</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>