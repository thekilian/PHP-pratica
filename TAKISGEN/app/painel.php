<?php
session_start(); // Session sempre antes de tudo!

require 'config.php';
include('includes/header.html'); // Deixe o conteúdo fora da sua aplicação

# ｡･:*:･ﾟ★,｡･:*:･ﾟ☆　LOGIN MAGIC GOES HERE　 ｡･:*:･ﾟ★,｡･:*:･ﾟ☆ #
/*
Se o usuário não está http://localhost/PHP-pratica/TAKISGEN/app/logado, ou seja a chave 'logado' do array de sessão não foi setada.
então, redireciona de volta para a página de login
É importante que essa chave no array da session para controle seja configurada por VOCÊ.
Te explico melhor depois se quiesr
*/
if(!isset($_SESSION['logado'])) {
	session_destroy(); // Destrua a sessão, just in case! ;)
	header("Location: login.php");
}

?>

<!-- Navigation -->
<?php
// O menu também é conteúdo estático. Pode ser um arquivo externo.
include ('includes/sidebar.html');

?>

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li id="dashboard" class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Meu Dashboard</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-primary o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">
				<?php
					$sql = "SELECT id, frase, autor FROM lista ORDER BY RAND() LIMIT 1";
					$result = $pdo->query($sql);

					$chosen_one = $result->fetch(PDO::FETCH_ASSOC);

					echo "{$chosen_one['frase']} <br> <strong>{$chosen_one['autor']}</strong>";
				?>
                            </div>
                        </div>
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">Ver próxima</span>

<!--Ver como faz para clicar no "Ver próxima" e aparecer a próxima frase no espaço (como se fosse um atualizar)-->

                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-success o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">
                                <?php
                                    echo "Bem vindo,  <strong>".$_SESSION['nome']."</strong>!";
                                    echo "<br/>";
                                    echo "Seu e-mail é: ".$_SESSION['email'];
                                ?>
                            </div>
                        </div>
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-warning o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">
                                (n° frases cadastradas)
                                <?php
					$sql = "SELECT COUNT(*) AS num_phrases FROM lista";
					$result = $pdo->query($sql);
					$total = $result->fetch(PDO::FETCH_ASSOC);

					//var_dump($total);

					echo $total['num_phrases']." frases cadastradas"; // Vc tava dando echo num array
                                ?>
                            </div>
                        </div>

                        <!--
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                        -->

                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-danger o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">
                                (n° usuários cadastrados)
                                <?php
					$sql = "SELECT COUNT(*) AS users FROM usuarios";
					$result = $pdo->query($sql);
					$total = $result->fetch(PDO::FETCH_ASSOC);

					//var_dump($total);

					echo $total['users']." usuários cadastradas"; // Aqui também
                                ?>
                            </div>
                        </div>

                        <!--
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                        -->

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-8">


                    <!-- Card Columns Example Social Feed -->
                    <div class="card-columns">



                    </div>
                    <!-- /Card Columns -->

                </div>

                <div class="col-lg-4">

                </div>
            </div>

            <!-- Example Tables Card FRASES-->
            <div class="card mb-3">
                <div class="card-header">
                    <i id="frases" class="fa fa-table"></i> Frases Cadastradas
                </div>

                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Frase</th>
                                    <th>Autor</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Frase</th>
                                    <th>Autor</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </tfoot>
                            <tbody>
				<?php
					$sql = "SELECT * FROM lista";
					$sql = $pdo->query($sql);
					if($sql->rowCount() > 0) {
						foreach ($sql->fetchAll() as $phrase) {
							echo '<tr>';
							echo '<td>'.$phrase['frase'].'</td>';
							echo '<td>'.$phrase['autor'].'</td>';
							echo '<td><a href="update.php?id='.$phrase['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>';
							echo '<td><a href="delete.php?id='.$phrase['id'].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>';
							echo '</tr>';
						}
					}
				?>
			    </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>

			<!-- Example Tables Card USUÁRIOS -->
            <div class="card mb-3">
                <div class="card-header">
                    <i id="usuarios" class="fa fa-user-o"></i> Usuários Cadastrados
                </div>

                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </tfoot>
                            <tbody>
				<?php
					$sql = "SELECT * FROM usuarios";
					$sql = $pdo->query($sql);
					if($sql->rowCount() > 0) {
						foreach ($sql->fetchAll() as $user) {
							echo '<tr>';
							echo '<td>'.$user['nome'].'</td>';
							echo '<td>'.$user['email'].'</td>';
							echo '<td><a href="update.php?id='.$user['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>';
							echo '<td><a href="delete.php?id='.$user['id'].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>';
							echo '</tr>';
						}
					}
				?>
			    </tbody>
                        </table>
                    </div>
                </div>


                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

<?php
include('includes/footer.html');
?>

</body>
</html>
